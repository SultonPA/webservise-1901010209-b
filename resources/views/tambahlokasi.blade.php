<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uts crud lokasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mb-4">Tambah Data Lokasi</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertlokasi" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">negara</label>
                                <input type="text" name="negara" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('negara')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">provinsi</label>
                                <input type="text" name="provinsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('provinsi')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">kabupaten</label>
                                <input type="text" name="kabupaten" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('kabupaten')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('kecamatan')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">desa</label>
                                <input type="text" name="desa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('desa')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">dusun</label>
                                <input type="text" name="dusun" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('dusun')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">kode pos</label>
                                <input type="number" name="kodepos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('kodepos')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>