<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {
        $data['about'] = DB::table('about')->get();

        return view('about.index',$data);


    }
 public function tambah()
    {
        $data['about'] = DB::table('about')->first();
        return view('about.tambah', $data);
    }
    public function input(Request $r)

    {

        $validator = Validator::make($r->all(),[
            'title'=>'required',
            'subtitle'=>'required',
            'description' =>'required',
            'sejarah' =>'required'
        ],[
            'title.required' => "Isi Title ",
            'subtitle.required' => "Isi SubTitle ",
            'description.required' => "Isi Deskripsi ",
            'sejarah.required' => "Isi Deskripsi ",
        ]);
        if ($validator->fails()) {
            return redirect()->route('tambah.about')->withErrors($validator)->withInput();
        }

        $visimisi= DB::table('about')->updateOrInsert(
            [
            'id_about' => $r->id],[
                'title' => $r->title,
                'subtitle' => $r->subtitle,
                'description' => $r->description,
                'sejarah' => $r->sejarah,
            ]);

        if ($visimisi) {
         return back()->with('success', 'data berhasil ditambah');
        } else {
         return back()->with('error', 'Tidak Berhasil');
        }



    }
    public function ubah($id)
    {
        $data['about'] = DB::table('about')
        ->where('id_about', $id)
        ->first();
        return view('about.ubah', $data);
    }
    public function edit(Request $r, $id){
        $about = DB::table('about')
        ->where('id_about', $id)
        ->update([
            'title' => $r->title,
            'subtitle' => $r->subtitle,
            'description' => $r->description,
        ]);
        if ($about) {
            return redirect()->route('data.about')->with('success', 'data berhasil diubah');
           } else {
            return redirect()->route('tambah.about')->with('error', 'Tidak Berhasil');
           }
    }
    public function delete(Request $r, $id){
        $about = DB::table('about')
        ->where('id_about', $id)
        ->delete();
        if ($about) {
            return redirect()->route('data.about')->with('success', 'data berhasil dihapus');
           } else {
            return redirect()->route('tambah.about')->with('error', 'Tidak Berhasil');
           }
    }
}
