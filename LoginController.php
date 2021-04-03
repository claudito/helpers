<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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

    public function login(){

        $credentials = $this->validate(request(),[

            $this->user()=> 'required|string',
            'password'=> 'required|string'

        ]);

        if( Auth::attempt($credentials) ){

            return redirect()->intended('home');

        }

        return back()->withInput()->withErrors(['user'=>'El Usuario o Contraseña son Incorrectos']);

    }


    public function user(){

        return 'user';

    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
