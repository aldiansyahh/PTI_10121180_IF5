<!-- resources/views/dosens/index.blade.php -->
@extends('siswa.master') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- resources/views/dosens/index.blade.php -->


    <!-- Page Heading -->

    <h1 class="h3 mb-5 text-gray-800">Dosen</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/insertDosen">
                <p class="btn btn-success ">Tambah +</p><br>
            </a>
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
                            <th>ID Dosen</th>
                            <th>Nama Dosen</th>
                            <th>Jabatan</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dosen as $dosen)
                            <tr>
                                <td>{{ $dosen->id }}</td>
                                <td> {{$dosen->id_dosen}}</td>
                                <td>{{ $dosen->nama_dosen }}</td>
                                <td>{{ $dosen->jabatan }}</td>
                                <td>{{ $dosen->email }}</td>
                                <td>{{ $dosen->no_telepon }}</td>
                                <td>
                                    <a href="/editDosen/{{ $dosen->id }}" class="btn btn-warning">Ubah</a>
                                    <a href="/dosenDelete/{{ $dosen->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
