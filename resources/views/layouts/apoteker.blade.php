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

      <!-- Profil Apoteker -->
      <div class="relative">
        <button class="flex items-center space-x-2">
          <img src="https://via.placeholder.com/40" alt="Profil Apoteker" class="w-10 h-10 rounded-full">
          <span class="text-sm font-medium text-gray-900">Apoteker</span>
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
                    <a href="{{ url('apoteker/dashboard') }}" class="flex items-center p-3 text-gray-700 hover:bg-gray-200 rounded-md transition">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l9-7 9 7v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 21V12h6v9"></path>
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('apoteker/data') }}" class="flex items-center p-3 text-gray-700 hover:bg-gray-200 rounded-md transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                        <span class="ml-3">Data Kunjungan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('apoteker/inventaris') }}" class="flex items-center p-3 text-gray-700 hover:bg-gray-200 rounded-md transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                        <span class="ml-3">Inventaris</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('apoteker/kasir') }}" class="flex items-center p-3 text-gray-700 hover:bg-gray-200 rounded-md transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="ml-3">Kasir</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('apoteker/keuangan') }}" class="flex items-center p-3 text-gray-700 hover:bg-gray-200 rounded-md transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                        <span class="ml-3">Keuangan</span>
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