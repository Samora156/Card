<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use Redirect;

class UserController extends Controller
{
    public function home() {

        // if (Auth::check()) 
        //     return Redirect::route('user');

        return view ('user.index');

        // return Redirect::route('login');
    }
}
