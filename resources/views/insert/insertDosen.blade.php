<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>
<body>

                @extends('siswa.master') <!-- Jika Anda menggunakan layout -->

@section('content')

<div class="form-group mb-3">
    <h1 class="h3 text-black-1000">Tambah Dosen</h1>
</div>
                <div class="card-body">
                    @if(session('error'))
                    <div class="alert alert-danger">
                        <b>Opps!</b> {{session('error')}}
                    </div>
                    @endif

                    <form action="/insertdosen" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="namaDosen" class="form-label">ID Dosen</label>
                            <input type="text" name="id_dosen" class="form-control" id="idDosen" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="namaDosen" class="form-label">Nama Dosen</label>
                            <input type="text" name="nama_dosen" class="form-control" id="namaDosen" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" id="jabatan" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="noTelepon" class="form-label">No Telepon</label>
                            <input type="text" name="no_telepon" class="form-control" id="noTelepon" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="dosen" type="submit" class="btn btn-primary">Cancel</a>
                    </form>
                </div>
                @endsection
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
