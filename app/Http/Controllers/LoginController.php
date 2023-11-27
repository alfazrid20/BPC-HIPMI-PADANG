<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function aksilogin(Request $request)
    {
        //cek data login
        $user = new AdminModel();
        $data_user = $user->CheckLoginAdmin($request->input('username'),
        $request->input('password'));

        if ($data_user){
            $request->session()->put('nama_lengkap', $data_user->nama_lengkap);
            $request->session()->put('username', $data_user->username);
            $request->session()->put('password', $data_user->password);
            $request->session()->put('id', $data_user->id);

            return redirect()->route('home');
        }else{
            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('login');
}
}
