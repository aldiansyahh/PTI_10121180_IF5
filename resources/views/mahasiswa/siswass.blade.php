<!-- resources/views/siswas/index.blade.php -->
@extends('mahasiswa.masters') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- resources/views/siswas/index.blade.php -->


    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Daftar Mahasiswa</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nim</th>
                            <th>Nama Mahasiswa</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswas)
                            <tr>
                                <td>{{ $siswas->id }}</td>
                                <td>{{ $siswas->nim }}</td>
                                <td>{{ $siswas->nama_siswa }}</td>
                                <td>{{ $siswas->kelas }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
