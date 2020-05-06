<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
        $request->validate([
          'email' => 'required|email|min:5',
          'password' => 'required|min:5'
        ]);

        if(!auth()->attempt($request->only('email', 'password')))
        {
          return response(['logged' => false], 200)->header('Content-Type', 'application/json');
        }

        $user = auth()->user();

        auth()->login($user);

        return response(['logged' => true], 200)->header('Content-Type', 'application/json');
    }

    public function logout()
    {
      if (auth()->logout() === null) {
        return response(['loggedout' => true], 200)->header('Content-Type', 'application/json');
      }
    }
}
