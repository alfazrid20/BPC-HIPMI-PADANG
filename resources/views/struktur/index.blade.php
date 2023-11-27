@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Struktur</h1>

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
                <a href="{{route('tambah.struktur')}}" class="btn btn-primary">Tambah Data</a>
            </h6>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Foto</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($struktur as $data )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->jabatan}}</td>
                    <td>
                        <img src="{{asset('/assets/image/'. $data->gambar)}}" alt="" width="100">
                    </td>
                    <td>
                        {{-- <a href="/ubah-kategori/{{$data->id_kategori}}" class="btn btn-success">Ubah</a> --}}
                        {{-- <a href="{{route('ubah.kategori',$data->id_kategori)}}" class="btn btn-success">Ubah</a> --}}
                        <form action="{{route('delete.struktur',$data->id_struktur)}}" method="POST">
                        <a href="{{url('/ubah-struktur/'.$data->id_struktur)}}" class="btn btn-success">Ubah</a>
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
          <div class="card-footer"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

