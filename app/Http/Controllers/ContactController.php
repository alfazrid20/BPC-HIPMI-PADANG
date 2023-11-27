<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index(Request $r)
    {
        $data['contact'] = DB::table('contact')->get();
        return view('contact.index',$data);

        }

    public function tambah()
    {
        $data['contact'] = DB::table('contact')->get();
        return view('contact.tambah',$data);
    }

public function input(Request $r){

        $validator = Validator::make($r->all(),[
            'nama_company'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
        ],[
            'nama_company.required' => "Isi Nama Company",
            'alamat.required' => "Isi Alamat ",
            'email.required' => "Isi Email ",
            'no_hp.required' => "Isi No Hp ",
        ]);
        if ($validator->fails()) {
            return redirect()->route('tambah.contact')->withErrors($validator)->withInput();
        }

        // $filename = null;
        // if($r->gambar){
        //     $file = $r->file('gambar');
        //     $filename=$file->getClientOriginalName();
        //     $file->move('assets/image/', $filename);
        // }

        $contact= DB::table('contact')->insert([
            'id_contact' => $r->id_contact,
            'nama_company'=> $r->nama_company,
            'alamat' => $r->alamat,
            'email' => $r->email,
            'no_hp' => $r->no_hp,
        ]);

        if ($contact) {
            return redirect()->route('data.contact')->with('success', 'data berhasil ditambah');
           } else {
            return redirect()->route('tambah.contact')->with('error', 'tidak berhasil');
           }
    }

public function ubah($id) {
    $data['contact'] = DB::table('contact')
    ->where('id_contact', $id)
    ->first();
    return view('contact.ubah', $data);
}

public function edit(Request $r, $id){
    $contact = DB::table('contact')
    ->where('id_contact', $id)
    ->update([
        'nama_company' => $r->nama_company,
        'alamat' => $r->alamat,
        'email' => $r->email,
        'no_hp' => $r->no_hp,
    ]);
    if ($contact) {
        return redirect()->route('data.contact')->with('success', 'data berhasil diubah');
       } else {
        return redirect()->route('tambah.contact')->with('error', 'Tidak Berhasil');
       }
    }
    public function delete(Request $r, $id){
        $contact = DB::table('contact')
        ->where('id_contact', $id)
        ->delete();
        if ($contact) {
            return redirect()->route('data.contact')->with('success', 'data berhasil dihapus');
           } else {
            return redirect()->route('tambah.contact')->with('error', 'Tidak Berhasil');
           }
    }
}
