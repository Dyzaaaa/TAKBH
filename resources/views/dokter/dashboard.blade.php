<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Klinik</title>
  
  @vite('resources/css/app.css')

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

  @include('layouts.dokter')

  <main class="lg:ml-64 md:ml-48 pt-10 px-4">
    
    <!-- Statistik -->
    <section>
      <h1 class="text-2xl font-bold text-gray-900 mb-4">Statistik</h1>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 bg-green-700 text-white shadow-md">
          <h2 class="text-3xl font-bold">400</h2>
          <p class="text-lg">Pasien Minggu Ini</p>
        </div>
        <div class="p-6 bg-green-500 text-white shadow-md">
          <h2 class="text-2xl font-bold">Paracetamol</h2>
          <p class="text-lg">Obat Terlaris</p>
        </div>
        <div class="p-6 bg-green-400 text-white shadow-md">
          <h2 class="text-2xl font-bold">Dr. Cinta</h2>
          <p class="text-lg">Dokter Terpopuler</p>
        </div>
      </div>

      <!-- Grafik Statistik -->
      <div class="mt-6">
        <div id="area-chart" class="w-full h-64"></div>
      </div>

      <!-- Dropdown Statistik -->
      <div class="mt-4 flex justify-end">
        <div class="relative">
          <button id="dropdownButton" class="bg-green-600 text-white px-4 py-2 shadow hover:bg-green-700 focus:outline-none">
            Statistik
          </button>
          <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 shadow-lg z-10">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pasien</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Obat</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dokter</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Jadwal Dokter -->
    <section class="mt-8">
      <h2 class="text-2xl font-bold text-gray-900 mb-4">Jadwal Dokter</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300">
          <thead class="bg-green-600 text-white">
            <tr>
              <th class="px-4 py-2">Nama Dokter</th>
              <th class="px-4 py-2">Hari</th>
              <th class="px-4 py-2">Jam</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            <tr class="border-t">
              <td class="px-4 py-2">Dr. Cinta</td>
              <td class="px-4 py-2">Senin - Jumat</td>
              <td class="px-4 py-2">08:00 - 15:00</td>
            </tr>
            <tr class="border-t">
              <td class="px-4 py-2">Dr. Sehat</td>
              <td class="px-4 py-2">Senin - Sabtu</td>
              <td class="px-4 py-2">10:00 - 17:00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-gray-500 mt-10 mb-5">
      <p>© 2025 Klinik Buah Hati. Semua Hak Dilindungi.</p>
    </footer>

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
          marker: { show: false }
        },
        fill: {
          type: "gradient",
          gradient: {
            opacityFrom: 0.55,
            opacityTo: 0,
            shade: "#1C64F2",
          },
        },
        dataLabels: { enabled: false },
        stroke: { width: 6 },
        grid: {
          show: false,
          strokeDashArray: 4,
          padding: { left: 10, right: 5, top: 0 },
        },
        series: [{
          name: "Pasien",
          data: [50, 30, 70, 50, 10, 90, 100],
          color: "#1A56DB",
        }],
        xaxis: {
          categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
          labels: { show: true },
          axisBorder: { show: false },
          axisTicks: { show: false },
        },
        yaxis: {
          show: true,
          labels: {
            show: true,
            style: { fontFamily: "Inter, sans-serif", cssClass: 'text-xs font-normal fill-gray-500' },
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
