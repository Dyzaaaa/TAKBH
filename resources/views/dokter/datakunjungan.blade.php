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

  @include('layouts.dokter')

  <main class="lg:ml-64 md:ml-48 px-4">
  <div>
      <h1 class="judul-halaman mb-2 mb-5">Tabel Antrean Pasien</h1>
    </div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="antrean-table w-full text-sm">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3">
                    NO
                </th>
                <th scope="col" class="px-6 py-3">
                    NAMA
                </th>
                <th scope="col" class="px-6 py-3">
                    USIA
                </th>
                <th scope="col" class="px-6 py-3">
                    NIK
                </th>
                <th scope="col" class="px-6 py-3">
                    NO. HP
                </th>
                <th scope="col" class="px-6 py-3">
                    AKSI
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datapasien as $k)
            <tr class="bg-white border-b">
                <td class="px-3 py-2">
                    {{ $loop->iteration}}
                </td>
                <td class="px-3 py-2">
                    {{ $k->nama_pasien}}
                </td>
                <td class="px-3 py-2">
                    {{ $k->usia}}
                </td>
                <td class="px-3 py-2">
                    {{ $k->NIK}}
                </td>
                <td class="px-3 py-2">
                    {{ $k->no_hp}}
                </td>
                <td class="px-3 py-2">
                    <a href="{{ route('dokter.dakun-resep', $k->pasien_id) }}" class="btn-action btn-resep"><i class="fas fa-file-alt"></i>Buat Resep</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</main>

</body>
</html>