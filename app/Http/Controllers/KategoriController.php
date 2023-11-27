<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index()
    {
        $data['kategori'] = DB::table('kategori')->get();

        return view('kategori.index',$data);


    }
 public function tambah()
    {
        return view('kategori.tambah');
    }
    public function input(Request $r)

    {
        $validator = Validator::make($r->all(),[
            'nama_kategori'=>'required',
        ],[
            'nama_kategori.required' => "Isi Kategori "
        ]);
        if ($validator->fails()) {
            return redirect()->route('tambah.kategori')->withErrors($validator)->withInput();
        }
$kategori= DB::table('kategori')->insert([
    'nama_kategori'=> $r->nama_kategori
]);

if ($kategori) {
 return redirect()->route('data.kategori')->with('success', 'data berhasil ditambah');
} else {
 return redirect()->route('tambah.kategori')->with('error', 'Tidak Berhasil');
}

    }
    public function ubah($id)
    {
        $data['kategori'] = DB::table('kategori')
        ->where('id_kategori', $id)
        ->first();
        return view('kategori.ubah', $data);
    }
    public function edit(Request $r, $id){
        $kategori = DB::table('kategori')
        ->where('id_kategori', $id)
        ->update([
            'nama_kategori' => $r->nama_kategori,
        ]);
        if ($kategori) {
            return redirect()->route('data.kategori')->with('success', 'data berhasil diubah');
           } else {
            return redirect()->route('tambah.kategori')->with('error', 'Tidak Berhasil');
           }
    }
    public function delete(Request $r, $id){
        $kategori = DB::table('kategori')
        ->where('id_kategori', $id)
        ->delete();
        if ($kategori) {
            return redirect()->route('data.kategori')->with('success', 'data berhasil dihapus');
           } else {
            return redirect()->route('tambah.kategori')->with('error', 'Tidak Berhasil');
           }
    }
}
