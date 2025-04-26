<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati - Inventaris</title>

  @vite(['resources/css/app.css',  'resources/css/custom.css', 'resources/css/tabel.css'])

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


<body class="flex flex-col min-h-screen bg-gray-100">

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 px-4 mb-20">
    <div class="flex justify-between items-center ">
      <h1 class="judul-halaman mb-2">Inventaris</h1>
      <a href="{{ route('apoteker.dakun-tambah') }}" class="btn-tambah">
    <i class="fas fa-plus mr-2"></i> Tambah
    </a>
    </div>

    <div class="relative overflow-x-auto shadow-md rounded-lg">
      <table class="inventaris-table w-full text-sm">
        <thead>
          <tr>
            <th>NO</th>
            <th>NAMA PRODUK</th>
            <th>JUMLAH STOK</th>
            <th>HARGA BELI (/PCS)</th>
            <th>HARGA JUAL (/PCS)</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataobat as $k)
          <tr class="border-b dark:border-gray-200">
            <td class="px-4 py-2 font-medium">{{ $loop->iteration }}</td>
            <td>{{ $k->nama_obat }}</td>
            <td>{{ number_format($k->jumlah_stok, 0, ',', '.') }}</td>
            <td>Rp. {{ number_format($k->harga_beli, 0, ',', '.') }}</td>
            <td>Rp. {{ number_format($k->harga_jual, 0, ',', '.') }}</td>
            <td>
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