<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function __construct() {

        $this->middleware('guest')->except('logout');
    }

    // public function login(Request $request) {

    //     $input = $request->all();

    //     $this->validate($request,[

    //         'email' => 'required|email:dns',

    //         'password' => 'required',

    //     ]);

    //     // dd('berhasil login!');

    //     if(Auth::attempt(['email' => $input['email'], 'password' => $input['password']])){

    //         if(auth()->user()->role == 1) {

    //             return redirect()->route('home');
    //         } else {

    //             return redirect()->route('admin');
    //         }
    //     } else {
            
    //         return redirect()->route('login.login')->with('error', 'Email atau Password salah');
        
    //     }
    // }

    public function login(Request $request) {

        $credentials = $request->validate([

            'email' => 'required|email:dns',

            'password' => 'required',

        ]);

        // dd('berhasil login!');

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            if(auth()->user()->role == 1) {

                return redirect()->intended('/user');

            } else {

                return redirect()->intended('/admin');
            }
            
            // return redirect()->route('login.login')->with('error', 'Email atau Password salah');
            
        } else {
            return back()->with('error', 'Login Gagal!');
        }
    }
}
