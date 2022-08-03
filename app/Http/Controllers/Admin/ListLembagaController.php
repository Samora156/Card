<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Lembaga;

class ListLembagaController extends Controller
{
    public function index() {

        $lembaga = Lembaga::all();

        return view('admin.list-lembaga', compact('lembaga'));
    }

    public function data() {

        $lembaga = Lembaga::all();

        return response()->json([
            'data' => $lembaga
        ]);
    }
}
