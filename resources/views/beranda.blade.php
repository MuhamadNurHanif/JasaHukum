@extends('app')

@section('content')
    <style>
        /* Custom CSS for parallax effects */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .hero-section {
            background-image: linear-gradient(rgba(8, 32, 74, 0.8), rgba(8, 32, 74, 0.8)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
        }

        .about-section {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('https://images.unsplash.com/photo-1558002038-1055-15a30d33542c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80');
        }

        .stats-section {
            background-image: linear-gradient(rgba(8, 32, 74, 0.85), rgba(8, 32, 74, 0.85)), url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
        }

        .contact-section {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80');
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Animation for stats */
        @keyframes countUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .count-up {
            animation: countUp 1s ease-out forwards;
        }

        /* Floating WhatsApp button */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            background-color: #128C7E;
            transform: scale(1.1);
        }
    </style>

    <body class="font-sans">
        <!-- Hero Section -->
        <section id="home" class="hero-section parallax min-h-screen flex items-center justify-center text-white">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Butuh Bantuan Hukum Profesional?<br>Kami Siap
                    Membela Hak Anda!</h1>
                <p class="text-xl md:text-2xl mb-12 max-w-3xl mx-auto">Tim pengacara berpengalaman siap memberikan solusi
                    hukum terbaik untuk berbagai masalah hukum yang Anda hadapi.</p>
                <div class="flex flex-col md:flex-row justify-center gap-4">
                    <a href="#contact"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">
                        Konsultasi Gratis Sekarang
                    </a>
                    <a href="tel:+6281234567890"
                        class="bg-transparent hover:bg-white hover:text-blue-900 text-white font-bold py-4 px-8 border-2 border-white rounded-full transition duration-300 transform hover:scale-105">
                        Hubungi Tim Hukum Kami
                    </a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about-section parallax py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Tentang Kami</h2>
                    <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                </div>

                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                        <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
                            alt="Tim Advokat" class="rounded-lg shadow-xl w-full">
                    </div>
                    <div class="md:w-1/2">
                        <h3 class="text-2xl md:text-3xl font-bold text-blue-900 mb-6">Kantor Hukum Profesional dengan
                            Pengalaman Lebih dari 15 Tahun</h3>
                        <p class="text-gray-700 mb-4 leading-relaxed">
                            Advokat & Partners adalah kantor hukum yang berkomitmen untuk memberikan layanan hukum terbaik
                            dengan integritas tinggi. Didirikan pada tahun 2008, kami telah membantu ribuan klien dalam
                            menyelesaikan berbagai masalah hukum.
                        </p>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Tim kami terdiri dari pengacara-pengacara berpengalaman yang ahli di bidangnya masing-masing,
                            siap memberikan solusi hukum yang tepat dan efektif untuk kebutuhan Anda.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-award text-blue-600 text-2xl mr-3"></i>
                                    <span class="font-bold text-blue-900">Berkualitas</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Layanan hukum berkualitas tinggi dengan pendekatan
                                    profesional</p>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-hand-holding-heart text-blue-600 text-2xl mr-3"></i>
                                    <span class="font-bold text-blue-900">Peduli</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Peduli terhadap kebutuhan dan kepentingan klien</p>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-lock text-blue-600 text-2xl mr-3"></i>
                                    <span class="font-bold text-blue-900">Aman</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Kerahasiaan klien terjamin dengan sistem keamanan
                                    terbaik</p>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-star text-blue-600 text-2xl mr-3"></i>
                                    <span class="font-bold text-blue-900">Terpercaya</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Lebih dari 1.000 klien telah mempercayakan kasus
                                    mereka pada kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section parallax py-20 text-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Prestasi Kami</h2>
                    <div class="w-24 h-1 bg-blue-300 mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div
                        class="bg-blue-800 bg-opacity-70 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                        <div class="text-5xl font-bold mb-2 count-up" data-count="1000">0</div>
                        <div class="text-xl">Kasus Diselesaikan</div>
                    </div>
                    <div
                        class="bg-blue-800 bg-opacity-70 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                        <div class="text-5xl font-bold mb-2 count-up" data-count="99">0</div>
                        <div class="text-xl">% Klien Puas</div>
                    </div>
                    <div
                        class="bg-blue-800 bg-opacity-70 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                        <div class="text-5xl font-bold mb-2 count-up" data-count="15">0</div>
                        <div class="text-xl">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="bg-gray-50 py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Layanan Kami</h2>
                    <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto mt-4">Kami menyediakan berbagai layanan hukum profesional
                        untuk kebutuhan pribadi maupun bisnis Anda</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                        <div class="h-48 bg-blue-900 flex items-center justify-center">
                            <i class="fas fa-gavel text-white text-6xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Hukum Pidana</h3>
                            <p class="text-gray-600 mb-4">Pendampingan hukum dalam kasus pidana mulai dari penyidikan,
                                penuntutan, hingga persidangan.</p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Pengadilan & Banding</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Pembelaan Terbaik</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Penyidikan & Penahanan</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                        <div class="h-48 bg-blue-800 flex items-center justify-center">
                            <i class="fas fa-handshake text-white text-6xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Hukum Perdata</h3>
                            <p class="text-gray-600 mb-4">Penyelesaian sengketa perdata termasuk kontrak, utang piutang,
                                waris, dan perjanjian.</p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Gugatan Perdata</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Penyelesaian Sengketa</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Kontrak & Perjanjian</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                        <div class="h-48 bg-blue-700 flex items-center justify-center">
                            <i class="fas fa-briefcase text-white text-6xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Hukum Bisnis</h3>
                            <p class="text-gray-600 mb-4">Layanan hukum komprehensif untuk bisnis Anda termasuk pendirian
                                perusahaan dan M&A.</p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Pendirian Perusahaan</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Merger & Akuisisi</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Kepatuhan Hukum</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Additional Services -->
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-start">
                        <i class="fas fa-home text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h4 class="font-bold text-blue-900">Hukum Properti</h4>
                            <p class="text-gray-600 text-sm">Sertifikasi tanah, sengketa properti, jual beli</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-start">
                        <i class="fas fa-users text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h4 class="font-bold text-blue-900">Hukum Keluarga</h4>
                            <p class="text-gray-600 text-sm">Perceraian, hak asuh anak, waris</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-start">
                        <i class="fas fa-passport text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h4 class="font-bold text-blue-900">Hukum Imigrasi</h4>
                            <p class="text-gray-600 text-sm">Visa, izin tinggal, kewarganegaraan</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-start">
                        <i class="fas fa-user-tie text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h4 class="font-bold text-blue-900">Hukum Ketenagakerjaan</h4>
                            <p class="text-gray-600 text-sm">PHK, hak pekerja, perselisihan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="bg-blue-50 py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Apa Kata Klien Kami</h2>
                    <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="text-yellow-400 text-xl">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 italic mb-6">"Tim Advokat & Partners sangat profesional dalam menangani
                            kasus bisnis saya. Mereka memberikan solusi yang tepat dan efisien. Hasilnya melebihi ekspektasi
                            saya!"</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-bold text-blue-900">Budi Santoso</h4>
                                <p class="text-gray-500 text-sm">Direktur PT Maju Jaya</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="text-yellow-400 text-xl">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 italic mb-6">"Saya sangat berterima kasih kepada Advokat & Partners yang
                            telah membantu saya memenangkan kasus perceraian dengan hasil yang adil untuk kedua belah
                            pihak."</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-bold text-blue-900">Dewi Lestari</h4>
                                <p class="text-gray-500 text-sm">Guru</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="text-yellow-400 text-xl">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 italic mb-6">"Kasus pidana yang saya hadapi sangat kompleks, tapi tim
                            Advokat & Partners mampu membuktikan ketidakbersalahan saya dengan argumentasi hukum yang kuat."
                        </p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-bold text-blue-900">Andi Wijaya</h4>
                                <p class="text-gray-500 text-sm">Pengusaha</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section class="py-12 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h3 class="text-xl text-gray-600">Bekerja Sama Dengan</h3>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
                    <img src="https://via.placeholder.com/150x80?text=PERADI" alt="PERADI"
                        class="h-12 md:h-16 opacity-70 hover:opacity-100 transition duration-300">
                    <img src="https://via.placeholder.com/150x80?text=Kemenkumham" alt="Kemenkumham"
                        class="h-12 md:h-16 opacity-70 hover:opacity-100 transition duration-300">
                    <img src="https://via.placeholder.com/150x80?text=LBH" alt="LBH"
                        class="h-12 md:h-16 opacity-70 hover:opacity-100 transition duration-300">
                    <img src="https://via.placeholder.com/150x80?text=AAI" alt="AAI"
                        class="h-12 md:h-16 opacity-70 hover:opacity-100 transition duration-300">
                    <img src="https://via.placeholder.com/150x80?text=KADIN" alt="KADIN"
                        class="h-12 md:h-16 opacity-70 hover:opacity-100 transition duration-300">
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section parallax py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Hubungi Kami</h2>
                    <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto mt-4">Kami siap membantu Anda. Silakan hubungi kami melalui
                        formulir di bawah ini atau langsung melalui kontak yang tersedia.</p>
                </div>

                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2">
                        <form method="POST" class="bg-white p-8 rounded-lg shadow-lg" action="#">
                            
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                                <input type="text" id="name"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                                <input type="tel" id="phone"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="service" class="block text-gray-700 font-medium mb-2">Jenis Layanan</label>
                                <select id="service"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Pilih Layanan</option>
                                    <option value="pidana">Hukum Pidana</option>
                                    <option value="perdata">Hukum Perdata</option>
                                    <option value="bisnis">Hukum Bisnis</option>
                                    <option value="keluarga">Hukum Keluarga</option>
                                    <option value="properti">Hukum Properti</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                                <textarea id="message" rows="4"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 transform hover:scale-105">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>

                    <div class="md:w-1/2">
                        <div class="bg-white p-8 rounded-lg shadow-lg h-full">
                            <h3 class="text-2xl font-bold text-blue-900 mb-6">Informasi Kontak</h3>

                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-blue-900 mb-1">Alamat Kantor</h4>
                                        <p class="text-gray-600">Jl. Hukum No. 123, Jakarta Pusat<br>Gedung Justice Tower
                                            Lt. 15</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <i class="fas fa-phone-alt text-blue-600 text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-blue-900 mb-1">Telepon</h4>
                                        <p class="text-gray-600">(021) 1234-5678<br>+62 812-3456-7890 (24 Jam)</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <i class="fas fa-envelope text-blue-600 text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-blue-900 mb-1">Email</h4>
                                        <p class="text-gray-600">info@advokatpartners.com<br>consult@advokatpartners.com
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <i class="fas fa-clock text-blue-600 text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-blue-900 mb-1">Jam Operasional</h4>
                                        <p class="text-gray-600">Senin - Jumat: 08.00 - 17.00 WIB<br>Sabtu: 09.00 - 15.00
                                            WIB<br>Minggu: Tutup</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <h4 class="font-bol d text-blue-900 mb-4">Ikuti Kami</h4>
                                <div class="flex space-x-4">
                                    <a href="#"
                                        class="bg-blue-100 text-blue-600 p-3 rounded-full hover:bg-blue-200 transition duration-300">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#"
                                        class="bg-blue-100 text-blue-600 p-3 rounded-full hover:bg-blue-200 transition duration-300">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#"
                                        class="bg-blue-100 text-blue-600 p-3 rounded-full hover:bg-blue-200 transition duration-300">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#"
                                        class="bg-blue-100 text-blue-600 p-3 rounded-full hover:bg-blue-200 transition duration-300">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- JavaScript -->
        <script>
            // Mobile menu toggle
            const btn = document.querySelector(".mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });

            // Count up animation for stats
            const counters = document.querySelectorAll('.count-up');
            const speed = 200;

            function animateCounters() {
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-count');
                    const count = +counter.innerText;
                    const increment = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(animateCounters, 1);
                    } else {
                        counter.innerText = target;
                    }
                });
            }

            // Only start counting when section is in view
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => {
                observer.observe(counter);
            });

            // Smooth scroll for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });

                        // Close mobile menu if open
                        if (!menu.classList.contains('hidden')) {
                            menu.classList.add('hidden');
                        }
                    }
                });
            });
        </script>
    </body>
@endsection
