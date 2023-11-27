@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('edit.kategori',$kategori->id_kategori)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Visi</label>
          <input type="text" id="editor" name="visi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$visimisi->visi}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Misi</label>
            <input type="text" id="editor" name="misi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$visimisi->misi}}">
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@endsection






