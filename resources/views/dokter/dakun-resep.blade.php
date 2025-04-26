<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati - Resep Dokter</title>

  @vite(['resources/css/app.css', 'resources/css/resep.css', 'resources/css/custom.css'])
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

  @include('layouts.dokter')

  <main class="lg:ml-64 md:ml-48 px-4 pb-5">
    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden p-6 md:p-8 mb-5">
      <div class="prescription-header">
        <img src="/images/clinic-logo.png" alt="Klinik Buah Hati" class="clinic-logo">
        <h1 class="prescription-title">Resep Obat Pasien</h1>
        <p class="prescription-number">No. Resep: {{ date('Ymd') }}-{{ $datapasien->id }}</p>
      </div>

      <div class="patient-info-card">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
          <div>
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Informasi Pasien</h2>
            <div class="space-y-2">
              <p class="text-gray-700"><span class="font-medium patient-info-label">Nama:</span> {{ $datapasien->nama_pasien }}</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">Usia:</span> {{ $datapasien->usia }} tahun</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">NIK:</span> {{ $datapasien->NIK }}</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">No. HP:</span> {{ $datapasien->no_hp }}</p>
            </div>
          </div>
          <div>
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Informasi Medis</h2>
            <div class="space-y-2">
              <p class="text-gray-700"><span class="font-medium patient-info-label">Tinggi Badan:</span> {{ $datapasien->tinggi_badan ?? '-' }} cm</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">Berat Badan:</span> {{ $datapasien->berat_badan ?? '-' }} kg</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">Tekanan Darah:</span> {{ $datapasien->tensi ?? '-' }}</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">Keluhan:</span> {{ $datapasien->keluhan ?? '-' }}</p>
            </div>
          </div>
        </div>
      </div>

      <form action="#" method="POST">
        @csrf
        <div class="mb-6">
          <label for="diagnosis" class="text-xl block text-gray-700 font-bold mb-2 dark:text-gray-300">Diagnosis</label>
          <textarea id="diagnosis" name="diagnosis" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-800 dark:border-gray-600 dark:text-white text-sm" placeholder="Masukkan diagnosis pasien"></textarea>
        </div>

        <div class="mb-6">
          <label for="dokter_bertugas" class="text-xl block text-gray-700 font-bold mb-2 dark:text-gray-300">Dokter Bertugas</label>
          <select id="dokter_bertugas" name="dokter_bertugas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-800 dark:border-gray-600 dark:text-white text-sm">
            <option value="">Pilih Dokter</option>
              <option value="">Dr. Cinta</option>
          </select>
        </div>

        <div class="mb-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Resep Obat</h3>
          <div id="obatContainer" class="space-y-3">
            <div class="medication-input-group">
              <input type="text" name="obat[]" class="shadow appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-800 dark:border-gray-600 dark:text-white text-sm" placeholder="Nama Obat">
              <input type="text" name="dosis[]" class="shadow appearance-none border rounded w-1/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-800 dark:border-gray-600 dark:text-white text-sm" placeholder="Dosis">
              <input type="text" name="aturan_pakai[]" class="shadow appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-800 dark:border-gray-600 dark:text-white text-sm" placeholder="Aturan Pakai">
            </div>
          </div>
          <button type="button" id="tambahObat" class="mt-4 px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
            <i class="fas fa-plus"></i> Tambah Obat
          </button>
        </div>

        <div class="mb-6">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Instruksi Tambahan</h3>
          <textarea name="instruksi_tambahan" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#13C296] dark:bg-gray-800 dark:border-gray-600 dark:text-white text-sm" rows="3" placeholder="Tambahkan instruksi khusus..."></textarea>
        </div>

        <div class="flex justify-center pt-4 border-t border-gray-200">
          <button type="submit" class="px-6 py-2.5 text-white bg-[#13C296] rounded-lg hover:bg-[#0F9D7A] focus:outline-none focus:ring-2 focus:ring-[#13C296] text-sm">
            Kirim Resep
          </button>
        </div>
      </form>
    </div>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const obatContainer = document.getElementById('obatContainer');
      const tambahObatButton = document.getElementById('tambahObat');

      tambahObatButton.addEventListener('click', function() {
        const newObatItem = document.createElement('div');
        newObatItem.classList.add('medication-input-group');
        newObatItem.innerHTML = `
          <input type="text" name="obat[]" class="shadow appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-800 dark:border-gray-600 dark:text-white text-sm" placeholder="Nama Obat">
          <input type="text" name="dosis[]" class="shadow appearance-none border rounded w-1/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-800 dark:border-gray-600 dark:text-white text-sm" placeholder="Dosis">
          <input type="text" name="aturan_pakai[]" class="shadow appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-800 dark:border-gray-600 dark:text-white text-sm" placeholder="Aturan Pakai">
        `;
        obatContainer.appendChild(newObatItem);
      });
    });
  </script>

</body>
</html>