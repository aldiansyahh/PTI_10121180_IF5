<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class MasterController extends Controller
{
    public function master()
    {
        $master = Master::all();
        return view('siswa.master', compact('master'));

    }

    public function mastersiswa()
    {
        $masters = Master::all();
        return view('mahasiswa.masters', compact('masters'));

    }


}
