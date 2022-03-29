<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }
        if($this->guard()->validate($this->credentials($request))){

            $user = $this->guard()->getLastAttempted();
            // dd($user);
            // return view('auth.login', compact('user','request'));
            return view('pincode', compact('user','request'));

            // return $this->sendLoginResponse($request);                

            if($user->status ==1 && $this->attemptLogin($request)) {
                return $this->sendLoginResponse($request);                
            }else{

              $this->incrementLoginAttempts($request);
              //$user->code = SendCode::sendCode($user->phone);
              if($user->save()){
                 return redirect()->back()->with('message','Your Account is DeActivated !');
              }
            }

        }

        
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    public function pincode(Request $request){

        if($this->guard()->validate($this->credentials($request))){

        $user = $this->guard()->getLastAttempted();
        }
        if($user->status == 1 && $user->pin == $request->pin && $this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);                
        }
        
        else{

          $this->incrementLoginAttempts($request);
          if($user->status != 1){
            return redirect()->back()->with('message','Your Account is Deactivated !');
          }
          if($user->save()){
             return redirect()->back()->with('message','Your Pin Is Not Match !');
          }
          
        }
    }
    


}