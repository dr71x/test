<?php

namespace App\Http\Controllers;

use App\Models\encode;
use Illuminate\Http\Request;

class EncodeController extends Controller
{
    public function index(){
        return view('encode');
    }

    public function decode(Request $request){
        $type = pathinfo($request->file('gambar')->getClientOriginalName(), PATHINFO_EXTENSION);
        $gambar = base64_encode(file_get_contents($request->file('gambar')->getRealPath()));

        $simpan = new encode();
        $simpan->type = $type;
        $simpan->gambar = $gambar;
        $simpan->save();

        $id = $simpan->id;
        return redirect()->route('tampilan',['id' => $id])->with('success','Gambar berhasil diupload');
    }

    public function tampilan($id){
        $data ['data'] = encode::where('id',$id)->first();

        return view('tampilan',$data);
    }
}
