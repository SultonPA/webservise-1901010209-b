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
    @section('judul', 'edit soal')

    @section('isi')
    @if ($errors->any())
    <div class=" alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errors)
            <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row mt-4">
        <div class="col-10">
            <div class="card">
                <div class="card-header mb-2">
                    Kembali
                    <a class="btn btn-primary float-end" href="{{url('soal')}}"><i class="fas fa-backward"></i> back</a>
                </div>
                <div class="form-group">
                    <form action="{{url('save-soal')}}" method="POST">

                        @csrf
                        <div class="from-group">
                            <label for="">nama matkul</label>
                            <input type="text" name="nama_mk" class="form-control" value="{{old('nama_mk')}}">
                        </div>
                        <div class="from-group">
                            <label for="">dosen</label>
                            <input type="text" name="dosen" class="form-control" value="{{old('dosen')}}">
                        </div>
                        <div class="from-group">
                            <label for="">jumlah soal</label>
                            <input type="number" name="jumlah_soal" class="form-control" value="{{old('jumlah_soal')}}">
                        </div>
                        <div class="from-group">
                            <label for="">keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="{{old('keterangan')}}">
                        </div>
                        <input type="submit" class="btn btn-success" name="simpan" value="simpan">

                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection



</body>

</html>