<nav class="bg-blue-900 text-white sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <div class="flex items-center">
                    {{-- <i class="fas fa-balance-scale  text-blue-300"></i> --}}
                    <img src="{{ asset('images/Logo.jpg') }}" class="w-10 h-10 object-contain mr-3">
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
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
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
