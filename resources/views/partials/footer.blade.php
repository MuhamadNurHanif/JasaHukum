 <!-- Map Section -->
 <div class="h-96 w-full">
     <iframe
         src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3948.722038381301!2d114.37507207500968!3d-8.230681991802141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMTMnNTAuNSJTIDExNMKwMjInMzkuNSJF!5e0!3m2!1sid!2sid!4v1745218517363!5m2!1sid!2sid"
         width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 </div>

 <!-- Footer -->
 <footer class="bg-blue-900 text-white py-12">
     <div class="container mx-auto px-6">
         <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
             <div>
                 <div class="flex items-center mb-4">
                     {{-- <i class="fas fa-balance-scale text-2xl mr-2 text-blue-300"></i> --}}
                     <img src="{{ asset('images/Logo.jpg') }}" class="w-10 h-10 object-contain mr-3">
                     <span class="font-bold text-xl">Tri Sulasmono, S.H. & Partner</span>
                 </div>
                 <p class="text-blue-200">Kantor hukum profesional yang berkomitmen memberikan solusi hukum terbaik
                     untuk klien kami.</p>
             </div>

             <div>
                 <h4 class="font-bold text-lg mb-4">Tautan Cepat</h4>
                 <ul class="space-y-2">
                     <li><a href="#home" class="text-blue-200 hover:text-white transition duration-300">Beranda</a>
                     </li>
                     <li><a href="#about" class="text-blue-200 hover:text-white transition duration-300">Tentang
                             Kami</a></li>
                     <li><a href="#services" class="text-blue-200 hover:text-white transition duration-300">Layanan</a>
                     </li>
                     <li><a href="#contact" class="text-blue-200 hover:text-white transition duration-300">Kontak</a>
                     </li>
                 </ul>
             </div>

             <div>
                 <h4 class="font-bold text-lg mb-4">Layanan</h4>
                 <ul class="space-y-2">
                     <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Hukum
                             Pidana</a></li>
                     <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Hukum
                             Perdata</a></li>
                     <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Hukum
                             Bisnis</a></li>
                     <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Hukum
                             Keluarga</a></li>
                 </ul>
             </div>

             <div>
                 <h4 class="font-bold text-lg mb-4">Berlangganan</h4>
                 <p class="text-blue-200 mb-4">Dapatkan informasi terbaru tentang hukum dan layanan kami.</p>
                 <div class="flex">
                     <input type="email" placeholder="Email Anda"
                         class="px-4 py-2 w-full rounded-l-lg focus:outline-none text-gray-800">
                     <button class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-r-lg transition duration-300">
                         <i class="fas fa-paper-plane"></i>
                     </button>
                 </div>
             </div>
         </div>

         <div class="border-t border-blue-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
             <p class="text-blue-200 text-sm mb-4 md:mb-0">© 2025 Tri Sulasmono S.H . Seluruh hak cipta dilindungi.</p>
             <div class="flex space-x-6">
                 <a href="#" class="text-blue-200 hover:text-white transition duration-300 text-sm">Kebijakan
                     Privasi</a>
                 <a href="#" class="text-blue-200 hover:text-white transition duration-300 text-sm">Syarat &
                     Ketentuan</a>
                 <a href="#" class="text-blue-200 hover:text-white transition duration-300 text-sm">Sitemap</a>
             </div>
         </div>
     </div>
 </footer>
