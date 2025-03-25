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
      <div class="flex justify-center mb-4">
        <h1 class="text-2xl font-bold dark:text-white">Form Transaksi</h1>
      </div>
      <form action="{{ route('apoteker.kasirStore') }}" method="POST">
        @csrf

        <!-- Pilih Obat -->
        <div class="mb-6">
            <label for="obat_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Obat</label>
            <select name="obat_id" id="obat_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="">Pilih Obat</option>
                @foreach ($dataobat as $obat)
                    <option value="{{ $obat->obat_id }}" data-harga="{{ $obat->harga_jual }}" data-nama="{{ $obat->nama_obat }}">
                        {{ $obat->nama_obat }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Hidden Input untuk Nama Obat -->
        <input type="hidden" name="nama_obat" id="nama_obat">

        <!-- Hidden Input untuk Harga Jual -->
        <input type="hidden" name="harga_jual" id="harga_jual">

        <!-- Jumlah Obat -->
        <div class="mb-6">
            <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
            <input type="number" name="jumlah_obat" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jumlah Barang" required />
        </div>

        <!-- Tanggal Transaksi -->
        <input type="hidden" name="created_at" value="{{ date('Y-m-d') }}">

        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="submit" class="inline-flex items-center text-white bg-[#13C296] hover:bg-gray-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
      </form>
    </div>
  </main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let namaObatSelect = document.getElementById("obat_id");
        let hargaInput = document.getElementById("harga_jual");
        let namaObatInput = document.getElementById("nama_obat");

        namaObatSelect.addEventListener("change", function() {
            let selectedOption = namaObatSelect.options[namaObatSelect.selectedIndex];
            hargaInput.value = selectedOption.getAttribute("data-harga") || 0;
            namaObatInput.value = selectedOption.getAttribute("data-nama") || "";
        });
    });
</script>

</body>
</html>
