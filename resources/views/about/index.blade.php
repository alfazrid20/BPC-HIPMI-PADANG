@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">About</h1>

    </div>

    <div class="row">
      <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        @if (session('success') == TRUE)
        <script>
            Swal.fire({
            position: "center",
            icon: "success",
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 1500
            })
        </script>
         @elseif (session('error') == TRUE)
         <script>
             Swal.fire({
             position: "center",
             icon: "error",
             title: "{{ session('error') }}",
             showConfirmButton: false,
             timer: 1500
             })
         </script>
        @endif

        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">
                <a href="{{route('tambah.about')}}" class="btn btn-primary">Tambah Data</a>
            </h6>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th >Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($about as $data )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->subtitle}}</td>
                    <td>{{$data->sejarah}}</td>
                    <td class="text-wrap">{!!$data->description!!}</td>
                    <td>
                        {{-- <a href="/ubah-kategori/{{$data->id_kategori}}" class="btn btn-success">Ubah</a> --}}
                        {{-- <a href="{{route('ubah.kategori',$data->id_kategori)}}" class="btn btn-success">Ubah</a> --}}
                        <form action="{{route('delete.about',$data->id_about)}}" method="POST">
                        <a href="{{url('/ubah-about/'.$data->id_about)}}" class="btn btn-success">Ubah</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                 @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

