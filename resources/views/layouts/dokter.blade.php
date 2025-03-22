@include('layouts.navbar')

      <div class="flex items-center space-x-4">
        <div>
      <button type="button" data-dropdown-toggle="dropdown-notif">
      <span class="sr-only">Open notif menu</span>
      <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2.90002C10.0904 2.90002 8.25906 3.65859 6.9088 5.00886C5.55853 6.35912 4.79996 8.19047 4.79996 10.1V14.4032L3.95156 15.2516C3.78379 15.4194 3.66954 15.6332 3.62326 15.866C3.57698 16.0987 3.60075 16.34 3.69155 16.5592C3.78235 16.7785 3.93612 16.9658 4.13341 17.0977C4.33071 17.2296 4.56266 17.3 4.79996 17.3H19.2C19.4373 17.3 19.6692 17.2296 19.8665 17.0977C20.0638 16.9658 20.2176 16.7785 20.3084 16.5592C20.3992 16.34 20.4229 16.0987 20.3767 15.866C20.3304 15.6332 20.2161 15.4194 20.0484 15.2516L19.2 14.4032V10.1C19.2 8.19047 18.4414 6.35912 17.0911 5.00886C15.7409 3.65859 13.9095 2.90002 12 2.90002ZM12 22.1C11.0452 22.1 10.1295 21.7207 9.45438 21.0456C8.77925 20.3705 8.39996 19.4548 8.39996 18.5H15.6C15.6 19.4548 15.2207 20.3705 14.5455 21.0456C13.8704 21.7207 12.9547 22.1 12 22.1Z" fill="white"/>
    </svg>
      </button>
    </div>
    <div class="z-50 absolute right-0 mt-2 w-48 bg-white divide-y divide-gray-100 rounded shadow-lg hidden" id="dropdown-notif">
              <div class="px-4 py-3" role="none">
                <p class="text-sm font-medium text-gray-900 truncate" role="none">
                  2 Pasien Baru
                </p>
              </div>
            </div>

            <div>
            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden absolute right-0 mt-2 w-48 text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg " id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900" role="none">
                  Dokter
                </p>
                <p class="text-sm font-medium text-gray-900 truncate" role="none">
                  Dr. Cinta
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-16 left-0 z-40 w-64 h-[calc(100vh-64px)] transition-transform -translate-x-full border-r sm:translate-x-0 " aria-label="Sidebar">
   <div class="h-full overflow-y-auto  ">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="dashboard" class="flex items-center p-2 text-gray-900 hover:bg-gray-200 group ">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.8484 2.75161C12.6234 2.52665 12.3182 2.40027 12 2.40027C11.6818 2.40027 11.3766 2.52665 11.1516 2.75161L2.7516 11.1516C2.53301 11.3779 2.41206 11.6811 2.41479 11.9957C2.41752 12.3103 2.54373 12.6113 2.76622 12.8338C2.98871 13.0563 3.28968 13.1825 3.60432 13.1852C3.91895 13.188 4.22208 13.067 4.4484 12.8484L4.8 12.4968V20.4C4.8 20.7183 4.92643 21.0235 5.15147 21.2485C5.37652 21.4736 5.68174 21.6 6 21.6H8.4C8.71826 21.6 9.02348 21.4736 9.24853 21.2485C9.47357 21.0235 9.6 20.7183 9.6 20.4V18C9.6 17.6818 9.72643 17.3765 9.95147 17.1515C10.1765 16.9264 10.4817 16.8 10.8 16.8H13.2C13.5183 16.8 13.8235 16.9264 14.0485 17.1515C14.2736 17.3765 14.4 17.6818 14.4 18V20.4C14.4 20.7183 14.5264 21.0235 14.7515 21.2485C14.9765 21.4736 15.2817 21.6 15.6 21.6H18C18.3183 21.6 18.6235 21.4736 18.8485 21.2485C19.0736 21.0235 19.2 20.7183 19.2 20.4V12.4968L19.5516 12.8484C19.7779 13.067 20.081 13.188 20.3957 13.1852C20.7103 13.1825 21.0113 13.0563 21.2338 12.8338C21.4563 12.6113 21.5825 12.3103 21.5852 11.9957C21.5879 11.6811 21.467 11.3779 21.2484 11.1516L12.8484 2.75161Z" fill="black"/>
            </svg>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="jadwal" class="flex items-center p-2 text-gray-900 hover:bg-gray-200 group ">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.2 2.40002C6.88174 2.40002 6.57652 2.52645 6.35147 2.7515C6.12643 2.97654 6 3.28176 6 3.60002V4.80002H4.8C4.16348 4.80002 3.55303 5.05288 3.10294 5.50297C2.65286 5.95306 2.4 6.56351 2.4 7.20002V19.2C2.4 19.8365 2.65286 20.447 3.10294 20.8971C3.55303 21.3472 4.16348 21.6 4.8 21.6H19.2C19.8365 21.6 20.447 21.3472 20.8971 20.8971C21.3471 20.447 21.6 19.8365 21.6 19.2V7.20002C21.6 6.56351 21.3471 5.95306 20.8971 5.50297C20.447 5.05288 19.8365 4.80002 19.2 4.80002H18V3.60002C18 3.28176 17.8736 2.97654 17.6485 2.7515C17.4235 2.52645 17.1183 2.40002 16.8 2.40002C16.4817 2.40002 16.1765 2.52645 15.9515 2.7515C15.7264 2.97654 15.6 3.28176 15.6 3.60002V4.80002H8.4V3.60002C8.4 3.28176 8.27357 2.97654 8.04853 2.7515C7.82348 2.52645 7.51826 2.40002 7.2 2.40002ZM7.2 8.40002C6.88174 8.40002 6.57652 8.52645 6.35147 8.7515C6.12643 8.97654 6 9.28176 6 9.60002C6 9.91828 6.12643 10.2235 6.35147 10.4486C6.57652 10.6736 6.88174 10.8 7.2 10.8H16.8C17.1183 10.8 17.4235 10.6736 17.6485 10.4486C17.8736 10.2235 18 9.91828 18 9.60002C18 9.28176 17.8736 8.97654 17.6485 8.7515C17.4235 8.52645 17.1183 8.40002 16.8 8.40002H7.2Z" fill="black"/>
            </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Jadwal Tugas</span>
            </a>
         </li>
         <li>
            <a href="datapasien" class="flex items-center p-2 text-gray-900 hover:bg-gray-200 group ">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.8484 2.75161C12.6234 2.52665 12.3182 2.40027 12 2.40027C11.6818 2.40027 11.3766 2.52665 11.1516 2.75161L2.7516 11.1516C2.53301 11.3779 2.41206 11.6811 2.41479 11.9957C2.41752 12.3103 2.54373 12.6113 2.76622 12.8338C2.98871 13.0563 3.28968 13.1825 3.60432 13.1852C3.91895 13.188 4.22208 13.067 4.4484 12.8484L4.8 12.4968V20.4C4.8 20.7183 4.92643 21.0235 5.15147 21.2485C5.37652 21.4736 5.68174 21.6 6 21.6H8.4C8.71826 21.6 9.02348 21.4736 9.24853 21.2485C9.47357 21.0235 9.6 20.7183 9.6 20.4V18C9.6 17.6818 9.72643 17.3765 9.95147 17.1515C10.1765 16.9264 10.4817 16.8 10.8 16.8H13.2C13.5183 16.8 13.8235 16.9264 14.0485 17.1515C14.2736 17.3765 14.4 17.6818 14.4 18V20.4C14.4 20.7183 14.5264 21.0235 14.7515 21.2485C14.9765 21.4736 15.2817 21.6 15.6 21.6H18C18.3183 21.6 18.6235 21.4736 18.8485 21.2485C19.0736 21.0235 19.2 20.7183 19.2 20.4V12.4968L19.5516 12.8484C19.7779 13.067 20.081 13.188 20.3957 13.1852C20.7103 13.1825 21.0113 13.0563 21.2338 12.8338C21.4563 12.6113 21.5825 12.3103 21.5852 11.9957C21.5879 11.6811 21.467 11.3779 21.2484 11.1516L12.8484 2.75161Z" fill="black"/>
            </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Data Pasien</span>
            </a>
         </li>
         <li>
            <a href="data" class="flex items-center p-2 text-gray-900 hover:bg-gray-200 group ">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.8 2.39999C10.4817 2.39999 10.1765 2.52642 9.95147 2.75147C9.72643 2.97651 9.6 3.28173 9.6 3.59999C9.6 3.91825 9.72643 4.22348 9.95147 4.44852C10.1765 4.67357 10.4817 4.79999 10.8 4.79999H13.2C13.5183 4.79999 13.8235 4.67357 14.0485 4.44852C14.2736 4.22348 14.4 3.91825 14.4 3.59999C14.4 3.28173 14.2736 2.97651 14.0485 2.75147C13.8235 2.52642 13.5183 2.39999 13.2 2.39999H10.8Z" fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.8 6.00001C4.8 5.36349 5.05286 4.75304 5.50294 4.30295C5.95303 3.85286 6.56348 3.60001 7.2 3.60001C7.2 4.55479 7.57928 5.47046 8.25442 6.14559C8.92955 6.82072 9.84522 7.20001 10.8 7.20001H13.2C14.1548 7.20001 15.0705 6.82072 15.7456 6.14559C16.4207 5.47046 16.8 4.55479 16.8 3.60001C17.4365 3.60001 18.047 3.85286 18.4971 4.30295C18.9471 4.75304 19.2 5.36349 19.2 6.00001V19.2C19.2 19.8365 18.9471 20.447 18.4971 20.8971C18.047 21.3472 17.4365 21.6 16.8 21.6H7.2C6.56348 21.6 5.95303 21.3472 5.50294 20.8971C5.05286 20.447 4.8 19.8365 4.8 19.2V6.00001ZM8.4 10.8C8.08174 10.8 7.77652 10.9264 7.55147 11.1515C7.32643 11.3765 7.2 11.6817 7.2 12C7.2 12.3183 7.32643 12.6235 7.55147 12.8485C7.77652 13.0736 8.08174 13.2 8.4 13.2H8.412C8.73026 13.2 9.03548 13.0736 9.26053 12.8485C9.48557 12.6235 9.612 12.3183 9.612 12C9.612 11.6817 9.48557 11.3765 9.26053 11.1515C9.03548 10.9264 8.73026 10.8 8.412 10.8H8.4ZM12 10.8C11.6817 10.8 11.3765 10.9264 11.1515 11.1515C10.9264 11.3765 10.8 11.6817 10.8 12C10.8 12.3183 10.9264 12.6235 11.1515 12.8485C11.3765 13.0736 11.6817 13.2 12 13.2H15.6C15.9183 13.2 16.2235 13.0736 16.4485 12.8485C16.6736 12.6235 16.8 12.3183 16.8 12C16.8 11.6817 16.6736 11.3765 16.4485 11.1515C16.2235 10.9264 15.9183 10.8 15.6 10.8H12ZM8.4 15.6C8.08174 15.6 7.77652 15.7264 7.55147 15.9515C7.32643 16.1765 7.2 16.4817 7.2 16.8C7.2 17.1183 7.32643 17.4235 7.55147 17.6485C7.77652 17.8736 8.08174 18 8.4 18H8.412C8.73026 18 9.03548 17.8736 9.26053 17.6485C9.48557 17.4235 9.612 17.1183 9.612 16.8C9.612 16.4817 9.48557 16.1765 9.26053 15.9515C9.03548 15.7264 8.73026 15.6 8.412 15.6H8.4ZM12 15.6C11.6817 15.6 11.3765 15.7264 11.1515 15.9515C10.9264 16.1765 10.8 16.4817 10.8 16.8C10.8 17.1183 10.9264 17.4235 11.1515 17.6485C11.3765 17.8736 11.6817 18 12 18H15.6C15.9183 18 16.2235 17.8736 16.4485 17.6485C16.6736 17.4235 16.8 17.1183 16.8 16.8C16.8 16.4817 16.6736 16.1765 16.4485 15.9515C16.2235 15.7264 15.9183 15.6 15.6 15.6H12Z" fill="black"/>
            </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Data Kunjungan</span>
            </a>
         </li>
            <a href="#" class="flex items-center p-2 text-gray-900 hover:bg-gray-200 group ">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 16L21 12M21 12L17 8M21 12H7M13 16V17C13 17.7956 12.6839 18.5587 12.1213 19.1213C11.5587 19.6839 10.7956 20 10 20H6C5.20435 20 4.44129 19.6839 3.87868 19.1213C3.31607 18.5587 3 17.7956 3 17V7C3 6.20435 3.31607 5.44129 3.87868 4.87868C4.44129 4.31607 5.20435 4 6 4H10C10.7956 4 11.5587 4.31607 12.1213 4.87868C12.6839 5.44129 13 6.20435 13 7V8" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<div class="p-4 sm:ml-64">
   </div>
</div>
