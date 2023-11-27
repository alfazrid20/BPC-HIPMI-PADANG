@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('edit.berita',$berita->id_berita)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Berita </label>
                <input type="text"  name="judul_berita" class="form-control" value="{{$berita->judul_berita}}" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kategori Berita </label>
                  <select class="form-select" name='id_kategori' aria-label="Default select example">
                      <option selected>Pilih Kategori</option>
                      @foreach ($kategori as $item)
                      <option value="{{$item->id_kategori}}" @selected($item->id_kategori == $berita->id_kategori)>{{$item->nama_kategori}} </option>

                      @endforeach

                    </select>
                </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Tanggal Berita </label>
                  <input type="date"  name="tanggal_berita" class="form-control" id="exampleInputEmail1" value="{{$berita->tanggal_berita}}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Isi </label>
                  <textarea type="text" id="editor"  name="isi" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">{{$berita->isi}}</textarea>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Gambar </label>
                  <img src="{{ asset('assets/image/', $berita->gambar) }}" alt="">
                  <input type="hidden" name="foto_lama" value="{{ $berita->gambar }}">
                  <input type="file"  name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
      </div>
@endsection






