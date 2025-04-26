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

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 px-4 mb-20">

    <section>
      <h1 class="judul-halaman mb-2">Statistik</h1>
      <div class="statistik-card-grid">
      <div class="statistik-card statistik-card-1">
          <h2 class="statistik-angka">400</h2>
          <p class="statistik-deskripsi">Pasien Minggu Ini</p>
          <div class="statistik-indikator">
            <span class="statistik-indikator-text statistik-indikator-positif">+5% dari minggu lalu</span>
          </div>
        </div>

      <div class="statistik-card statistik-card-2">
          <h2 class="statistik-angka">Paracetamol</h2>
          <p class="statistik-deskripsi">Obat Terlaris</p>
          <div class="statistik-indikator">
            <span class="statistik-indikator-text statistik-indikator-positif">120 terjual</span>
          </div>
        </div>

      <div class="statistik-card statistik-card-3">
          <h2 class="statistik-angka">Dr. Cinta</h2>
          <p class="statistik-deskripsi">Dokter Terpopuler</p>
          <div class="statistik-indikator">
            <span class="statistik-indikator-text statistik-indikator-positif">200 kunjungan</span>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-5">
      <div class="grafik-container">
        <div class="grafik-header">
          <h2 class="grafik-title">Statistik Pasien</h2>
          <div class="relative">
            <button id="dropdownButton" class="dropdown-button">
              <span>Statistik</span>
              <i class="fas fa-chevron-down"></i>
            </button>
            <div id="dropdownMenu" class="hidden dropdown-menu">
              <a href="#" class="dropdown-link">Pasien</a>
              <a href="#" class="dropdown-link">Obat</a>
              <a href="#" class="dropdown-link">Dokter</a>
            </div>
          </div>
        </div>
        <div id="area-chart" class="w-full h-full"></div>
      </div>
    </section>

    <section class="mt-8">
      <h2 class="judul-halaman mb-2">Jadwal Apoteker</h2>
      <div class="jadwal-container">
        <table class="jadwal-table">
          <thead class="jadwal-thead">
            <tr>
              <th class="jadwal-th">Nama Dokter</th>
              <th class="jadwal-th">Hari</th>
              <th class="jadwal-th">Jam</th>
            </tr>
          </thead>
          <tbody class="jadwal-tbody">
            <tr class="jadwal-tr">
              <td class="jadwal-td">Dr. Cinta</td>
              <td class="jadwal-td">Senin - Jumat</td>
              <td class="jadwal-td">08:00 - 15:00</td>
            </tr>
            <tr class="jadwal-tr">
              <td class="jadwal-td">Dr. Sehat</td>
              <td class="jadwal-td">Senin - Sabtu</td>
              <td class="jadwal-td">10:00 - 17:00</td>
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