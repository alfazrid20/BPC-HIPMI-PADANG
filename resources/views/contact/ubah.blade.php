@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('edit.contact',$contact->id_contact)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Company</label>
          <input type="text"  name="nama_company" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$contact->nama_company}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text"  name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$contact->alamat}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$contact->email}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Hp</label>
            <input type="text"  name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$contact->no_hp}}">
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@endsection






