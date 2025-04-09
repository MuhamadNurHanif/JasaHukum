<header class="antialiased">
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-3 dark:bg-gray-800">
      <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between">
        <!-- Logo dan Nama -->
        <a href="/" class="flex items-center space-x-2">
          <img src="https://flowbite.s3.amazonaws.com/logo.svg" class="h-8" alt="Logo" />
          <span class="text-lg font-semibold whitespace-nowrap dark:text-white">
            Tri Sulasmono, S.H & Partner
          </span>
        </a>
  
        <!-- Tombol toggle (hamburger) -->
        <button
          data-collapse-toggle="navbar-menu"
          type="button"
          class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-menu"
          aria-expanded="false"
        >
          <span class="sr-only">Buka menu utama</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor"
            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
  
        <!-- Menu Navbar -->
        <div class="hidden w-full lg:flex lg:w-auto" id="navbar-menu">
          <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0 text-gray-700 dark:text-white">
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 rounded hover:text-blue-600">Beranda</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 rounded hover:text-blue-600">Tentang Kami</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 rounded hover:text-blue-600">Layanan</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 rounded hover:text-blue-600">Hubungi Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    <!-- Script untuk toggle -->    
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.querySelector('[data-collapse-toggle]');
        const menu = document.getElementById('navbar-menu');
  
        toggleBtn.addEventListener('click', () => {
          menu.classList.toggle('hidden');
        });
      });
    </script>
  </header>
  