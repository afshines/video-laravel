<?php

namespace App\Http\Controllers\UserAuth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    public $redirectTo = '/user/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user.guest', ['except' => 'logout']);
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('user.auth.login');
    }

    protected function sendLoginResponse(Request $request)
    {
        if(Route::currentRouteName() != "api_login") {
            $request->session()->regenerate();

            $this->clearLoginAttempts($request);

            return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());

        }else
        {
            return $this->authenticated($request, $this->guard()->user());
        }
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('user');
    }


    protected function credentials(Request $request)
    {
        $usernameInput = trim($request->{$this->username()});
        $usernameColumn = ctype_digit($usernameInput) ? 'mobile' : $this->username();

        return [$usernameColumn => $usernameInput, 'password' => $request->password, 'active' => 1];
    }

    protected function authenticated(Request $request, $user)
    {
        if(Route::currentRouteName() == "api_login") {

            // if ($request)
            // grab credentials from the request

            $usernameInput = trim($request->{$this->username()});
            $usernameColumn = ctype_digit($usernameInput) ? 'mobile' : $this->username();

            try {
                // attempt to verify the credentials and create a token for the user
                $user = User::where($usernameColumn,$request->get('username'))->where('password',$request->get('password'))->first();
                $token = JWTAuth::fromUser($user);

                if (!$token ) {
                    return response()->json(['error' => 'invalid_credentials'], 401);
                }
            } catch (JWTException $e) {
                // something went wrong whilst attempting to encode the token
                return response()->json(['error' => 'could_not_create_token'], 500);
            }

            // all good so return the token
            return response()->json(compact('token'));
        }
    }

    public function username()
    {
        return 'mobile';
    }
}
