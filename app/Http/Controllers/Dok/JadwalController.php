<?php

namespace App\Http\Controllers\Dok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{
    public function jadwal()
    {
        return view('dokter.jadwal');
    }
}
