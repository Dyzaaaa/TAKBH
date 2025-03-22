<?php

namespace App\Http\Controllers\Dok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPasien;
use Illuminate\Support\Facades\DB;

class DataPasienController extends Controller
{
    public function dataPasien()
    {
        $datapasien = DataPasien::all();
        return view('dokter.datapasien', compact ('datapasien'));
    }
}
