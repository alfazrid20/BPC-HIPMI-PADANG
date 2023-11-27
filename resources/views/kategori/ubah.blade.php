@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('edit.kategori',$kategori->id_kategori)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Judul Berita</label>
          <input type="text"  name="nama_kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$kategori->nama_kategori}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@endsection






