<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati</title>
  @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/css/form.css'])
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 px-4 pb-5">
    <div class="max-w-6xl w-full bg-white rounded-lg shadow p-6 md:p-8 mb-5">
      <div class="form-header">
        <h1 class="form-title dark:text-white">Form Data Obat</h1>
      </div>
<form action="{{ route('apoteker.aptDaBatStore') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="mb-6">
        <label for="nama_obat" class="form-label dark:text-white">Nama Obat</label>
        <input type="text" id="nama_obat" class="form-input dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Obat" required name="nama_obat" value="{{ old('nama_obat') }}" />
    </div>
    <div class="mb-6">
        <label for="jumlah_stok" class="form-label dark:text-white">Jumlah Stok</label>
        <input type="number" id="jumlah_stok" class="form-input dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jumlah Stok"  name="jumlah_stok" required value="{{ old('jumlah_stok') }}" />
    </div>
    <div class="mb-6">
        <label for="harga_jual" class="form-label dark:text-white">Harga Jual</label>
        <input type="text" id="harga_jual" class="form-input dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Harga Jual" name="harga_jual" required value="{{ old('harga_jual') }}"/>
    </div>
    <div class="mb-6">
        <label for="harga_beli" class="form-label dark:text-white">Harga Beli</label>
        <input type="text" id="harga_beli" class="form-input dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="Harga Beli" name="harga_beli" required value="{{ old('harga_beli') }}" />
    </div>

            <button type="submit" class="form-submit-button dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

</body>
</html>