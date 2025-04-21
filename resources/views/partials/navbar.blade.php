{{-- <header class="fixed w-full z-50">
    <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <!-- Logo -->
            <a href="{{ route('beranda') }}" class="flex items-center">
                <img src="{{ asset('images/logo.jpg') }}" class="h-6 mr-3 sm:h-9" alt="Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-black">Tri Sulasmono, S.H &
                    Partner</span>
            </a>

            <!-- Hamburger button -->
            <button data-collapse-toggle="mobile-menu" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:ring-gray-600"
                aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5h14a1 1 0 01 0 2H3a1 1 0 01 0-2zm0 6h14a1 1 0 01 0 2H3a1 1 0 01 0-2zm0 6h14a1 1 0 01 0 2H3a1 1 0 01 0-2z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <!-- Menu items -->
            <div class="hidden w-full lg:flex lg:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ route('beranda') }}"
                            class="block py-2 pl-3 pr-4 rounded lg:p-0
                                {{ Route::is('beranda') ? 'text-white bg-purple-700 lg:bg-transparent lg:text-purple-700 dark:text-white' : 'text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent' }}"
                            aria-current="{{ Route::is('beranda') ? 'page' : '' }}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('tentangkami') }}"
                            class="block py-2 pl-3 pr-4 rounded lg:p-0
                                {{ Route::is('tentangkami') ? 'text-white bg-purple-700 lg:bg-transparent lg:text-purple-700 dark:text-white' : 'text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent' }}">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}"
                            class="block py-2 pl-3 pr-4 rounded lg:p-0
                                {{ Route::is('layanan') ? 'text-white bg-purple-700 lg:bg-transparent lg:text-purple-700 dark:text-white' : 'text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent' }}">
                            Layanan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('hubungikami') }}"
                            class="block py-2 pl-3 pr-4 rounded lg:p-0
                                {{ Route::is('hubungikami') ? 'text-white bg-purple-700 lg:bg-transparent lg:text-purple-700 dark:text-white' : 'text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent' }}">
                            Hubungi Kami
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script>
    const hamburgerButton = document.querySelector('[data-collapse-toggle="mobile-menu"]');
    const menu = document.getElementById('mobile-menu');

    hamburgerButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script> --}}

<nav class="bg-blue-900 text-white sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <div class="flex items-center">
                    <i class="fas fa-balance-scale text-2xl mr-2 text-blue-300"></i>
                    <span class="font-bold text-xl">Tri Sulasmono, S.H. & Partner</span>
                </div>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home" class="hover:text-blue-300 transition duration-300">Beranda</a>
                <a href="#about" class="hover:text-blue-300 transition duration-300">Tentang Kami</a>
                <a href="#services" class="hover:text-blue-300 transition duration-300">Layanan</a>
                <a href="#contact" class="hover:text-blue-300 transition duration-300">Kontak</a>
            </div>
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu -->
    <div class="hidden mobile-menu bg-blue-800">
        <div class="container mx-auto px-6 py-3 flex flex-col space-y-4">
            <a href="#home" class="block hover:text-blue-300 transition duration-300 py-2">Beranda</a>
            <a href="#about" class="block hover:text-blue-300 transition duration-300 py-2">Tentang Kami</a>
            <a href="#services" class="block hover:text-blue-300 transition duration-300 py-2">Layanan</a>
            <a href="#contact" class="block hover:text-blue-300 transition duration-300 py-2">Kontak</a>
        </div>
    </div>
</nav>
