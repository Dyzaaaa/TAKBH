<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal; // Pastikan Anda memiliki model Jadwal

class JadwalController extends Controller
{
    // Menampilkan daftar jadwal
    public function index()
    {
        $jadwal = Jadwal::all(); // Ambil semua data jadwal
        return view('dokter.jadwal', compact('jadwal')); // Tampilkan view dengan data
    }

    // Form tambah jadwal baru
    public function create()
    {
        return view('jadwal.create');
    }

    // Menyimpan jadwal baru
    public function store(Request $request)
    {
        $request->validate([
            'dokter' => 'required|string|max:255',
            'hari' => 'required|string|max:255',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        Jadwal::create($request->all());
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    // Menampilkan detail jadwal tertentu
    public function show($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.show', compact('jadwal'));
    }

    // Form edit jadwal
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    // Mengupdate jadwal
    public function update(Request $request, $id)
    {
        $request->validate([
            'dokter' => 'required|string|max:255',
            'hari' => 'required|string|max:255',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route('dokter.jadwal')->with('success', 'Jadwal berhasil diperbarui.');
    }

    // Menghapus jadwal
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}

