<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati - Keuangan</title>
  @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/css/tabel.css'])

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body class="bg-gray-100">

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 px-4 pb-10">
    <div class="rekap-keuangan-title">
      <h1>Rekap Keuangan Klinik</h1>
    </div>

    <div class="statistik-card-grid">
      <div class="statistik-card statistik-card-1">
        <h2 class="statistik-angka">Rp. 8.000.000</h2>
        <p class="statistik-deskripsi">Laba Bulan Ini</p>
        <div class="statistik-indikator">
          <span class="statistik-indikator-text statistik-indikator-positif">+5% dari bulan lalu</span>
        </div>
      </div>

      <div class="statistik-card statistik-card-2">
        <h2 class="statistik-angka">Rp. 21.000.000</h2>
        <p class="statistik-deskripsi">Pemasukan Bulan Ini</p>
        <div class="statistik-indikator">
          <span class="statistik-indikator-text statistik-indikator-positif">+10% dari bulan lalu</span>
        </div>
      </div>

      <div class="statistik-card statistik-card-3">
        <h2 class="statistik-angka">Rp. 13.000.000</h2>
        <p class="statistik-deskripsi">Pengeluaran Bulan Ini</p>
        <div class="statistik-indikator">
          <span class="statistik-indikator-text statistik-indikator-negatif">-5% dari bulan lalu</span>
        </div>
      </div>
    </div>

    <div class="grafik-container">
      <div class="grafik-header">
        <h2 class="grafik-title">Chart Keuangan</h2>
        <div class="relative">
          <button id="dropdownButton" class="dropdown-button">
            <span>Last 6 months</span>
            <i class="fas fa-chevron-down"></i>
          </button>
          <div id="dropdownMenu" class="dropdown-menu hidden">
            <a href="#" class="dropdown-link">Yesterday</a>
            <a href="#" class="dropdown-link">Today</a>
            <a href="#" class="dropdown-link">Last 7 days</a>
            <a href="#" class="dropdown-link">Last 30 days</a>
            <a href="#" class="dropdown-link">Last 90 days</a>
            <a href="#" class="dropdown-link">Last 6 months</a>
            <a href="#" class="dropdown-link">Last year</a>
          </div>
        </div>
      </div>
      <div id="bar-chart" class="w-full h-96"></div> </div>

    <div class="tabel-keuangan-container">
      <table class="tabel-keuangan">
        <caption class="tabel-keuangan-caption">
          <a href="tabelpemasukan" class="text-gray-600 hover:underline">Tabel Pemasukan</a>
        </caption>
        <thead>
          <tr>
            <th scope="col" class="px-6 py-3">NO</th>
            <th scope="col" class="px-6 py-3">DESKRIPSI</th>
            <th scope="col" class="px-6 py-3">BULAN</th>
            <th scope="col" class="px-6 py-3">JUMLAH</th>
            <th scope="col" class="px-6 py-3">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b hover:bg-gray-50 transition-colors duration-300">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">Konsultasi Dokter</td>
            <td class="px-6 py-4">Desember 2024</td>
            <td class="px-6 py-4">20</td>
            <td class="px-6 py-4">Rp.15.000.000</td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="font-semibold text-lg text-gray-900">
            <th scope="row" class="px-6 py-3 text-lg">Total</th>
            <td class="px-6 py-3">Rp. 21.000.000</td>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="tabel-keuangan-container">
      <table class="tabel-keuangan">
        <caption class="tabel-keuangan-caption">
          <a href="tabelpengeluaran" class="text-gray-600 hover:underline">Tabel Pengeluaran</a>
        </caption>
        <thead>
          <tr>
            <th scope="col" class="px-6 py-3">NO</th>
            <th scope="col" class="px-6 py-3">DESKRIPSI</th>
            <th scope="col" class="px-6 py-3">KETERANGAN</th>
            <th scope="col" class="px-6 py-3">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b hover:bg-gray-50 transition-colors duration-300">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">Gaji Staff</td>
            <td class="px-6 py-4">Staff 1</td>
            <td class="px-6 py-4">Rp.10.000.000</td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="font-semibold text-lg text-gray-900">
            <th scope="row" class="px-6 py-3 text-lg">Total</th>
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