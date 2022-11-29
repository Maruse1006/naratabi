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
       // \Log::info('a');
        $this->middleware('guest')->except('logout');

    }
    public function login(Request $request)
    {
       // $credentials = $this->validate($request, [ 'name' => 'required','password' => 'required', ]);
        $loginData = $request->validate([
            'email' => 'required',
            'password' => 'required'
           // 'form' => 'form',
        ]);

        if (!auth()->attempt($loginData)) {
            Log::info($request->password);
            return response(['message' => 'Invalid Credentials']);
        }
        // $credentials = $request->only('email', 'password');

        // // if (!Auth::attempt($credentials)) {
        // //     // 認証に成功した
        // //     Log::info($request->password);
        // //     return response(['message' => 'Invalid Credentials']);

        // // }
    //     $user = User::where('email',$request->email)->first();

    //     $password = $user->password;
    //     if (!Hash::check($request->password, $password)) {
    //     // パスワード不一致の処理
    //   return response '認証できませんでした';
    //   }
    //    Auth::login($user);    

        $token = auth()->user()->createToken('authToken')->accessToken;
       // Log::info($token);
    
        return response()->json(['token'=>$token],200);
    }
      
    public function user(Request $request)
    {   
       
        $id = Auth()->id();
        $user= Auth::user()->name;
        \Log::info($user);
        return response()->json(compact('id','user'),200);
    }

    protected function logout(Request $request)
  {
    Auth::guard('web')->logout();
    return response()->json();
  }

}
