@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{ route('input.visimisi') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $visimisi?->id_vimis }}">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> Visi </label>
          <textarea name="visi" id="editor" cols="30" rows="10" class="form-control @error('visi') is-invalid @enderror" >{!! old('visi', $visimisi?->visi) !!}</textarea>

          @error('visi')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Misi </label>
            <textarea name="misi" id="editor1" cols="30" rows="10" class="form-control @error('misi') is-invalid @enderror" >{!! old('misi', $visimisi?->misi) !!}</textarea>

          @error('misi')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
          </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>
@endsection




