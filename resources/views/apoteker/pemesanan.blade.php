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
    <div class="flex justify-center mb-4">
      <h1 class="center text-2xl font-bold dark:text-white">Pemesanan Obat/Barang</h1>
    </div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NO
                </th>
                <th scope="col" class="px-6 py-3">
                    ID ORDER
                </th>
                <th scope="col" class="px-6 py-3">
                    TANGGAL
                </th>
                <th scope="col" class="px-6 py-3">
                    JAM PENGAMBILAN
                </th>
                <th scope="col" class="px-6 py-3">
                    HARGA (/PCS)
                </th>
                <th scope="col" class="px-6 py-3">
                    JUMLAH
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
                    A1234456
                </td>
                <td class="px-6 py-4">
                    12/12/24
                </td>
                <td class="px-6 py-4">
                    10.00
                </td>
                <td class="px-6 py-4">
                    Rp.15.000
                </td>
                <td class="px-6 py-4">
                    10
                </td>
                <td class="px-6 py-4">
                    Rp. 150.000
                </td>
                <td class="px-6 py-4">
                    <a href="selesai" class="mr-2 font-medium text-green-600 dark:text-blue-500 hover:underline">Selesai</a>
                    <a href="cancel" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Cancel</a>
                </td>

            </tr>
        </tbody>
    </table>
</div>



</body>
</html>
