@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('input.contact')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Company </label>
          <input type="text"  name="nama_company" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('nama_company')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat </label>
            <input type="text"  name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('alamat')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="text"  name="email"  class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('email')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Hp </label>
            <input type="text"  name="no_hp"  class="form-control @error('no_hp') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('no_hp')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>
@endsection




