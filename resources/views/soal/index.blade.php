<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('template.master')

    @section('isi')
    <div class="row mt-4">
        <div class="col-10">
            <div class="card">
                <div class="card-header mb-2">
                    Data dosen
                    <a class="btn btn-primary float-end" href="{{url('soal/tambah')}}"><i class="fa-solid fa-square-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nama mk</th>
                                <th>dosen</th>
                                <th>jumlah soal</th>
                                <th>keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{$row->nama_mk}}</td>
                                <td>{{$row->dosen}}</td>
                                <td>{{$row->jumlah_soal}}</td>
                                <td>{{$row->keterangan}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @endsection

                </div>
            </div>
        </div>
    </div>





</body>

</html>