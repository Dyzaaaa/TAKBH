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
  <div class="flex justify-between items-center mb-6">
    <h1 class="judul-halaman">Tabel Pemasukan</h1>
    <a href="{{ route('apoteker.tambahpemasukan') }}" class="btn-tambah">
      + Tambah
    </a>
  </div>

    <div class="relative overflow-x-auto shadow-md rounded-lg mb-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-2">
                    NO
                </th>
                <th scope="col" class="px-4 py-2">
                    DESKRIPSI
                </th>
                <th scope="col" class="px-4 py-2">
                    BULAN
                </th>
                <th scope="col" class="px-4 py-2">
                    JUMLAH
                </th>
                <th scope="col" class="px-4 py-2">
                    TOTAL
                </th>
                <th scope="col" class="px-4 py-2">
                    AKSI
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-4 py-2">
                    Konsultasi Dokter
                </td>
                <td class="px-4 py-2">
                    Desember 2024
                </td>
                <td class="px-4 py-2">
                    20
                </td>
                <td class="px-4 py-2">
                    Rp.15.000.000
                </td>
                <td class="px-4 py-2">
                    <a href="edit" class="btn-action btn-edit mr-2">
                        <i class="fas fa-edit"></i>Edit
                    </a>
                    <a href="hapus" class="btn-action btn-hapus">
                        <i class="fas fa-trash-alt"></i>Hapus
                    </a>
                </td>
            </tr>
            </tbody>
            <tfoot>
    <tr class="font-semiboldtext-gray-900 text-lg dark:text-white">
        <th scope="row" class="px-4 py-2 text-right" colspan="3">Total</th>
        <td class="px-4 py-2">Rp. 15.000.000</td>
        <td></td>
    </tr>
</tfoot>
    </table>
</div>
</body>
</html>
