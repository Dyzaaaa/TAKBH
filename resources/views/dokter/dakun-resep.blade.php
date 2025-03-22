<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

  @include('layouts.dokter')

  <main class="lg:ml-64 md:ml-48 pt-10 px-4 pb-5">
    <div class="max-w-6xl w-full bg-white rounded-lg shadow p-6 md:p-8 mb-5">
      <div class="flex justify-center mb-4">
        <h1 class="center text-2xl font-bold dark:text-white">Form Resep Pasien</h1>
      </div>

      <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-5">
          <h2 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">{{ $datapasien->nama_pasien}}</h2>
          <h3 class="mb-2 text-l text-gray-900 dark:text-white">{{ $datapasien->usia}}</h3>
          <h3 class="mb-2 text-l text-gray-900 dark:text-white">{{ $datapasien->no_hp}}</h3>

          <form action="#">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                <label for="diagnosis" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white">Diagnosis</label>
                <textarea id="diagnosis" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Diagnosis Pasien"></textarea>
              </div>
            </div>
          </form>

          <form id="obatForm">
            <div id="obatContainer">
              <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-5 obat-item">
                <div class="w-full">
                  <label for="obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obat</label>
                  <input type="text" name="obat[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Obat" required>
                </div>
                <div class="w-full">
                  <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                  <input type="number" name="jumlah[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jumlah" required>
                </div>
              </div>
            </div>
          </form>

          <button type="button" id="tambahObat" class="text-black bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center inline-flex items-center me-2 mt-5 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Tambah Obat
          </button>

          <div class="flex justify-center">
            <button type="submit" class="inline-flex items-center text-white bg-[#13C296] hover:bg-gray-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </div>
        </div>
      </section>

    </div>
  </main>

  <script>
    document.getElementById('tambahObat').addEventListener('click', function () {
      const obatContainer = document.getElementById('obatContainer');

      const newObatItem = document.createElement('div');
      newObatItem.classList.add('grid', 'gap-4', 'sm:grid-cols-2', 'sm:gap-6', 'mt-5', 'obat-item');

      newObatItem.innerHTML = `
        <div class="w-full">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obat</label>
          <input type="text" name="obat[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Obat" required>
        </div>
        <div class="w-full">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
          <input type="number" name="jumlah[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jumlah" required>
        </div>
      `;
      obatContainer.appendChild(newObatItem);
    });
  </script>

</body>
</html>
