@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('input.kategori')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tambah Kategori </label>
          <input type="text"  name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('nama_kategori')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>
@endsection




