<?php

namespace App\Http\Controllers\Apt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataObat;
use App\Models\DataObatKunjungan;
use App\Models\Kasir;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KasirController extends Controller
{
    public function kasir()
    {
        $kasir = Kasir::all();
        return view('apoteker.kasir', compact('kasir'));
    }

    public function kasirCreate()
    {
        $dataobat = DataObat::all();
        return view('apoteker.kasir-tambah', compact('dataobat'));
    }

    public function kasirStore(Request $request)
    {
        $request->validate([
            'obat_id' => 'required|exists:dataobat,obat_id',
            'jumlah_obat' => 'required|integer|min:1',
        ]);

        $dataobat = DataObat::findOrFail($request->obat_id);
        $dataobatkunjungan = DataObatKunjungan::where('obatkunjungan_id', $request->obatkunjungan_id)->first();

        $jumlahObat = $request->jumlah_obat;
        $totalHarga = $dataobat->harga_jual * $jumlahObat;

        DB::table('kasir')->insert([
            'nama_obat'=>$request->nama_obat,
            'jumlah_obat'=>$jumlahObat,
            'harga_jual'=>$request->harga_jual,
            'total_harga'=> $totalHarga,
            'created_at'=> now(),
        ]);

        return redirect()->route('apoteker.kasir');
    }

    public function kasirEdit(Kasir $order_id)
    {
        $dataobat = DataObat::all();
        return view('apoteker.kasir-edit', compact('order_id', 'dataobat'));
    }

    public function kasirUpdate(Request $request, string $order_id)
    {
        $request->validate([
            'obat_id' => 'required|exists:dataobat,obat_id',
            'jumlah_obat' => 'required|integer|min:1',
        ]);

        $dataobat = DataObat::findOrFail($request->obat_id);
        $dataobatkunjungan = DataObatKunjungan::where('obatkunjungan_id', $request->obatkunjungan_id)->first();

        $jumlahObat = $request->jumlah_obat;
        $totalHarga = $dataobat->harga_jual * $jumlahObat;

        DB::table('kasir')->where('order_id', $order_id)->update([
            'nama_obat'=>$request->nama_obat,
            'jumlah_obat'=>$jumlahObat,
            'harga_jual'=>$request->harga_jual,
            'total_harga'=> $totalHarga,
            'created_at'=> now(),
        ]);

        return redirect()->route('apoteker.kasir');
    }

    public function kasirDelete(Kasir $order_id)
    {
        $order_id->delete();

        return redirect()->route('apoteker.kasir');
    }

}
