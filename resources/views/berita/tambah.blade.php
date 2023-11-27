@extends('layouts.app')

@section('title')

@endsection

@section('content')


{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<div class="container">
    <form action="{{route('input.berita')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> Tambah Judul Berita </label>
          <input type="text"  name="judul_berita" class="form-control @error('judul_berita') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('judul_berita')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kategori Berita </label>
            <select class="form-control mb-3" name='id_kategori' aria-label="Default select example">

                <option selected value="">Pilih Kategori</option>
                @foreach ($kategori as $item)
                <option value="{{$item->id_kategori}}">{{$item->nama_kategori}} </option>

                @endforeach

              </select>
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Berita </label>
            <input type="date"  name="tanggal_berita" class="form-control @error('tanggal_berita') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('tanggal_berita')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Isi </label>
            <textarea type="text" id="editor" name="isi" class="form-control @error('isi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"></textarea>

            @error('isi')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gambar </label>
            <input type="file"  name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>
@endsection




