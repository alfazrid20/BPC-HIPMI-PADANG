@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('edit.about',$about->id_about)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text"  name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$about->title}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sub Title</label>
            <input type="text"  name="subtitle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$about->subtitle}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text"  name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$about->description}}">
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@endsection






