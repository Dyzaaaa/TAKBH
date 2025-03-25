<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati</title>
  @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/css/form.css'])
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 px-4 pb-5">
    <div class="max-w-6xl w-full bg-white rounded-lg shadow p-6 md:p-8 mb-5">
      <div class="form-header">
        <h1 class="form-title">Form Antrean Pasien</h1>
      </div>
<form action="{{ route('apoteker.aptDaKunUpdate', $pasien_id->pasien_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <div class="mb-6">
        <label for="nama_pasien" class="form-label">Nama</label>
        <input type="text" id="nama_pasien" class="form-input" placeholder="Nama Lengkap" required name="nama_pasien" value="{{ $pasien_id->nama_pasien }}" />
    </div>
    <div class="mb-6">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" id="tanggal_lahir" class="form-input" placeholder=""  name="tanggal_lahir" required value="{{ $pasien_id->tanggal_lahir }}" />
    </div>
    <div class="mb-6">
        <label for="usia" class="form-label">Usia</label>
        <input type="text" id="usia" class="form-input" name="usia" required value="{{ $pasien_id->usia }}"/>
    </div>
    <div class="mb-6">
        <label for="no_hp" class="form-label">No. HP</label>
        <input type="text" id="no_hp" class="form-input"  placeholder="" name="no_hp" required value="{{ $pasien_id->no_hp }}" />
    </div>
    <div class="mb-6">
        <label for="NIK" class="form-label">NIK</label>
        <input type="text" id="NIK" class="form-input" placeholder="" name="NIK" required value="{{ $pasien_id->NIK }}"/>
      </div>
      <div class="mb-6">
        <label for="tb" class="form-label">Tinggi Badan</label>
        <div class="form-input-group">
        <input type="number" id="tb" class="form-input" placeholder="" name="tb" value="{{ $pasien_id->tb }}"/>
        <span class="form-input-unit">cm</span>
      </div>
    </div>
    <div class="mb-6">
    <label for="bb" class="form-label">Berat Badan</label>
    <div class="form-input-group">
        <input type="number" id="bb" class="form-input" placeholder="" name="bb" value="{{ $pasien_id->bb }}"/>
        <span class="form-input-unit">kg</span>
    </div>
  </div>
    <div class="mb-4">
    <label for="tekanan_darah" class="form-label">Tekanan Darah</label>
    <input type="text" id="tekanan_darah" name="tekanan_darah" placeholder="" class="form-input" pattern="^\d+/\d+$" title="Format tekanan darah harus angka/angka (contoh: 120/80)" value="{{ $pasien_id->tensi }}"/>
    <p class="form-input-note">Format: angka/angka</p>
  </div>
    <div class="mb-6">
        <label for="keluhan" class="form-label">Keluhan</label>
        <input type="text" id="keluhan" class="form-input" placeholder="" name="keluhan" value="{{ $pasien_id->keluhan }}"/>
    </div>

    <div class="flex justify-center mt-5">
    <button type="submit" class="form-submit-button">Submit</button>
  </div>
</form>

</body>
</html>