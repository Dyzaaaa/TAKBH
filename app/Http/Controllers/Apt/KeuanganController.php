<?php

namespace App\Http\Controllers\Apt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function keuangan()
    {
        return view('apoteker.keuangan');
    }
}
