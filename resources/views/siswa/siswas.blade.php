<!-- resources/views/siswas/index.blade.php -->
@extends('siswa.master') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- resources/views/siswas/index.blade.php -->


    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Daftar Mahasiswa</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/insertSiswa">
                <p class="btn btn-success ">Tambah +</p><br></a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
            @endif


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nim</th>
                            <th>Nama Mahasiswa</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswas)
                            <tr>
                                <td>{{ $siswas->id }}</td>
                                <td>{{ $siswas->nim }}</td>
                                <td>{{ $siswas->nama_siswa }}</td>
                                <td>{{ $siswas->kelas }}</td>
                                <td>{{ $siswas->alamat }}</td>
                                <td>{{ $siswas->jurusan }}</td>
                                <td>
                                    <a href="/editSiswa/{{ $siswas->id }}" class="btn btn-warning">Ubah</a>
                                    <a href="/siswaDelete/{{ $siswas->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
