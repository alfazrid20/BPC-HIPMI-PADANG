<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kategori Berita</th>
                <th scope="col">Judul Berita</th>
                <th scope="col">Tanggal Berita</th>
                <th scope="col">Isi Berita</th>
                <th scope="col">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($berita as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->nama_kategori }}</td>
                <td>{{ $item->judul_berita }}</td>
                <td>{{ $item->tanggal_berita }}</td>
                <td>{{ $item->isi}}</td>
                <td>
                    <img src="{{ asset('assets/image/'.$item->gambar) }}" alt="" width="60px">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
