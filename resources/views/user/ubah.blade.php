@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('edit.user',$users->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username </label>
            <input type="text"  name="username" class="form-control" value="{{$users->username}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Password </label>
              <input type="password"  name="password" class="form-control" value="{{$users->password}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Lengkap </label>
              <input type="text"  name="nama_lengkap" class="form-control" value="{{$users->nama_lengkap}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Hp </label>
              <input type="text"  name="no_hp" class="form-control" value="{{$users->no_hp}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" value="{{$users->foto}}">Foto </label>
              <input type="file"  name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@endsection






