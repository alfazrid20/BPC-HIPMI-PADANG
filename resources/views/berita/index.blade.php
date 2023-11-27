@extends('layouts.app')

@section('content')
    {{-- <script>
    function cetak(){

        $('#myForm').attr('action','{{ route('print.berita') }} ');
        $('#myForm').attr('target', '_blank');
        $('#myForm').submit();
    }
</script> --}}

    @if (session('success') == true)
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @elseif (session('error') == true)
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
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="{{ route('tambah.berita') }}" class="btn btn-primary">Tambah Data</a>
                </h6>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Judul Berita</th>
                                        <th>Tanggal Berita</th>
                                        <th>Isi</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($berita as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nama_kategori }}</td>
                                            <td>{{ $data->judul_berita }}</td>
                                            <td>{{ $data->tanggal_berita }}</td>
                                            <td class="text-wrap">{!! $data->isi !!}</td>
                                            <td>
                                                <img src="{{ asset('/assets/image/' . $data->gambar) }}" alt=""
                                                    width="100">
                                            </td>

                                            <td>
                                                {{-- <a href="/ubah-kategori/{{$data->id_kategori}}" class="btn btn-success">Ubah</a> --}}
                                                {{-- <a href="{{route('ubah.kategori',$data->id_kategori)}}" class="btn btn-success">Ubah</a> --}}
                                                <form action="{{ route('delete.berita', $data->id_berita) }}"
                                                    method="POST">
                                                    <a href="{{ url('/ubah-berita/' . $data->id_berita) }}"
                                                        class="btn btn-success">Ubah</a>

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
    </div>
    </div>
    </div>



    </div>
@endsection
