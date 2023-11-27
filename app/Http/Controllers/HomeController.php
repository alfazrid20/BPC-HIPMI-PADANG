<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data['about'] = DB::table('about')->first();
        $data['strukturs'] = DB::table('struktur')->get();
        $data['slider'] = DB::table('slider')->get();
        $data['contact'] = DB::table('contact')->first();
        $data['berita'] = DB::table('berita')
        ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
        ->orderBy('id_berita', 'desc')
        ->get();


        return view('frontend.index', $data);
    }

    public function about()
    {
        $data['about'] = DB::table('about')->first();
        $data['strukturs'] = DB::table('struktur')->get();
        $data['visimisi'] = DB::table('visimisi')->first();
        $data['contact'] = DB::table('contact')->first();

        return view('frontend.about', $data);
    }

    public function sejarah()
    {
        $data['about'] = DB::table('about')->first();
        $data['strukturs'] = DB::table('struktur')->get();
        $data['visimisi'] = DB::table('visimisi')->first();
        $data['contact'] = DB::table('contact')->first();

        return view('frontend.sejarah', $data);
    }
    public function struktur()
    {
        $data['about'] = DB::table('about')->first();
        $data['strukturs'] = DB::table('struktur')->get();
        $data['contact'] = DB::table('contact')->first();

        return view('frontend.struktur', $data);
    }

    public function kontak()
    {
        $data['about'] = DB::table('about')->first();
        $data['strukturs'] = DB::table('struktur')->get();
        $data['contact'] = DB::table('contact')->first();

        return view('frontend.kontak', $data);
    }

    public function berita()
    {
        $data['about'] = DB::table('about')->first();
        $data['strukturs'] = DB::table('struktur')->get();
        $data['contact'] = DB::table('contact')->first();
        $data['berita'] = DB::table('berita')
        ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
        ->orderBy('id_berita', 'desc')
        ->get();

        return view('frontend.berita', $data);
    }

    public function singlepost($slug)
    {

        $data['about'] = DB::table('about')->first();
        $data['strukturs'] = DB::table('struktur')->get();
        $data['contact'] = DB::table('contact')->first();
        $data['berita'] = DB::table('berita')
        ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
        ->orderBy('id_berita', 'desc')
        ->where('berita.slug', $slug)
        ->first();

        // dd($data['berita']);
        return view('frontend.singlepost', $data);
    }

    public function galeri()
    {
        $data['contact'] = DB::table('contact')->first();
        $data['berita'] = DB::table('berita')
        ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
        ->orderBy('id_berita', 'desc')
        ->get();

        return view('frontend.galeri',$data);
    }



}
