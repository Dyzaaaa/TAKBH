<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati - Inventaris</title>
  
  @vite(['resources/css/app.css', 'resources/css/custom.css'])

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


<body class="flex flex-col min-h-screen bg-gray-100">

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 px-4 mb-20">
    <!-- Header dengan tombol tambah -->
    <div class="flex justify-between items-center mb-4">
      <h1 class="judul-halaman">Inventaris</h1>
      <a href="{{ route('apoteker.inven-tambah') }}" class="btn-tambah">
        + Tambah
      </a>
    </div>

    <!-- Tabel Inventaris -->
    <div class="relative overflow-x-auto shadow-md rounded-lg">
      <table class="w-full text-sm text-gray-700 dark:text-gray-400">
        <thead>
          <tr>
            <th class>NO</th>
            <th class>NAMA PRODUK</th>
            <th class>JUMLAH STOK</th>
            <th class>HARGA BELI (/PCS)</th>
            <th class>HARGA JUAL (/PCS)</th>
            <th class>AKSI</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataobat as $k)
          <tr class="border-b dark:bg-gray-800 border-gray-200">
            <td class="px-6 py-3 font-medium text-gray-900 dark:text-white">{{ $loop->iteration }}</td>
            <td class>{{ $k->nama_obat }}</td>
            <td class>{{ number_format($k->jumlah_stok, 0, ',', '.') }}</td>
            <td class>Rp. {{ number_format($k->harga_beli, 0, ',', '.') }}</td>
            <td class>Rp. {{ number_format($k->harga_jual, 0, ',', '.') }}</td>
            <td class>
              <a href="{{ route('apoteker.inven-edit', $k->obat_id) }}" class="btn-action btn-edit"> <i class="fas fa-edit"></i>Edit</a>
              <form action="{{ route('apoteker.aptDaBatDelete', $k->obat_id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-action btn-hapus"> <i class="fas fa-trash"></i>Hapus</button>
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
