<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati - Keuangan</title>
  @vite(['resources/css/app.css', 'resources/css/custom.css'])

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body class="bg-gray-100">

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 px-4 mb-20">
    <!-- Judul Halaman -->
    <div class="flex justify-center mb-5">
      <h1 class="text-2xl font-bold text-gray-900">Rekap Keuangan Klinik</h1>
    </div>

    <!-- Card Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
      <!-- Card Laba -->
      <div class="p-6 bg-gradient-to-r from-green-500 to-green-400 text-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
        <h2 class="text-3xl font-bold">Rp. 8.000.000</h2>
        <p class="text-lg">Laba Bulan Ini</p>
        <div class="mt-4">
          <span class="text-sm bg-green-600 px-2 py-1 rounded-full">+5% dari bulan lalu</span>
        </div>
      </div>

      <!-- Card Pemasukan -->
      <div class="p-6 bg-gradient-to-r from-green-600 to-green-500 text-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
        <h2 class="text-3xl font-bold">Rp. 21.000.000</h2>
        <p class="text-lg">Pemasukan Bulan Ini</p>
        <div class="mt-4">
          <span class="text-sm bg-green-700 px-2 py-1 rounded-full">+10% dari bulan lalu</span>
        </div>
      </div>

      <!-- Card Pengeluaran -->
      <div class="p-6 bg-gradient-to-r from-green-700 to-green-600 text-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
        <h2 class="text-3xl font-bold">Rp. 13.000.000</h2>
        <p class="text-lg">Pengeluaran Bulan Ini</p>
        <div class="mt-4">
          <span class="text-sm bg-green-800 px-2 py-1 rounded-full">-5% dari bulan lalu</span>
        </div>
      </div>
    </div>

    <!-- Grafik Keuangan -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-6 overflow-hidden">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold text-gray-900">Chart Keuangan</h2>
        <div class="relative">
          <button id="dropdownButton" class="bg-green-600 text-white px-4 py-2 rounded-lg shadow hover:bg-green-700 focus:outline-none flex items-center gap-2 transition-colors duration-300">
            <span>Last 6 months</span>
            <i class="fas fa-chevron-down"></i>
          </button>
          <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 shadow-lg rounded-lg z-10">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Yesterday</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Today</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Last 7 days</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Last 30 days</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Last 90 days</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Last 6 months</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Last year</a>
          </div>
        </div>
      </div>
      <!-- Perbesar container grafik -->
      <div id="bar-chart" class="w-full h-96"></div> <!-- Ubah h-64 menjadi h-96 -->
    </div>

    <!-- Tabel Pemasukan -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6">
      <table class="w-full text-sm text-left text-gray-500">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-gray-50">
          <a href="tabelpemasukan" class="text-gray-600 hover:underline">Tabel Pemasukan</a>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3">NO</th>
            <th scope="col" class="px-6 py-3">DESKRIPSI</th>
            <th scope="col" class="px-6 py-3">BULAN</th>
            <th scope="col" class="px-6 py-3">JUMLAH</th>
            <th scope="col" class="px-6 py-3">TOTAL</th>
            <th scope="col" class="px-6 py-3">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b hover:bg-gray-50 transition-colors duration-300">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">Konsultasi Dokter</td>
            <td class="px-6 py-4">Desember 2024</td>
            <td class="px-6 py-4">20</td>
            <td class="px-6 py-4">Rp.15.000.000</td>
            <td class="px-6 py-4">
              <a href="edit" class="btn-action btn-edit"><i class="fas fa-edit"></i>Edit</a>
              <a href="hapus" class="btn-action btn-hapus"><i class="fas fa-trash"></i>Hapus</a>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="font-semibold text-gray-900">
            <th scope="row" class="px-6 py-3 text-base">Total</th>
            <td class="px-6 py-3">Rp. 21.000.000</td>
          </tr>
        </tfoot>
      </table>
    </div>

    <!-- Tabel Pengeluaran -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
      <table class="w-full text-sm text-left text-gray-500">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-gray-50">
          <a href="tabelpengeluaran" class="text-gray-600 hover:underline">Tabel Pengeluaran</a>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3">NO</th>
            <th scope="col" class="px-6 py-3">DESKRIPSI</th>
            <th scope="col" class="px-6 py-3">KETERANGAN</th>
            <th scope="col" class="px-6 py-3">TOTAL</th>
            <th scope="col" class="px-6 py-3">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b hover:bg-gray-50 transition-colors duration-300">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">Gaji Staff</td>
            <td class="px-6 py-4">Staff 1</td>
            <td class="px-6 py-4">Rp.10.000.000</td>
            <td class="px-6 py-4">
              <a href="edit" class="btn-edit btn-edit:hover"><i class="fas fa-edit"></i>Edit</a>
              <a href="hapus" class="btn-hapus btn-hapus:hover"><i class="fas fa-trash"></i>Hapus</a>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="font-semibold text-gray-900">
            <th scope="row" class="px-6 py-3 text-base">Total</th>
            <td class="px-6 py-3">Rp. 13.000.000</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </main>

  <script>
    // Dropdown Statistik
    document.getElementById("dropdownButton").addEventListener("click", function() {
      document.getElementById("dropdownMenu").classList.toggle("hidden");
    });

    // Grafik Keuangan
    document.addEventListener("DOMContentLoaded", function() {
      const options = {
        series: [
          {
            name: "Pemasukan",
            color: "#10B981", // Warna hijau untuk pemasukan
            data: ["1420", "1620", "1820", "1420", "1650", "2120"],
          },
          {
            name: "Pengeluaran",
            data: ["788", "810", "866", "788", "1100", "1200"],
            color: "#F05252", // Warna merah untuk pengeluaran
          }
        ],
        chart: {
          type: "bar",
          height: "100%",
          width: "100%",
          toolbar: { show: false },
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: "50%",
            borderRadius: 6,
          },
        },
        dataLabels: { enabled: false },
        stroke: { width: 2 },
        grid: { show: false },
        xaxis: {
          categories: ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          labels: {
            style: {
              colors: "#6B7280",
              fontSize: "12px",
              fontFamily: "Inter, sans-serif",
            },
          },
        },
        yaxis: {
          labels: {
            style: {
              colors: "#6B7280",
              fontSize: "12px",
              fontFamily: "Inter, sans-serif",
            },
          },
        },
        tooltip: {
          enabled: true,
          style: {
            fontSize: "12px",
            fontFamily: "Inter, sans-serif",
          },
        },
      };

      if (document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("bar-chart"), options);
        chart.render();
      }
    });
  </script>

</body>
</html>