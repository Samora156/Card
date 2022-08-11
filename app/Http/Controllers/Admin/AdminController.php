<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use Redirect;

class AdminController extends Controller
{
    public function home() {

        // if (Auth::check()) 
        //     return Redirect::route('admin');

        return view ('admin.index');

        // return Redirect::route('login');
    }
}
