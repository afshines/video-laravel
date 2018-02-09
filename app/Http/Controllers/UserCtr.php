<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Yajra\DataTables\Facades\DataTables;

class UserCtr extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['sendCode','requestCode']]);
    }

    public function index(Request $request)
    {

        $model = User::query();

        return DataTables::eloquent($model)
            ->editColumn('image', function(User $user) {
                if($user->image != null)
                    return '/uploads/images/' . $user->image ;
                else
                    return '/img/no-picture.png'   ;
            })
            ->toJson();
    }

    public function  sendCode(Request $request)
    {

        $credentials = $request->only('mobile', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            $user = User::where('mobile',$credentials['mobile'])->where('password',$credentials['password'])->first();

            if(null == $user)
                return response()->json(['result' => 'invalid_credentials'], 200);

            $token = JWTAuth::fromUser($user);

            if (!$token) {
                return response()->json(['result' => 'could_not_create_token'], 200);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['result' => 'could_not_create_token'], 200);
        }


        $user->active=1;
        $user->save();

        // all good so return the token
        return response()->json(array("result"=>$token));
    }

    public function  requestCode(Request $request)
    {
        $user = User::where('mobile',$request->get('mobile'))->first();

        if(null == $user)
            return response()->json(array("result"=>"0"));

        $user->password = $this->randomString();

        $user->save();

        return response()->json(array("result"=>"1"));
    }

    function randomString($length = 6) {
        $str = "";
        $characters = array_merge( range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
}