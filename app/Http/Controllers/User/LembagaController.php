<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\Lembaga;

class LembagaController extends Controller
{
    public function lembaga() {

        $lembaga = Lembaga::where('id', Auth::user()->id)->first();
        // dd($lembaga);

        return view ('user.lembaga', compact('lembaga'));
    }

    public function lembaga_tambah() {

        $lembaga = Lembaga::where('email', Auth::user()->email)->first();
        // dd($lembaga);

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
                'user_id' => Auth::user()->id,
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
                'user_id' => Auth::user()->id,
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
