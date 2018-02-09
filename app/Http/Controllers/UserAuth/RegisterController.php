<?php

namespace App\Http\Controllers\UserAuth;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user.guest');
       // $this->middleware('admin', ['except' => []]);
    }

    public function register(Request $request)
    {

        $this->validator($request->all());

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);


        if(Route::currentRouteName() != "api_register") {
            return $this->registered($request, $user)
                ?: redirect($this->redirectPath());
        }
        else
        {
            $result =  $this->registered($request, $user)
                ? "0" : "1";

            return   json_encode(array("result" => $result) );
        }

    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'lname' => 'required|max:255',
            'nic' => 'required|numeric|digits_between:10,10|unique:users',
            'orgId' => 'required|numeric|unique:users',
            'mobile' => 'required|numeric|unique:users',
            'path'=> 'required',
            'city_id'=>'required',
            'email' => 'required|email|max:255|unique:users',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024'
        ]);

        
        //   'email' => 'nullable|email|max:255|unique:users,email,'.Auth::guard('customer')->user()->user_id.',user_id'
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $imageName =null;

        if (Input::file('image')!=null && Input::file('image')->isValid()) {
            $imageName = time().rand(1, 10).'.'.Input::file('image')->getClientOriginalExtension();
            Input::file('image')->move(public_path('uploads/images'), $imageName);
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

        return User::create([
            'name' => $data['name'],
            'lname' => $data['lname'],
            'nic' => $data['nic'],
            'orgId' => $data['orgId'],
            'mobile' => $data['mobile'],
            'path' => $data['path'],
            'accountNumber' => $data['accountNumber'],
            //'bank' => $data['bank'],
            'email' => $data['email'],
            'password' =>randomString(),
            'image' => $imageName,
            'address'=>$data['address'],
            'city_id'=>$data['city_id'],
        ]);



    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('user.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('user');
    }
}
