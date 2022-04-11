<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah mahasiswa</title>
</head>

<body>
    @extends('template.master')
    @section('judul', 'tambah soal')

    @section('isi')
    <div class="row mt-4">
        <div class="col-10">
            <div class="card">
                <div class="card-header mb-2">
                    Tambah data
                    <a class="btn btn-primary float-end" href="{{url('soal')}}"><i class="fas fa-backward"></i> back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('soal.store')}}" method="POST">

                        @csrf
                        <div class="from-group">
                            <label for="">nama matkul</label>
                            <input type="text" name="nama_matkul" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="">dosen</label>
                            <input type="text" name="dosen" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="">jumlah soal</label>
                            <input type="text" name="jumlah_soal" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="">keterangan</label>
                            <input type="text" name="keterangan" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Save soal">
                        <a class="btn btn-warning float-right" href="{{url('soal')}}"><i class="fas fa-backward">batal</i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection



</body>

</html>