@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('ubah.struktur',$struktur->id_struktur)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama </label>
            <input type="text"  name="nama" class="form-control" value="{{$struktur->nama}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jabatan </label>
              <input type="text"  name="jabatan" class="form-control" value="{{$struktur->jabatan}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" value="{{$struktur->gambar}}">Foto </label>
              <input type="file"  name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@endsection






