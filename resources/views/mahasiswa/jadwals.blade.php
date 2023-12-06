<!-- resources/views/jadwals/index.blade.php -->
@extends('mahasiswa.masters') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- resources/views/jadwals/index.blade.php -->


    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Jadwal</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID Dosen</th>
                            <th>ID Matakuliah</th>
                            <th>Hari</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $jadwal)
                            <tr>
                                <td>{{ $jadwal->id }}</td>
                                <td>{{ $jadwal->id_dosen }}</td>
                                <td>{{ $jadwal->id_matakuliah }}</td>
                                <td>{{ $jadwal->hari }}</td>
                                <td>{{ $jadwal->jam_mulai }}</td>
                                <td>{{ $jadwal->jam_selesai }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
