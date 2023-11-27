@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('input.user')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username </label>
          <input type="text"  name="username" class="form-control @error('username') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('username')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password </label>
            <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('password')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Lengkap </label>
            <input type="text"  name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('nama_lengkap')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Hp </label>
            <input type="text"  name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('no_hp')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto </label>
            <input type="file"  name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>
@endsection




