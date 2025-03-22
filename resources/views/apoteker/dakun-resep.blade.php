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
        <h1 class="center text-2xl font-bold dark:text-white">Resep Obat Pasien</h1>
      </div>

      <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-5">
          <h2 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">{{ $datapasien->nama_pasien}}</h2>
          <h3 class="mb-2 text-l text-gray-900 dark:text-white">{{ $datapasien->usia}}</h3>
          <h3 class="mb-2 text-l text-gray-900 dark:text-white">{{ $datapasien->NIK}}</h3>
          <h3 class="mb-2 text-l text-gray-900 dark:text-white">{{ $datapasien->no_hp}}</h3>
        </div>
        <div  iv class="py-8 px-4 mx-auto max-w-2xl lg:py-5">
          <h3 class="mb-2 text-l font-bold text-gray-900 dark:text-white">Diagnosis: Migrain</h3>
          <h3 class="mb-2 text-l font-bold text-gray-900 dark:text-white">Resep Obat:</h3>
        <div class="flex items-center mb-4">
            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Paracetamol</label>
    </div>
        <div class="flex items-center">
          <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Panadol</label>
        </div>
    <div>
      <div class="flex justify-center">
        <button type="submit" class="inline-flex items-center text-white bg-[#13C296] hover:bg-gray-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
      </div>
      </div>
      </section>
    </div>
  </main>

</body>
</html>
