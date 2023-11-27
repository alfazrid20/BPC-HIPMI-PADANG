<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function index(Request $r)
    {
        $data['slider'] = DB::table('slider')->get();
        return view('slider.index',$data);

        }

    public function tambah()
    {
        $data['slider'] = DB::table('slider')->get();
        return view('slider.tambah',$data);
    }
 public function edit($id)
    {
        $data['slider'] = DB::table('slider')
        ->where('id_slider',$id)
        ->first();
        return view('slider.ubah',$data);
    }


public function input(Request $r){

        $validator = Validator::make($r->all(),[
            'gambar'=>'required',
            'title'=>'required',
        ],[
            'gambar.required' => "Masukan Gambar",
            'title.required' => "Isi Title ",
        ]);
        if ($validator->fails()) {
            return redirect()->route('tambah.slider')->withErrors($validator)->withInput();
        }

        $filename = null;
        if($r->gambar){
            $file = $r->file('gambar');
            $filename=$file->getClientOriginalName();
            $file->move('assets/image/', $filename);
        }

        $slider= DB::table('slider')->insert([
            'id_slider' => $r->id_slider,
            'gambar' => $filename,
            'title' =>$r->title,

        ]);

        if ($slider) {
            return redirect()->route('data.slider')->with('success', 'data berhasil ditambah');
           } else {
            return redirect()->route('tambah.slider')->with('error', 'tidak berhasil');
           }
    }

public function ubah(Request $r, $id){

    $filename = null;

    if ($r->file('gambar') =="") {
        DB::table('slider')->where('id_slider', $id)->update([
                'title'=> $r->title,
        ]);

        return redirect()->route('data.slider');

    }else{

    $filename = null;
        $fotolama = DB::table('slider')->where('id_slider', $id)->first();
        if($fotolama->gambar !=''){
            unlink('assets/image/'. $fotolama->gambar);
        };
        $file = $r->file('gambar');
        $filename=$file->getClientOriginalName();
        $file->move('assets/image/', $filename);

    $slider= DB::table('slider')->where('id_slider', $id)->update([
        'gambar' => $filename,
        'title' => $r->title,

    ]);

    if ($slider) {
        return redirect()->route('data.slider')->with('success', 'data berhasil diubah');
       } else {
        return redirect()->route('tambah.slider')->with('error', 'Tidak Berhasil');
       }

    }
    }
    public function delete(Request $r, $id){
        $slider = DB::table('slider')
        ->where('id_slider', $id)
        ->delete();
        if ($slider) {
            return redirect()->route('data.slider')->with('success', 'data berhasil dihapus');
           } else {
            return redirect()->route('tambah.slider')->with('error', 'Tidak Berhasil');
           }
    }
}
