<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Klinik</title>
  
  @vite('resources/css/app.css')

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 px-4 mb-20">
     
    <!-- Statistik -->
    <section class>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card Pasien Minggu Ini -->
        <div class="p-6 bg-gradient-to-r from-green-500 to-green-400 text-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
          <h2 class="text-3xl font-bold">400</h2>
          <p class="text-lg">Pasien Minggu Ini</p>
          <div class="mt-4">
            <span class="text-sm bg-green-600 px-2 py-1 rounded-full">+5% dari minggu lalu</span>
          </div>
        </div>

        <!-- Card Obat Terlaris -->
        <div class="p-6 bg-gradient-to-r from-green-600 to-green-500 text-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
          <h2 class="text-3xl font-bold">Paracetamol</h2>
          <p class="text-lg">Obat Terlaris</p>
          <div class="mt-4">
            <span class="text-sm bg-green-700 px-2 py-1 rounded-full">120 terjual</span>
          </div>
        </div>

        <!-- Card Dokter Terpopuler -->
        <div class="p-6 bg-gradient-to-r from-green-700 to-green-600 text-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
          <h2 class="text-3xl font-bold">Dr. Cinta</h2>
          <p class="text-lg">Dokter Terpopuler</p>
          <div class="mt-4">
            <span class="text-sm bg-green-800 px-2 py-1 rounded-full">200 kunjungan</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Grafik Statistik -->
    <section class="mt-5 ">
      <div class="bg-white shadow-lg rounded-lg p-6  overflow-hidden">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-xl font-bold text-gray-900">Statistik Pasien</h2>
          <div class="relative">
            <button id="dropdownButton" class="bg-green-600 text-white px-4 py-2 rounded-lg shadow hover:bg-green-700 focus:outline-none flex items-center gap-2 transition-colors duration-300">
              <span>Statistik</span>
              <i class="fas fa-chevron-down"></i>
            </button>
            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 shadow-lg rounded-lg z-10">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pasien</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Obat</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dokter</a>
            </div>
          </div>
        </div>
        <div id="area-chart" class="w-full h-full"></div>
      </div>
    </section>

    <!-- Jadwal Dokter -->
    <section class="mt-5">
      <h2 class="text-xl font-bold text-gray-900 mb-5">Jadwal Apoteker</h2>
      <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full">
          <thead class="bg-green-500 text-white">
            <tr>
              <th class="px-6 py-4 text-left">Nama Dokter</th>
              <th class="px-6 py-4 text-left">Hari</th>
              <th class="px-6 py-4 text-left">Jam</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="hover:bg-gray-50 transition-colors duration-300">
              <td class="px-6 py-4">Dr. Cinta</td>
              <td class="px-6 py-4">Senin - Jumat</td>
              <td class="px-6 py-4">08:00 - 15:00</td>
            </tr>
            <tr class="hover:bg-gray-50 transition-colors duration-300">
              <td class="px-6 py-4">Dr. Sehat</td>
              <td class="px-6 py-4">Senin - Sabtu</td>
              <td class="px-6 py-4">10:00 - 17:00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

  </main>

  <script>
    // Dropdown Statistik
    document.getElementById("dropdownButton").addEventListener("click", function() {
      document.getElementById("dropdownMenu").classList.toggle("hidden");
    });

    // Grafik Statistik
    document.addEventListener("DOMContentLoaded", function() {
      const options = {
        chart: {
          height: "100%",
          maxWidth: "100%",
          type: "area",
          fontFamily: "Inter, sans-serif",
          toolbar: { show: false },
        },
        tooltip: {
          enabled: true,
          x: { show: false },
          marker: { show: false },
          style: {
            fontSize: '12px',
            fontFamily: 'Inter, sans-serif',
          },
        },
        fill: {
          type: "gradient",
          gradient: {
            opacityFrom: 0.55,
            opacityTo: 0,
            shade: "#10B981",
          },
          },
        dataLabels: { enabled: false },
        stroke: {
          width: 4,
          curve: "smooth",
          colors: ["#059669"], // Warna hijau untuk garis
        },
        grid: {
          show: false,
          strokeDashArray: 4,
          padding: { left: 10, right: 5, top: 0 },
        },
        series: [{
          name: "Pasien",
          data: [50, 30, 70, 50, 10, 90, 100],
          color: "#059669", // Warna hijau untuk data
        }],
        xaxis: {
          categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
          labels: {
            show: true,
            style: {
              colors: "#6B7280", // Warna abu-abu untuk label
              fontSize: "12px",
              fontFamily: "Inter, sans-serif",
            },
          },
          axisBorder: { show: false },
          axisTicks: { show: false },
        },
        yaxis: {
          show: true,
          labels: {
            show: true,
            style: {
              colors: "#6B7280", // Warna abu-abu untuk label
              fontSize: "12px",
              fontFamily: "Inter, sans-serif",
            },
          },
        },
      };

      if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("area-chart"), options);
        chart.render();
      }
    });
  </script>

</body>
</html>