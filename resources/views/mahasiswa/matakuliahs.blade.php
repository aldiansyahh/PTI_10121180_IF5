<!-- resources/views/matakuliahs/index.blade.php -->
@extends('mahasiswa.masters') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- resources/views/matakuliahs/index.blade.php -->


    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Matakuliah</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
