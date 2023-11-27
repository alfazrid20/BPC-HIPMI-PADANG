<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $r)
    {
        $data['berita'] = DB::table('berita')->get();
        {
            $data['berita'] = DB::table('berita')
            ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
            ->orderBy('id_berita', 'desc')
            ->get();
        }

        return view('berita.index',$data);


    }
 public function tambah()
    {
        $data['kategori'] = DB::table('kategori')->get();
        return view('berita.tambah',$data);
    }
 public function edit($id)
    {
        $data['berita'] = DB::table('berita')
        ->where('id_berita',$id)
        ->first();
        $data['kategori'] = DB::table('kategori')->get();
        return view('berita.ubah',$data);
    }


public function input(Request $r){

        $validator = Validator::make($r->all(),[
            'judul_berita'=>'required',
            'tanggal_berita'=>'required',
            'isi'=>'required',
            'gambar'=>'mimes:jpeg,jpg,png,bmp,gif,tiff',
        ],[
            'judul_berita.required' => "Isi Judul Berita ",
            'tanggal_berita.required' => "Isi Data Berita ",
            'isi.required' => "Isi Data ",
        ]);
        if ($validator->fails()) {
            return redirect()->route('tambah.berita')->withErrors($validator)->withInput();
        }

        $filename = null;
        if($r->gambar){
            $file = $r->file('gambar');
            $filename=$file->getClientOriginalName();
            $file->move('assets/image/', $filename);
        }
        $berita= DB::table('berita')->insert([
            'id_kategori' => $r->id_kategori,
            'judul_berita'=> $r->judul_berita,
            'slug' => Str::slug($r->judul_berita),
            'tanggal_berita' => $r->tanggal_berita,
            'isi' => $r->isi,
            'gambar' => $filename
        ]);

        if ($berita) {
            return redirect()->route('data.berita')->with('success', 'data berhasil ditambah');
           } else {
            return redirect()->route('tambah.berita')->with('error', 'tidak berhasil');
           }
    }

public function ubah(Request $r, $id){

    $filename = null;

    if ($r->file('gambar') =="") {
        DB::table('berita')->where('id_berita', $id)->update([
            'id_kategori' => $r->id_kategori,
                'judul_berita'=> $r->judul_berita,
                'slug' => Str::slug($r->judul_berita),
                'tanggal_berita' => $r->tanggal_berita,
                'isi' => $r->isi,
        ]);

        return redirect()->route('data.berita');

    }else{

    $filename = null;
        $fotolama = DB::table('berita')->where('id_berita', $id)->first();
        if($fotolama->gambar !=''){
            unlink('assets/image/'. $fotolama->gambar);
        };
        $file = $r->file('gambar');
        $filename=$file->getClientOriginalName();
        $file->move('assets/image/', $filename);

    $berita= DB::table('berita')->where('id_berita', $id)->update([
        'id_kategori' => $r->id_kategori,
        'judul_berita'=> $r->judul_berita,
        'slug' => Str::slug($r->judul_berita),
        'tanggal_berita' => $r->tanggal_berita,
        'isi' => $r->isi,
        'gambar' => $filename
    ]);

    if ($berita) {
        return redirect()->route('data.berita')->with('success', 'data berhasil diubah');
       } else {
        return redirect()->route('tambah.berita')->with('error', 'Tidak Berhasil');
       }

    }
    }
    public function delete(Request $r, $id){
        $kategori = DB::table('berita')
        ->where('id_berita', $id)
        ->delete();
        if ($kategori) {
            return redirect()->route('data.berita')->with('success', 'data berhasil dihapus');
           } else {
            return redirect()->route('tambah.berita')->with('error', 'Tidak Berhasil');
           }
    }
public function print(Request $r){
    $mulai=$r->mulai;
    $akhir=$r->akhir;
    if (isset($r->mulai)){
        $data['berita'] = DB::table('berita')
        ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
        ->whereBetween('tanggal_berita', [$mulai, $akhir])
        ->orderBy('id_berita', 'desc')
        ->get();
    }else{
        return redirect()->route('data.berita')->with('error', 'Harap Pilih Tanggal Dahulu');

    }
    return view('berita.print',$data);

}
}
