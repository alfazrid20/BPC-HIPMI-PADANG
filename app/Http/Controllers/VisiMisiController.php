<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data['visimisi'] = DB::table('visimisi')->first();

        return view('visimisi.index',$data);


    }
 public function tambah()
    {
        $data['visimisi'] = DB::table('visimisi')->first();
        return view('visimisi.tambah', $data);
    }
    public function input(Request $r)

    {
        $validator = Validator::make($r->all(),[
            'visi'=>'required',
            'misi'=>'required',
        ],[
            'visi.required' => "Isi Visi ",
            'misi.required' => "Isi Misi "

        ]);
        if ($validator->fails()) {
            return redirect()->route('tambah.visimisi')->withErrors($validator)->withInput();
        }
$visimisi= DB::table('visimisi')->updateOrInsert(
    [
    'id_vimis' => $r->id],[
        'visi' => $r->visi,
        'misi' => $r->misi,
    ]);

if ($visimisi) {
 return back()->with('success', 'data berhasil ditambah');
} else {
 return back()->with('error', 'Tidak Berhasil');
}

    }
    public function ubah($id)
    {
        $data['visimisi'] = DB::table('visimisi')
        ->where('id_vimis', $id)
        ->first();
        return view('visimisi.ubah', $data);
    }
    public function edit(Request $r, $id){
        $visimisi = DB::table('visimisi')
        ->where('id_vimis', $id)
        ->update([
            'visi' => $r->visi,
            'misi' => $r->misi,
        ]);
        if ($visimisi) {
            return redirect()->route('data.visimisi')->with('success', 'data berhasil diubah');
           } else {
            return redirect()->route('tambah.visimisi')->with('error', 'Tidak Berhasil');
           }
    }
    public function delete(Request $r, $id){
        $visimisi = DB::table('visimisi')
        ->where('id_vimis', $id)
        ->delete();
        if ($visimisi) {
            return redirect()->route('data.visimisi')->with('success', 'data berhasil dihapus');
           } else {
            return redirect()->route('tambah.visimisi')->with('error', 'Tidak Berhasil');
           }
    }
}
