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


    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>alamat</th>
                <th>umur</th>
                <th>tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{$row->nama}}</td>
                <td>{{$row->alamat}}</td>
                <td>{{$row->umur}}</td>
                <td>{{$row->tanggal}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

    @endsection

</body>

</html>