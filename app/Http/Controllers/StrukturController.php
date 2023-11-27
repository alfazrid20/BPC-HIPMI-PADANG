<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class StrukturController extends Controller
{
    public function index(Request $r)
    {
        $data['struktur'] = DB::table('struktur')->get();
        return view('struktur.index',$data);

        }

    public function tambah()
    {
        $data['struktur'] = DB::table('struktur')->get();
        return view('struktur.tambah',$data);
    }
 public function edit($id)
    {
        $data['struktur'] = DB::table('struktur')
        ->where('id_struktur',$id)
        ->first();
        return view('struktur.ubah',$data);
    }


public function input(Request $r){

        $validator = Validator::make($r->all(),[
            'nama'=>'required',
            'jabatan'=>'required',
            'gambar'=>'nullable',
        ],[
            'nama.required' => "Isi Nama ",
            'jabatan.required' => "Isi Jabatan ",
        ]);
        if ($validator->fails()) {
            return redirect()->route('tambah.struktur')->withErrors($validator)->withInput();
        }

        $filename = null;
        if($r->gambar){
            $file = $r->file('gambar');
            $filename=$file->getClientOriginalName();
            $file->move('assets/image/', $filename);
        }

        $struktur= DB::table('struktur')->insert([
            'id_struktur' => $r->id_struktur,
            'nama'=> $r->nama,
            'jabatan' =>$r->jabatan,
            'gambar' => $filename
        ]);

        if ($struktur) {
            return redirect()->route('data.struktur')->with('success', 'data berhasil ditambah');
           } else {
            return redirect()->route('tambah.struktur')->with('error', 'tidak berhasil');
           }
    }

public function ubah(Request $r, $id){

    $filename = null;

    if ($r->file('gambar') =="") {
        DB::table('struktur')->where('id_struktur', $id)->update([
                'nama'=> $r->nama,
                'jabatan' => $r->jabatan,
        ]);

        return redirect()->route('data.struktur');

    }else{

    $filename = null;
        $fotolama = DB::table('struktur')->where('id_struktur', $id)->first();
        if($fotolama->gambar !=''){
            unlink('assets/image/'. $fotolama->gambar);
        };
        $file = $r->file('gambar');
        $filename=$file->getClientOriginalName();
        $file->move('assets/image/', $filename);

    $struktur= DB::table('struktur')->where('id_struktur', $id)->update([
        'nama'=> $r->nama,
        'jabatan' => $r->jabatan,
        'gambar' => $filename
    ]);

    if ($struktur) {
        return redirect()->route('data.struktur')->with('success', 'data berhasil diubah');
       } else {
        return redirect()->route('tambah.struktur')->with('error', 'Tidak Berhasil');
       }

    }
    }
    public function delete(Request $r, $id){
        $struktur = DB::table('struktur')
        ->where('id_struktur', $id)
        ->delete();
        if ($struktur) {
            return redirect()->route('data.struktur')->with('success', 'data berhasil dihapus');
           } else {
            return redirect()->route('tambah.struktur')->with('error', 'Tidak Berhasil');
           }
    }
}
