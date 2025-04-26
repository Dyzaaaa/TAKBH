<!-- Navbar -->
<nav class="fixed top-0 z-50 w-full bg-white border-b shadow-sm">
  <div class="flex items-center justify-between p-4">
    <!-- Logo dan Nama Klinik -->
    <div class="flex items-center space-x-3">
      <button id="toggleSidebar" class="p-2 text-gray-700 rounded-md sm:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
      <span class="text-xl font-semibold text-gray-900">Klinik Buah Hati</span>
    </div>

    <!-- Profil dan Notifikasi -->
    <div class="flex items-center space-x-4">
      <!-- Notifikasi -->
      <div class="relative">
        <button id="notificationButton" class="p-2 text-gray-700 hover:bg-gray-100 rounded-full transition">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
          </svg>
          <!-- Badge Notifikasi -->
          <span class="absolute top-0 right-0 bg-red-500 text-white text-xs px-1.5 py-0.5 rounded-full">1</span>
        </button>

        <!-- Popup Notifikasi -->
        <div id="notificationPopup" class="hidden absolute right-0 mt-2 w-64 bg-white border border-gray-200 rounded-lg shadow-lg z-50">
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">Notifikasi</h3>
            <div class="mt-2 space-y-2">
              <div class="p-2 hover:bg-gray-100 rounded-md">
                <p class="text-sm text-gray-700">Anda memiliki 1 pasien baru.</p>
                <p class="text-xs text-gray-500">2 jam yang lalu</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Profil Dokter -->
      <div class="relative">
        <button class="flex items-center space-x-2">
          <img src="https://via.placeholder.com/40" alt="Profil Apoteker" class="w-10 h-10 rounded-full">
          <span class="text-sm font-medium text-gray-900">Dokter</span>
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- Sidebar -->
<aside id="sidebar" class="fixed left-0 w-64 h-full pb-10 top-8 mt-5 bg-white border-r shadow-lg transition-transform sm:translate-x-0 -translate-x-full z-30">
    <div class="h-full flex flex-col p-4">
        <!-- Menu -->
        <nav class="flex-1 mt-4">
            <ul class="space-y-2">
                <li>
                    <a href="{{ url('dokter/dashboard') }}" class="flex items-center p-3 text-gray-700 hover:bg-gray-200 rounded-md transition">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l9-7 9 7v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 21V12h6v9"></path>
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('dokter/jadwal') }}" class="flex items-center p-3 text-gray-700 hover:bg-gray-200 rounded-md transition">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                    </svg>
                        <span class="ml-3">Jadwal Tugas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('dokter/datapasien') }}" class="flex items-center p-3 text-gray-700 hover:bg-gray-200 rounded-md transition">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 6c0 1.657-3.134 3-7 3S5 7.657 5 6m14 0c0-1.657-3.134-3-7-3S5 4.343 5 6m14 0v6M5 6v6m0 0c0 1.657 3.134 3 7 3s7-1.343 7-3M5 12v6c0 1.657 3.134 3 7 3s7-1.343 7-3v-6"/>
                    </svg>
                        <span class="ml-3">Data Pasien</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('dokter/data') }}" class="flex items-center p-3 text-gray-700 hover:bg-gray-200 rounded-md transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                        <span class="ml-3">Data Kunjungan</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Logout -->
        <div class="mt-auto">
            <a href="{{ url('logout') }}" class="flex items-center p-3 text-red-600 hover:bg-red-100 rounded-md transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7"></path>
                </svg>
                <span class="ml-3">Logout</span>
            </a>
        </div>
    </div>
</aside>

<div class="p-4 pt-20 sm:ml-50">
   </div>
   <footer class="fixed bottom-0 w-full text-center text-gray-500 py-3">
    <p>© 2025 Klinik Buah Hati. Semua Hak Dilindungi.</p>
  </footer>
</div>
<script>
    const notificationButton = document.getElementById('notificationButton');
    const notificationPopup = document.getElementById('notificationPopup');


    notificationButton.addEventListener('click', () => {

      notificationPopup.classList.toggle('hidden');
    });


    document.addEventListener('click', (event) => {
      if (!notificationButton.contains(event.target) && !notificationPopup.contains(event.target)) {
        notificationPopup.classList.add('hidden');
      }
    });
  </script>
