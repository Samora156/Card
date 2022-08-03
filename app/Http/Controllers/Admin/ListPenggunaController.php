<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class ListPenggunaController extends Controller
{
    public function index() {

        $user = User::all();

        return view('admin.list-pengguna', compact('user'));
    }

    public function data() {

        $user = User::all();

        return response()->json([
            'data' => $user
        ]);
    }
}