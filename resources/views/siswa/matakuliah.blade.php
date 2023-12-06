<!-- resources/views/matakuliahs/index.blade.php -->
@extends('siswa.master') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- resources/views/matakuliahs/index.blade.php -->


    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Matakuliah</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/insertMatakuliah">
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
                            <th>ID Matakuliah</th>
                            <th>Nama Matakuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matakuliah as $matakuliah)
                            <tr>
                                <td>{{ $matakuliah->id }}</td>
                                <td>{{ $matakuliah->id_matakuliah }}</td>
                                <td>{{ $matakuliah->nama_matakuliah }}</td>
                                <td>{{ $matakuliah->sks }}</td>
                                <td>{{ $matakuliah->semester }}</td>
                                <td>
                                    <a href="/editMatakuliah/{{ $matakuliah->id }}" class="btn btn-warning">Ubah</a>
                                    <a href="/matakuliahDelete/{{ $matakuliah->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
