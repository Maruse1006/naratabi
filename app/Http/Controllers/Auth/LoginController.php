<?php

namespace App\Http\Controllers\Auth;

//use Illuminate\Validatation\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Login;
use App\Models\User;
use Log;


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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        \Log::info('a');
        $this->middleware('guest')->except('logout');

    }
    public function login(Request $request)
    {
        //$credentials = $this->validate($request, [ 'name' => 'required','password' => 'required', ]);
        $loginData = $request->validate([
            'email' => 'required',
            'password' => 'required'
           // 'form' => 'form',
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }
        $token = auth()->user()->createToken('authToken')->accessToken;

        return response()->json(['token'=>$token],200);
    }
      
    public function user(Request $request)
    {
        $user= Auth::user()->name;
        \Log::info($user);
        return response()->json(compact('user'),200);
     
    }

    protected function logout(Request $request)
  {
    Auth::guard('web')->logout();
    return response()->json();
  }

}
