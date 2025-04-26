<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati</title>

  @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/css/tabel.css'])

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <body class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">

@include('layouts.apoteker')

<main class="lg:ml-64 md:ml-48 px-4 mb-20">
  <div class="flex justify-between items-center ">
    <h1 class="judul-halaman mb-2">Antrean Pasien</h1>
    <a href="{{ route('apoteker.dakun-tambah') }}" class="btn-tambah">
    <i class="fas fa-plus mr-2"></i> Tambah
    </a>
  </div>

  <div class="relative overflow-x-auto shadow-md rounded-lg">
    <table class="antrean-table w-full text-sm">
      <thead>
        <tr>
          <th class="px-3 py-1.5">NO</th>
          <th class="px-3 py-1.5">NAMA</th>
          <th class="px-3 py-1.5">USIA</th>
          <th class="px-3 py-1.5">NIK</th>
          <th class="px-3 py-1.5">NO. HP</th>
          <th class="px-3 py-1.5">TB</th>
          <th class="px-3 py-1.5">BB</th>
          <th class="px-3 py-1.5">TENSI</th>
          <th class="px-3 py-1.5">KELUHAN</th>
          <th class="px-3 py-1.5">RESEP</th>
          <th class="px-3 py-1.5">AKSI</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datapasien as $k)
        <tr class="border-b">
          <td class="px-3 py-1.5">{{ $loop->iteration }}</td>
          <td class="px-3 py-1.5">{{ $k->nama_pasien }}</td>
          <td class="px-3 py-1.5">{{ $k->usia }}</td>
          <td class="px-3 py-1.5">{{ $k->NIK }}</td>
          <td class="px-3 py-1.5">{{ $k->no_hp }}</td>
          <td class="px-3 py-1.5">{{ $k->tinggi_badan ?? '-' }}</td>
          <td class="px-3 py-1.5">{{ $k->berat_badan ?? '-' }}</td>
          <td class="px-3 py-1.5">{{ $k->tensi ?? '-' }}</td>
          <td class="px-3 py-1.5">{{ $k->keluhan ?? '-' }}</td>
          <td class="px-3 py-1.5">
            <a href="{{ route('apoteker.dakun-resep', $k->pasien_id) }}" class="btn-action btn-resep"><i class="fas fa-file-alt"></i>Cek Resep</a>
          </td>
          <td class="px-2 py-2">
            <a href="{{ route('apoteker.dakun-edit', $k->pasien_id) }}" class="btn-action btn-edit m-1">
            <i class="fas fa-edit"></i>Edit</a>
            <form action="{{ route('apoteker.aptDaKunDelete', $k->pasien_id) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-action btn-hapus m-1"><i class="fas fa-trash-alt"></i>Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</main>
</body>
</html>