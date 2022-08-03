<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Lembaga;

class LembagaController extends Controller
{
    public function lembaga() {

        $lembaga = Lembaga::all();

        return view ('user.lembaga', compact('lembaga'));
    }

    public function lembaga_tambah() {

        $lembaga = Lembaga::all();

        return view ('user.lembaga', compact('lembaga'));
    }

    public function lembaga_insert(Request $request) {

        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($foto = $request->file('foto')) {
            $lokasiFoto = 'assets/media/lembaga/';
            $Foto = $lokasiFoto . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($lokasiFoto, $Foto);

            $lembaga = Lembaga::create([
                'foto' => "$Foto",
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'website' => $request->website,
            ]);
            
        } else {

            // $lembaga = Lembaga::create($request->all());

            DB::table('lembaga')->insert([
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'website' => $request->website,
            ]);

        }

        // toast('Data berhasil di Tambah','success');

        return redirect('user/lembaga')->with('succes',' Data Berhasil di Tambah');
        
    }
}
