@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('ubah.slider',$slider->id_slider)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
          <div class="mb-3">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" value="{{$slider->gambar}}">Foto </label>
                <input type="file"  name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <label for="exampleInputEmail1" class="form-label">Title </label>
              <input type="text"  name="title" class="form-control" value="{{$slider->title}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@endsection






