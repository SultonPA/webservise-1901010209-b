<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uts crud lokasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mb-4">Data Lokasi</h1>
    <div class="container">
        <a href="/tambahlokasi" class="btn btn-success">Tambah</a>
        <a href="/home" class="btn btn-dark">Kembali</a>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">negara</th>
                        <th scope="col">provinsi</th>
                        <th scope="col">kabupaten</th>
                        <th scope="col">kecamatan</th>
                        <th scope="col">desa</th>
                        <th scope="col">dusun</th>
                        <th scope="col">nomor</th>
                        <th scope="col">dibuat</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;

                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->negara}}</td>
                        <td>{{ $row->provinsi}}</td>
                        <td>{{ $row->kabupaten}}</td>
                        <td>{{ $row->kecamatan}}</td>
                        <td>{{ $row->desa}}</td>
                        <td>{{ $row->dusun}}</td>
                        <td>{{ $row->nomor}}</td>
                        <td>{{ $row->created_at}}</td>
                        <td>
                            <a href="/tampillokasi/{{$row->id}}" class="btn btn-info">edit</a>
                            <a href="/hapuslokasi/{{$row->id}}" class="btn btn-danger">delete</a>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>