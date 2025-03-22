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

  <main class="lg:ml-64 md:ml-48 pt-10 px-4 pb-5">
    <div class="max-w-6xl w-full bg-white rounded-lg shadow p-6 md:p-8 mb-5"> 
      <div class="flex justify-center mb-4">
        <h1 class="center text-2xl font-bold dark:text-white">Form Pembelian Obat/Barang</h1>
      </div>
<form>
      <div class="mb-6">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
        <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Obat/Barang" required />
    </div> 
    <div class="mb-6">
        <label for="hargabeli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Beli</label>
        <input type="number" id="hargabeli" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rp. 10.000" required />
    </div> 
    <div class="mb-6">
        <label for="hargajual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Jual</label>
        <input type="number" id="hargajual" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rp. 10.000" required />
    </div> 
    <div class="mb-6">
        <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
        <input type="number" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
    </div> 

<div class="flex justify-center">
            <button type="submit" class="inline-flex items-center text-white bg-[#13C296] hover:bg-gray-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </div>
</form>

</body>
</html>
