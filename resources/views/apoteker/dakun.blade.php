<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati</title>
  
  @vite(['resources/css/app.css', 'resources/css/custom.css'])

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- Google Font: Inter -->

  <body class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">

@include('layouts.apoteker')

<main class="lg:ml-64 md:ml-48 px-4 mb-20">
  <!-- Header dengan tombol tambah -->
  <div class="flex justify-between items-center mb-6">
    <h1 class="judul-halaman">Antrean Pasien</h1>
    <a href="{{ route('apoteker.dakun-tambah') }}" class="btn-tambah">
      + Tambah
    </a>
  </div>

  <!-- Tabel Data Pasien -->
  <div class="relative overflow-x-auto shadow-md rounded-lg">
    <table class="w-full text-sm">
      <thead>
        <tr>
          <th class>NO</th>
          <th class>NAMA</th>
          <th class>USIA</th>
          <th class>NIK</th>
          <th class>NO. HP</th>
          <th class>RESEP</th>
          <th class>AKSI</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datapasien as $k)
        <tr class="border-b dark:border-gray-700">
          <td class>{{ $loop->iteration }}</td>
          <td class>{{ $k->nama_pasien }}</td>
          <td class>{{ $k->usia }}</td>
          <td class>{{ $k->NIK }}</td>
          <td class>{{ $k->no_hp }}</td>
          <td class>
            <a href="{{ route('apoteker.dakun-resep', $k->pasien_id) }}" class="btn-action btn-resep"><i class="fas fa-file-alt"></i>Resep</a>
          </td>
          <td class>
            <a href="{{ route('apoteker.dakun-edit', $k->pasien_id) }}" class="btn-action btn-edit">
            <i class="fas fa-edit"></i>Edit</a>
            <form action="{{ route('apoteker.aptDaKunDelete', $k->pasien_id) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-action btn-hapus"><i class="fas fa-trash-alt"></i>Hapus</button>
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
