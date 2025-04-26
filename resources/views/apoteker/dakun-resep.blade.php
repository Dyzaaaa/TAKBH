<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati - Resep Obat</title>

  @vite(['resources/css/app.css', 'resources/css/resep.css', 'resources/css/custom.css'])

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 px-4 pb-5">
    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden p-6 md:p-8 mb-5">
      <div class="prescription-header">
        <img src="/images/clinic-logo.png" alt="Klinik Buah Hati" class="clinic-logo">
        <h1 class="prescription-title">Resep Obat Pasien</h1>
        <p class="prescription-number">No. Resep: {{ date('Ymd') }}-{{ $datapasien->id }} <span class="font-medium patient-info-label">Dokter:</span> Dr. Ahmad Fauzi</p>
      </div>

      <div class="patient-info-card">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Informasi Pasien</h2>
            <div class="space-y-2">
              <p class="text-gray-700"><span class="font-medium patient-info-label">Nama:</span> {{ $datapasien->nama_pasien}}</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">Usia:</span> {{ $datapasien->usia}} tahun</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">NIK:</span> {{ $datapasien->NIK }}</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">No. HP:</span> {{ $datapasien->no_hp}}</p>
            </div>
          </div>
          <div>
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Informasi Medis</h2>
            <div class="space-y-2">
              <p class="text-gray-700"><span class="font-medium patient-info-label">Tinggi Badan:</span> {{ $datapasien->tinggi_badan ?? '-' }} cm</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">Berat Badan:</span> {{ $datapasien->berat_badan ?? '-' }} kg</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">Tekanan Darah:</span> {{ $datapasien->tensi ?? '-' }}</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">Keluhan:</span> {{ $datapasien->keluhan ?? '-' }}</p>
              <p class="text-gray-700"><span class="font-medium patient-info-label">Diagnosis:</span> {{ $datapasien->diagnosis ?? 'Belum diisi' }}</p>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Resep Obat</h3>
        <div class="space-y-3">
          <div class="medication-item">
            <input id="med-1" type="checkbox" class="medication-checkbox">
            <label for="med-1" class="medication-label">Paracetamol 500mg</label>
            <span class="medication-dosage">3x sehari setelah makan</span>
          </div>
          <div class="medication-item">
            <input id="med-2" type="checkbox" class="medication-checkbox">
            <label for="med-2" class="medication-label">Panadol Extra</label>
            <span class="medication-dosage">2x sehari</span>
          </div>
          <div class="medication-item">
            <input id="med-3" type="checkbox" class="medication-checkbox">
            <label for="med-3" class="medication-label">Ibuprofen 200mg</label>
            <span class="medication-dosage">Jika diperlukan</span>
          </div>
        </div>
      </div>

      <div class="mb-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-2">Instruksi Tambahan</h3>
        <p class="text-gray-700">{{ $datapasien->instruksi_tambahan ?? 'Tidak ada instruksi tambahan' }}</p>
      </div>

      <div class="flex justify-center pt-4 border-t border-gray-200">
        <button class="px-6 py-2.5 text-white bg-[#13C296] rounded-lg hover:bg-[#0F9D7A] focus:outline-none focus:ring-2 focus:ring-[#13C296]">
          Selesai
        </button>
      </div>
      </div>
    </div>
  </main>

</body>
</html>