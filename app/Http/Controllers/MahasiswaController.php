<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data['mahasiswa'] = Mahasiswa::get();
        $data['siswa'] = 1;
        return view('index',$data);
    }

    public function simpan(Request $request){
        $request->validate([
            'nama' => 'required|unique:mahasiswa,nama',
            'alamat' => 'required',
            'prodi' => 'required',
        ]);

        $simpan = new Mahasiswa();
        $simpan->nama = $request->nama;
        $simpan->prodi = $request->prodi;
        $simpan->alamat = $request->alamat;
        $simpan->save();

        return back();
    }

    public function hapus($id){
        Mahasiswa::where('id',$id)->delete();
        return back();
    }
}
