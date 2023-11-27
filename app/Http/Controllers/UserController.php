<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $data['user'] = DB::table('users')->get();

        return view('user.index',$data);


    }
 public function tambah()
    {
        return view('user.tambah');
    }

    public function input(Request $r)
    {

        $validator = Validator::make($r->all(),[
            'username'=>'required',
            'password'=>'required',
            'nama_lengkap'=>'required',
            'no_hp'=>'required',
            'foto'=>'mimes:jpeg,jpg,png,bmp,gif,tiff',
        ],[
            'username.required' => "Isi Username ",
            'password.required' => "Isi Password ",
            'nama_lengkap.required' => "Isi Nama Lengkap ",
            'no_hp.required' => "Isi No HP ",
        ]);
        if ($validator->fails()) {
            return redirect()->route('tambah.user')->withErrors($validator)->withInput();
        }

        $filename = null;
        if($r->foto){
            $file = $r->file('foto');
            $filename=$file->getClientOriginalName();
            $file->move('assets/user/', $filename);
        }
$user= DB::table('users')->insert([
    'username'=> $r->username,
    'password'=> Hash::make($r->password),
    'nama_lengkap'=> $r->nama_lengkap,
    'no_hp'=> $r->no_hp,
    'foto'=>  $filename
]);

if ($user) {
 return redirect()->route('data.user')->with('success', 'data berhasil ditambahkan');
} else {
 return redirect()->route('tambah.user')->with('error', 'data tidak berhasil ditambahkan');
}

    }
    public function ubah(Request $r, $id)
    {
        $user = DB::table('users')
        ->where('id', $id)
        ->update([
            'username' => $r->username,
            'password'=> Hash::make($r->password),
            'nama_lengkap'=> $r->nama_lengkap,
            'no_hp'=> $r->no_hp,
        ]);
        if ($user) {
            return redirect()->route('data.user')->with('success', 'data berhasil diupdate');
           } else {
            return redirect()->route('tambah.user')->with('error', 'Tidak Berhasil');
           }
    }
    public function edit($id){

        $data['users'] = DB::table('users')
        ->where('id', $id)
        ->first();
        return view('user.ubah', $data);

    }
    public function delete(Request $r, $id){
        $user = DB::table('users')
        ->where('id', $id)
        ->delete();
        if ($user) {
            return redirect()->route('data.user')->with('success', 'data berhasil dihapus');
           } else {
            return redirect()->route('tambah.user')->with('error', 'Tidak Berhasil');
           }
    }
}
