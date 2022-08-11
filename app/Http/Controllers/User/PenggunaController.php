<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{DB, Auth};
use Illuminate\Http\Request;
use App\Models\Pengguna;
use Alert;
use App\Models\Card;
use App\Models\Lembaga;
use BaconQrCode\Encoder\QrCode;
use Illuminate\Support\Facades\App;

class PenggunaController extends Controller
{
    public function index() {

        $pengguna = Pengguna::where('user_id', Auth::user()->id)->get();

        return view('user.pengguna', compact('pengguna'));
    }

    public function data() {

        $pengguna = Pengguna::where('id', Auth::user()->id)->get();

        return response()->json([
            'data' => $pengguna
        ]);
    }

    public function generateUniqueCode()
    {
        do {
            $no_id = random_int(100000, 999999);
        } while (Pengguna::where("no_id", "=", $no_id)->first());
  
        return $no_id;
    }

    public function tambah() {

        $pengguna = Pengguna::all();

        return view('user.pengguna-add', compact('pengguna'));
    }

    public function insert(Request $request) {

        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $no = $this->generateUniqueCode();

        if ($foto = $request->file('foto')) {
            $lokasiFoto = 'assets/media/pengguna/';
            $Foto = $lokasiFoto . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($lokasiFoto, $Foto);

            $pengguna = Pengguna::create([
                'user_id' => Auth::user()->id,
                'no_id' => $no,
                'foto' => "$Foto",
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'email' => $request->email,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);
            
        } else {

            // $pengguna = Pengguna::create($request->all());

            DB::table('pengguna')->insert([
                'user_id' => Auth::user()->id,
                'no_id' => $no,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'email' => $request->email,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);

        }

        // toast('Data berhasil di Tambah','success');

        return redirect()->route('index')->with('succes',' Data Berhasil di Tambah');
    }

    public function edit($id) {

        $pengguna = Pengguna::find($id);

        //dd($pengguna);

        return view('user.pengguna-edit', compact('pengguna'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $pengguna = Pengguna::find($id);

        $pengguna->update($request->all());

        if ($foto = $request->file('foto')) {
            $lokasiFoto = 'assets/media/pengguna/';
            $Foto = $lokasiFoto . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($lokasiFoto, $Foto);
            
            $pengguna->update([
                'foto' => "$Foto",
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'email' => $request->email,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);
        } 
        return redirect()->route('index')->with('success',' Data Berhasil di Update');
    }

    public function delete(Request $request) {

        // $pengguna = Pengguna::find($id);

        $pengguna = Pengguna::where('id', $request->id)->delete();

        return response()->json($pengguna);
        
        // return redirect()->route('index')->with('success',' Data Berhasil di Hapus');
    }

    public function show($id) {

        // return view('user.pengguna-show');

        $pengguna = Pengguna::where('id', $id)->get();
        $lembaga = Lembaga::where('user_id', $id)->get();
        $card = Card::all();
        // dd($card);

        return view('user.pengguna-show', compact('pengguna', 'lembaga', 'card'));
    }

    public function card($id)
    {
        $card = Card::where('id', $id)->get();

        return response()->json([
            'data' => $card
        ]);
    }
}
