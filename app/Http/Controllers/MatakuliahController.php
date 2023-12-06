<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class MatakuliahController extends Controller
{
    public function matakuliah()
    {

        $matakuliah = Matakuliah::all();
            return view('siswa.matakuliah', compact('matakuliah'));

    }

    public function matakuliahs()
    {

        $matakuliah = Matakuliah::all();
            return view('mahasiswa.matakuliahs', compact('matakuliah'));

    }



    public function tambahmatakuliah(){
        return view('insert.insertmatakuliah');
    }

    public function insertmatakuliah(request $request){
        Matakuliah::create($request->all());
        return redirect()->route('matakuliah')->with('success','Data Berhasil Ditambahkan!');
    }
    public function matakuliahDelete( $id ){
        $matakuliah = Matakuliah::find($id);
        $matakuliah->delete();
        return redirect()->route('matakuliah')->with('success','Data Berhasil Dihapus!');
    }



    public function editmatakuliah( $id ){
        $matakuliah = Matakuliah::find($id);
        return view('edit.editmatakuliah',compact('matakuliah'));
    }

    public function updatematakuliah(request $request, $id ){
        $matakuliah = Matakuliah::find($id);
        $matakuliah->update($request->all());
        return redirect()->route('matakuliah')->with('success','Data Berhasil Diubah!');
    }


}
