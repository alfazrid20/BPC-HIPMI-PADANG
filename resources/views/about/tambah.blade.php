@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container">
    <form action="{{route('input.about')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $about?->id_about }}">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title </label>
          <input type="text"  name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('title', $about?->title) }}">

          @error('title')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Subtitle </label>
            <input type="text"  name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{!! old('subtitle', $about?->subtitle) !!}" >

            @error('subtitle')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sejarah </label>
            <textarea input type="text"  name="sejarah" id="editor" class="form-control @error('sejarah') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">{!! old('sejarah', $about?->sejarah) !!}</textarea>
            @error('sejarah')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description </label>
            <textarea input type="text"  name="description" id="editor1" class="form-control @error('description') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"  {!! old('description', $about?->description) !!}
            </textarea>
            @error('description')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>
@endsection




