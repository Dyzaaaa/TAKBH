<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Klinik</title>

  @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/css/tabel.css'])

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

  @include('layouts.dokter')

  <main class="lg:ml-64 md:ml-48 px-4 mb-20">
      <h1 class="judul-halaman mb-2">Data Pasien Terdaftar</h1>
</div>
<div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1 mb-5">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search" class="block p-1 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Nama/NIK Pasien">
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3">
                    NO
                </th>
                <th scope="col" class="px-6 py-3">
                    NAMA
                </th>
                <th scope="col" class="px-6 py-3">
                    NIK
                </th>
                <th scope="col" class="px-6 py-3">
                    NO. HP
                </th>
                <th scope="col" class="px-6 py-3">
                    TANGGAL LAHIR
                </th>
                <th scope="col" class="px-6 py-3">
                    USIA
                </th>
                <th scope="col" class="px-6 py-3">
                    REKAM MEDIS
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datapasien as $k)
            <tr class>
                <td class="px-3 py-2">
                    {{ $loop->iteration}}
                </td>
                <td class="px-3 py-2">
                    {{ $k->nama_pasien}}
                </td>
                <td class="px-3 py-2">
                    {{ $k->NIK}}
                </td>
                <td class="px-3 py-2">
                    {{ $k->no_hp}}
                </td><td class="px-3 py-2">
                    {{ $k->tanggal_lahir}}
                </td>
                <td class="px-3 py-2">
                    {{ $k->usia}}
                </td>
                <td class="px-3 py-2">
                <a href="{{ route('dokter.rekammedis', $k->pasien_id) }}" class="btn-rekam-medis">
                    <i class="fas fa-file-medical mr-2"></i> Rekam Medis</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>


</body>
</html>
