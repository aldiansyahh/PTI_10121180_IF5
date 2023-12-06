<!-- resources/views/dosens/index.blade.php -->
@extends('mahasiswa.masters') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- resources/views/dosens/index.blade.php -->


    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Dosen</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
