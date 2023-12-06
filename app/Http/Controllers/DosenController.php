<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException;


class DosenController extends Controller
{
    public function dosen()
    {
            $dosen = Dosen::all();
            return view('siswa.Dosen', compact('dosen'));

    }

    public function dosens()
    {
            $dosen = Dosen::all();
            return view('mahasiswa.Dosens', compact('dosen'));

    }
    public function tambahdosen(){
        return view('insert.insertdosen');
    }



    // ...

    public function insertdosen(Request $request){
        try {
            $validated = $request->validate([
                'email' => 'required|unique:dosen,email'
            ]);

            Dosen::create($request->all());
            return redirect()->route('dosen')->with('success','Data Berhasil Ditambahkan!');
        } catch (QueryException $e) {
            // Menangani kesalahan database (SQLSTATE[23000])
            if ($e->errorInfo[1] == 1062) {
                // Kesalahan unik terdeteksi (Duplicate entry)
                return redirect()->route('insertDosen')->with('error','Error: Email sudah terdaftar. Silakan gunakan email lain.');
            } else {
                // Kesalahan database lainnya
                return redirect()->route('insertDosen')->with('error','Error: ' . $e->getMessage());
            }
        } catch (\Exception $e) {
            // Menangani kesalahan umum
            return redirect()->route('insertDosen')->with('error','Error: ' . $e->getMessage());
        }
    }

    public function dosenDelete( $id ){
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect()->route('dosen')->with('success','Data Berhasil Dihapus!');
    }



    public function editdosen( $id ){
        $dosen = Dosen::find($id);
        return view('edit.editdosen',compact('dosen'));
    }

    public function updatedosen(request $request, $id ){
        $dosen = Dosen::find($id);
        $dosen->update($request->all());
        return redirect()->route('dosen')->with('success','Data Berhasil Diubah!');
    }



}
