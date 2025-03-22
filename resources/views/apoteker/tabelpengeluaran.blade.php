<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati</title>
  @vite('resources/css/app.css') 

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 pt-10 px-4">
  <div class="max-w-6xl w-full bg-white rounded-lg shadow p-6 md:p-8 mb-5"> 
    <div class="flex justify-center mb-5">
      <h1 class="center text-2xl font-bold dark:text-white">Tabel Pengeluaran Klinik</h1>
    </div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NO
                </th>
                <th scope="col" class="px-6 py-3">
                    DESKRIPSI
                </th>
                <th scope="col" class="px-6 py-3">
                    KETERANGAN
                </th>
                <th scope="col" class="px-6 py-3">
                    TOTAL
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">
                    Gaji Staff
                </td>
                <td class="px-6 py-4">
                    Staff 1
                </td>
                <td class="px-6 py-4">
                    Rp.10.000.000
                </td>
                <td class="px-6 py-4">
                    <a href="edit" class="mr-2 font-medium text-green-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="hapus" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="font-semibold text-gray-900 dark:text-white">
                <th scope="row" class="px-6 py-3 text-base">Total</th>
                <td class="px-6 py-3">Rp. 21.000.000</td>
            </tr>
        </tfoot>
    </table>
</div>
<div class="flex justify-center">
  <a href="tambahpengeluaran" class="inline-flex items-center text-white bg-[#13C296] hover:bg-gray-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    Tambah
  </a>
</div>
</body>
</html>
