@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('input.slider')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gambar </label>
            <input type="file"  name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title </label>
            <input type="text"   name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('title')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror

          </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>
@endsection




