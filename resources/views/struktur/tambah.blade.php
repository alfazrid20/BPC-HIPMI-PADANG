@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('input.struktur')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama </label>
          <input type="text"  name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('nama')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jabatan </label>
            <input type="text"  name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('jabatan')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto </label>
            <input type="file"  name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>
@endsection




