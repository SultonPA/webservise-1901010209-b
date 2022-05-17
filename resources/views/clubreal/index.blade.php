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

    <!-- @section('isi') -->
    <div class="row mt-4">
        <div class="col-10">
            <div class="card">
                <div class="card-header mb-2">
                    real madrid
                    <a class="btn btn-primary float-end" href=""><i class="fa-solid fa-square-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nama_pemain</th>
                                <th>nama_pelatih</th>
                                <th>status_pemain</th>
                                <th>asal_pemain</th>
                                <th>asal_wasit</th>
                                <th>umur_pemain</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{$row->nama_pemain}}</td>
                                <td>{{$row->nama_pelatih}}</td>
                                <td>{{$row->status_pemain}}</td>
                                <td>{{$row->asal_pemain}}</td>
                                <td> {{$row->asal_wasit}} </td>
                                <td> {{$row->umur_pemain}} </td>


                            </tr>
                        </tbody>
                    </table>

                    <!-- @endsection -->

                </div>
            </div>
        </div>
    </div>





</body>

</html>