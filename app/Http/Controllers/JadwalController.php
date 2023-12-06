<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class JadwalController extends Controller
{
    public function jadwal()
    {
            $jadwal = Jadwal::all();
            return view('siswa.jadwal', compact('jadwal'));

    }

    public function jadwals()
    {
            $jadwal = Jadwal::all();
            return view('mahasiswa.jadwals', compact('jadwal'));


    }



    public function tambahjadwal(){
        return view('insert.insertjadwal');
    }

    public function insertjadwal(request $request){
        Jadwal::create($request->all());
        return redirect()->route('jadwal')->with('success','Data Berhasil Ditambahkan!');
    }
    public function jadwalDelete( $id ){
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect()->route('jadwal')->with('success','Data Berhasil Dihapus!');
    }


    public function editjadwal( $id ){
        $jadwal = Jadwal::find($id);
        return view('edit.editjadwal',compact('jadwal'));
    }

    public function updatejadwal(request $request, $id ){
        $jadwal = Jadwal::find($id);
        $jadwal->update($request->all());
        return redirect()->route('jadwal')->with('success','Data Berhasil Diubah!');
    }


}
