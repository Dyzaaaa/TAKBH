<?php

namespace App\Http\Controllers\Apt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPasien;
use Illuminate\Support\Facades\DB;

class DataKunjunganController extends Controller
{
    public function aptDataKunjungan()
    {
        $datapasien = DataPasien::all();
        return view('apoteker.dakun', compact('datapasien'));
    }

    public function aptDaKunCreate()
    {
        return view('apoteker.dakun-tambah');
    }

    public function aptDaKunStore(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'no_hp' => 'required',
            'NIK' => 'required',
        ]);

        DB::table('datapasien')->insert([
            'nama_pasien'=>$request->nama_pasien,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'usia'=>$request->usia,
            'no_hp'=>$request->no_hp,
            'NIK'=>$request->NIK,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('apoteker.data');
    }

    public function aptDaKunEdit(DataPasien $pasien_id)
    {
        return view('apoteker.dakun-edit', compact('pasien_id'));
    }

    public function aptDaKunUpdate(Request $request, string $pasien_id)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'no_hp' => 'required',
            'NIK' => 'required',
        ]);
        DB::table('datapasien')->where('pasien_id', $pasien_id)->update([
            'nama_pasien'=>$request->nama_pasien,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'usia'=>$request->usia,
            'no_hp'=>$request->no_hp,
            'NIK'=>$request->NIK,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('apoteker.data');
    }

    public function aptDaKunDelete(DataPasien $pasien_id)
    {
        $pasien_id->delete();

        return redirect()->route('apoteker.data');
    }

    public function dokDataKunjungan()
    {
        $datapasien = DataPasien::all();
        return view('dokter.datakunjungan', compact('datapasien'));
    }

    public function resepDokter($pasien_id)
    {
        $datapasien = DataPasien::where('pasien_id', $pasien_id)->first();
        return view('dokter.dakun-resep', compact('datapasien'));
    }

    public function resepKunjungan($pasien_id)
    {
        $datapasien = DataPasien::where('pasien_id', $pasien_id)->first();
        return view('apoteker.dakun-resep', compact('datapasien'));
    }
}
