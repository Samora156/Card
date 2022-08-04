<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use Alert;
use BaconQrCode\Encoder\QrCode;
use Illuminate\Support\Facades\App;

class PenggunaController extends Controller
{
    public function index() {
        $pengguna = Pengguna::all();
        return view('user.pengguna', compact('pengguna'));
    }

    public function data() {
        $pengguna = Pengguna::all();
        return response()->json([
            'data' => $pengguna
        ]);
    }

    public function tambah() {
        $pengguna = Pengguna::all();
        return view('user.pengguna-add', compact('pengguna'));
    }

    public function insert(Request $request) {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($foto = $request->file('foto')) {
            $lokasiFoto = 'assets/media/pengguna/';
            $Foto = $lokasiFoto . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($lokasiFoto, $Foto);

            $pengguna = Pengguna::create([
                'foto' => "$Foto",
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);
        } else {
            DB::table('pengguna')->insert([
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);
        }
        return redirect()->route('index')->with('succes',' Data Berhasil di Tambah');
    }

    public function edit($id) {
        $pengguna = Pengguna::find($id);
        return view('user.pengguna-edit', compact('pengguna'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $pengguna = Pengguna::find($id);
        if ($foto = $request->file('foto')) {
            $lokasiFoto = 'assets/media/pengguna/';
            $Foto = $lokasiFoto . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($lokasiFoto, $Foto);
            
            $pengguna->update([
                'foto' => "$Foto",
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);
        } 
        return redirect()->route('index')->with('success',' Data Berhasil di Update');
    }

    public function delete(Request $request) {
        $pengguna = Pengguna::where('id', $request->id)->delete();
        return response()->json($pengguna);
    }

    public function show($id) {
        $pengguna = Pengguna::where('id', $id)->get();
        return view('user.pengguna-show', compact('pengguna'));
    }
    public function print($id) {
        // dd($id);
        $pengguna = Pengguna::where('id', $id)->get();
        // $viewRender = view('user.print', compact('pengguna'))->render();
        // return response()->json([
        //     'pengguna' => $pengguna,
        //     'render' => $viewRender
        // ]);
        return view('user.print', compact('pengguna'));
    }
}
