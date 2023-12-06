<?php

namespace App\Http\Controllers;

use App\Models\Siswas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class SiswasController extends Controller
{
    public function siswas()
    {
        $siswas = Siswas::all();
        return view('siswa.siswas', compact('siswas'));

    }

    public function siswass()
    {
        $siswas = Siswas::all();
        return view('mahasiswa.siswass', compact('siswas'));

    }
    public function tambahsiswa(){
        return view('insert.insertSiswa');
    }

    public function insertmahasiswa(request $request){
        Siswas::create($request->all());
        return redirect()->route('siswas')->with('success','Data Berhasil Ditambahkan!');
    }
    public function siswaDelete( $id ){
        $siswas = Siswas::find($id);
        $siswas->delete();
        return redirect()->route('siswas')->with('success','Data Berhasil Dihapus!');
    }
    // public function delete( $id ){
    //     $matakuliah = Matakuliah::find($id);
    //     $matakuliah->delete();
    //     return redirect()->route('matakuliah')->with('success','Data Berhasil Dihapus!');
    // }




    public function editsiswa( $id ){
        $siswas = Siswas::find($id);
        return view('edit.editSiswa',compact('siswas'));
    }

    public function updatesiswa(request $request, $id ){
        $siswas = Siswas::find($id);
        $siswas->update($request->all());
        return redirect()->route('siswas')->with('success','Data Berhasil Diubah!');
    }

 // public function tampildata( $id ){
    //     $data = Siswas::find($id);
    //     return view('tampildata',compact('data'));
    // }


}

