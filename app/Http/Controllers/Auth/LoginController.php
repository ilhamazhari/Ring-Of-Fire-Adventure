<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function loginForm()
    {
      return view('login');
    }

    public function login(Request $request)
    {
      $this->validate($request, [
        'username' => 'required',
        'password' => 'required',
        'credentials' => 'required',
      ]);
      if(\Auth::attempt([
        'username' => $request['username'],
        'password' => $request['password'],
        'credentials' => $request['credentials'],
      ])) {
        return redirect('/webmanager');
      }
      
      return redirect('/login')->with('error', 'Login invalid');
    }

    public function logout()
    {
      \Auth::logout();
      return redirect('/login')->with('success', 'You have been logged out successfully!');
    }
}
