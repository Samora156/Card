<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index() {

        //

    }

    public function admin() {

        $var_nama = "Admin";

        return view ('User.index', compact('var_nama'));
        
    }
}
