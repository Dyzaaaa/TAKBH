<?php

namespace App\Http\Controllers\Apt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataObat;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
    public function inventaris()
    {
        $dataobat = DataObat::all();
        return view('apoteker.inventaris', compact('dataobat'));
    }
    public function aptDaBatCreate()
    {
        return view('apoteker.inven-tambah');
    }

    public function aptDaBatStore(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required',
            'jumlah_stok' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
        ]);

        DB::table('dataobat')->insert([
            'nama_obat'=>$request->nama_obat,
            'jumlah_stok'=>$request->jumlah_stok,
            'harga_jual'=>$request->harga_jual,
            'harga_beli'=>$request->harga_beli,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('apoteker.inventaris');
    }

    public function aptDaBatEdit(DataObat $obat_id)
    {
        return view('apoteker.inven-edit', compact('obat_id'));
    }

    public function aptDaBatUpdate(Request $request, string $obat_id)
    {
        $request->validate([
            'nama_obat' => 'required',
            'jumlah_stok' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
        ]);

        DB::table('dataobat')->where('obat_id', $obat_id)->update([
            'nama_obat'=>$request->nama_obat,
            'jumlah_stok'=>$request->jumlah_stok,
            'harga_jual'=>$request->harga_jual,
            'harga_beli'=>$request->harga_beli,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('apoteker.inventaris');
    }

    public function aptDaBatDelete(DataObat $obat_id)
    {
        $obat_id->delete();

        return redirect()->route('apoteker.inventaris');
    }
}
