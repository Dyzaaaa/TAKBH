<?php

namespace App\Http\Controllers\Apt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ResepController extends Controller
{
public function show($id)
{
    $resep = Resep::with('pasien', 'obat')->findOrFail($id);
    
    return view('resep.show', [
        'resep' => $resep,
        'pasien' => $resep->pasien,
        'obatList' => $resep->obat
    ]);
}
}