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
  <div class>
      <h1 class="judul-halaman mb-2">{{ $datapasien->nama_pasien }}</h1>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead>
          <tr>
            <th scope="col" >
              NO
            </th>
            <th scope="col" >
              TANGGAL
            </th>
            <th scope="col" >
              TINGGI (cm)
            </th>
            <th scope="col" >
              BERAT (kg)
            </th>
            <th scope="col" >
              TEKANAN DARAH
            </th>
            <th scope="col" >
              KELUHAN
            </th>
            <th scope="col" >
              DIAGNOSA
            </th>
            <th scope="col" >
              OBAT
            </th>
            <th scope="col" >
              DOSIS
            </th>
            <th scope="col" >
              ATURAN PAKAI
            </th>
            <th scope="col" >
              DOKTER
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class>
            <td class>
              1
            </td>
            <td class>
              11 April 2025
            </td>
            <td class>
              170
            </td>
            <td class>
              65
            </td>
            <td class>
              120/80
            </td>
            <td class>
              Sakit kepala berdenyut
            </td>
            <td class>
              Migrain
            </td>
            <td class>
              Paracetamol
            </td>
            <td class>
              500mg
            </td>
            <td class>
              3x sehari setelah makan
            </td>
            <td class>
              Dr. Cinta
            </td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class>
              2
            </td>
            <td class>
              05 April 2025
            </td>
            <td class>
              165
            </td>
            <td class>
              58
            </td>
            <td class>
              110/70
            </td>
            <td class>
              Pilek, batuk, demam
            </td>
            <td class>
              Influenza
            </td>
            <td class>
              Bodrex
            </td>
            <td class>
              1 tablet
            </td>
            <td class>
              3x sehari
            </td>
            <td class>
              Dr. Budi
            </td>
          </tr>
          </tbody>
      </table>
    </div>
  </main>

</body>
</html>