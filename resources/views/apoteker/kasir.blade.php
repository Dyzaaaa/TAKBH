<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati - Kasir</title>
  @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/css/tabel.css'])

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="flex flex-col min-h-screen bg-gray-100">
  
  @include('layouts.apoteker')

  <!-- Konten Utama -->
  <main class="lg:ml-64 md:ml-48 px-4 mb-20">
    <div class="flex justify-between items-center mb-4">
      <h1 class="judul-halaman">Riwayat Transaksi Kasir</h1>
      <a href="{{ route('apoteker.kasir-tambah') }}" class="btn-tambah btn-tambah:hover">
        + Tambah
      </a>
    </div>

    <!-- Tabel Riwayat Transaksi -->
    <div class="relative overflow-x-auto shadow-md rounded-lg">
      <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
        <thead class="text-white uppercase bg-[#13C296] dark:bg-gray-700">
          <tr>
            <th scope="col" class>NO</th>
            <th scope="col" class>NAMA PRODUK</th>
            <th scope="col" class>TANGGAL</th>
            <th scope="col" class>HARGA</th>
            <th scope="col" class>JUMLAH</th>
            <th scope="col" class>TOTAL</th>
            <th scope="col" class>AKSI</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
          @foreach ($kasir as $k)
          <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
            <td class>{{ $loop->iteration }}</td>
            <td class>{{ $k->nama_obat }}</td>
            <td class>{{ $k->created_at->format('d/m/Y') }}</td>
            <td class>Rp. {{ number_format($k->harga_jual, 0, ',', '.') }}</td>
            <td class>{{ $k->jumlah_obat }}</td>
            <td class>Rp. {{ number_format($k->total_harga, 0, ',', '.') }}</td>
            <td class>
              <a href="{{ route('apoteker.kasir-edit', $k->order_id) }}" class="btn-action btn-edit"> <i class="fas fa-edit"></i>Edit</a>
              <form action="{{ route('apoteker.kasirDelete', $k->order_id) }}" method="POST" class="inline">
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
