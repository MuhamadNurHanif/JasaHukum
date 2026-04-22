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
            background-image: linear-gradient(rgba(8, 32, 74, 0.8), rgba(8, 32, 74, 0.8)), url('{{ asset('images/banner.jpeg') }}');
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
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Anda ingin Konsultasi & Bantuan Hukum!</h1>
                <p class="text-xl md:text-2xl mb-12 max-w-3xl mx-auto">Advokat kami siap membela hak Anda!</p>
                <p class="text-xl md:text-2xl mb-12 max-w-3xl mx-auto">Advokat kami berpengalaman dan cakap dalam membela hak
                    klien.</p>
                <div class="flex flex-col md:flex-row justify-center gap-4">
                    <a href="https://wa.me/62859106953875"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">
                        Konsultasi Sekarang
                    </a>
                    <a href="#contact"
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
                        <img src="{{ asset('images/profil.jpeg') }}" alt="Tim Advokat" class="rounded-lg shadow-xl w-full">
                    </div>
                    <div class="md:w-1/2">
                        <h3 class="text-2xl md:text-3xl font-bold text-blue-900 mb-6">Kantor Hukum Profesional</h3>
                        <p class="text-gray-700 mb-4 leading-relaxed">
                            Tri Sulasmono, S.H. & Partners adalah kantor hukum yang berkomitmen untuk memberikan layanan
                            hukum terbaik
                            dengan integritas tinggi.
                        </p>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Tim kami terdiri dari pengacara-pengacara berpengalaman yang ahli di bidangnya masing-masing,
                            siap memberikan solusi hukum yang tepat dan efektif untuk kebutuhan Anda. Tri Sulasmono, S.H. &
                            Partners telah membantu klien dalam
                            menyelesaikan berbagai masalah hukum.
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
                                <p class="text-sm text-gray-600 mt-2">Banyak klien telah mempercayakan kasus
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
                        <div class="text-5xl font-bold mb-2 count-up" data-count="100" data-suffix="+">0</div>
                        <div class="text-xl">Kasus Diselesaikan</div>
                    </div>
                    <div
                        class="bg-blue-800 bg-opacity-70 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                        <div class="text-5xl font-bold mb-2 count-up" data-count="99" data-suffix="%">0</div>
                        <div class="text-xl">Klien Puas</div>
                    </div>
                    <div
                        class="bg-blue-800 bg-opacity-70 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                        <div class="text-5xl font-bold mb-2 count-up" data-count="5" data-prefix=">">0</div>
                        <div class="text-xl">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="bg-gray-50 py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Layanan Utama Advokat</h2>
                    <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto mt-4">Seorang advokat bertindak sebagai pendamping, pelindung
                        hak hukum, dan penasihat strategis bagi kliennya.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                        <div class="h-48 overflow-hidden">
                            <img src={{ asset('images/tentangkami.png') }}
                            alt="icon"
                            class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Konsultasi Hukum</h3>
                            <p class="text-gray-600 mb-4">Pendampingan hukum dalam kasus pidana mulai dari penyidikan,
                                penuntutan, hingga persidangan.</p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Memberikan nasihat atau penjelasan mengenai permasalahan hukum yang sedang dihadapi.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Menganalisis posisi hukum klien.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Memberikan solusi atau langkah hukum yang paling efisien.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Menjelaskan risiko-risiko dari setiap opsi tindakan.</span>
                                </li>
                            </ul>
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Konsultasi Hukum Secara Online</h3>
                            <p class="text-gray-600 mb-4">Kami menyediakan layanan konsultasi hukum secara online untuk kenyamanan Anda. Dengan teknologi modern, Anda dapat berkonsultasi dengan tim kami dari mana saja tanpa harus mengunjungi kantor kami. Ini adalah solusi praktis untuk mendapatkan nasihat hukum yang Anda butuhkan.</p>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                        <div class="h-48 overflow-hidden">
                            <img src={{ asset('images/tentangkami.png') }}
                            alt="icon"
                            class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Jasa Litigasi  (Penyelesaian di Pengadilan)</h3>
                            <p class="text-gray-600 mb-4">Mewakili dan membela kepentingan klien dalam proses persidangan:</p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Hukum Pidana: Mendampingi saksi, tersangka, atau terdakwa mulai dari kepolisian hingga persidangan.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Hukum Perdata: Menangani gugatan wanprestasi (ingkar janji) atau perbuatan melawan hukum.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Hukum Keluarga: Mengurus perceraian, hak asuh anak, dan waris.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>PTUN: Menggugat keputusan pejabat tata usaha negara yang merugikan.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                        <div class="h-48 overflow-hidden">
                            <img src={{ asset('images/tentangkami.png') }}
                            alt="icon"
                            class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Jasa Non-Litigasi (Layanan di Luar Pengadilan)</h3>
                            <p class="text-gray-600 mb-4">Penyelesaian masalah tanpa melalui proses persidangan formal:</p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Negosiasi: Menjadi penengah untuk mencapai kesepakatan damai antar pihak yang bersengketa.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Mediasi & Arbitrase: Mewakili klien dalam forum alternatif penyelesaian sengketa.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Somasi: Menyusun dan mengirimkan surat teguran hukum kepada pihak lawan.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                        <div class="h-48 overflow-hidden">
                            <img src={{ asset('images/tentangkami.png') }}
                            alt="icon"
                            class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Pendampingan dan Pemeriksaan Hukum (Corporate & Commercial)</h3>
                            <p class="text-gray-600 mb-4">Layanan yang biasanya digunakan oleh perusahaan atau pelaku bisnis:</p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Legal Audit/Due Diligence: Memeriksa kepatuhan hukum suatu perusahaan secara menyeluruh.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Legal Opinion: Memberikan pendapat hukum tertulis sebagai dasar pengambilan kebijakan bisnis.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Contract Drafting: Menyusun, meninjau, dan merevisi kontrak atau perjanjian bisnis.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Service 5 -->
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                        <div class="h-48 overflow-hidden">
                            <img src={{ asset('images/tentangkami.png') }}
     alt="icon"
     class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Pengurusan Perizinan dan Administrasi</h3>
                            <p class="text-gray-600 mb-4">Membantu klien dalam urusan birokrasi yang memiliki aspek hukum:</p>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Pendaftaran merek atau Hak Kekayaan Intelektual (HKI).</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Pengurusan izin usaha khusus (seperti Izin Pertambangan atau Izin Ekspor).</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Pendirian badan hukum (PT, Yayasan, atau Firma).</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                        <div class="h-48 overflow-hidden">
                            <img src={{ asset('images/tentangkami.png') }}
     alt="icon"
     class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Memberikan bantuan hukum secara cuma-cuma (Pro Bono)</h3>
                            <ul class="text-gray-600 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-blue-600 mt-1 mr-2"></i>
                                    <span>Bagi masyarakat yang tidak mampu sebagai bagian dari pengabdian profesi advocate.</span>
                                </li>
                            </ul>
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
                        <p class="text-gray-600 italic mb-6">"Tri Sulasmono, S.H. & Partner sangat profesional dalam
                            menangani
                            kasus bisnis saya. Mereka memberikan solusi yang tepat dan efisien. Hasilnya sangat memuaskan
                            saya dan para pemegang saham."</p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-blue-900">Budi Santoso</h4>
                                <p class="text-gray-500 text-sm">Direktur PT</p>
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
                        <p class="text-gray-600 italic mb-6">"Saya sangat berterima kasih kepada Tri Sulasmono, S.H. &
                            Partner yang
                            telah membantu saya menyelesaikan kasus perceraian, hak asuh anak, dan waris dengan hasil yang
                            adil untuk kedua belah
                            pihak."</p>
                        <div class="flex items-center mt-4">
                            <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-blue-900">Dewi Lestari</h4>
                                <p class="text-gray-500 text-sm">Dokter Umum</p>
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
                            Tri Sulasmono, S.H. & Partner mampu membuktikan hak-hak saya dengan argumentasi hukum
                            yang kuat."
                        </p>
                        <div class="flex items-center mt-4">
                            <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-blue-900">Andi Wijaya</h4>
                                <p class="text-gray-500 text-sm">Karyawan Swasta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Blog --}}
        <section class="bg-blue-50 py-20">
            <div class="container mx-auto px-6">

                <!-- Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Blog</h2>
                    <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                        <div class="w-full h-40 flex items-center justify-center text-5xl">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f"
                                alt="Hukum Bisnis - Pendirian PT" class="w-full h-40 object-cover">
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                            <div class="flex items-center gap-3 mb-3 flex-wrap">
                                <span
                                    class="text-xs font-semibold uppercase tracking-wide text-blue-700 bg-blue-100 px-3 py-1 rounded-full">Hukum
                                    Bisnis</span>
                                <span class="text-gray-400 text-xs flex items-center gap-1">
                                    <i class="far fa-calendar-alt"></i> 14 April 2025
                                </span>
                            </div>
                            <h3 class="font-bold text-blue-900 text-lg leading-snug mb-3">
                                Cara Mendirikan PT yang Benar Sesuai Hukum Indonesia
                            </h3>
                            <p class="text-gray-600 italic mb-4 flex-1">
                                "Mendirikan perusahaan bukan hanya soal modal dan ide — ada serangkaian prosedur hukum yang
                                wajib dipenuhi agar bisnis Anda berjalan aman dan terlindungi secara legal."
                            </p>
                            <div class="flex items-center gap-4 text-gray-400 text-xs mb-4">
                                <span class="flex items-center gap-1"><i class="far fa-eye text-blue-500"></i> 3.241
                                    pembaca</span>
                                <span class="flex items-center gap-1"><i class="far fa-comment text-blue-500"></i> 18
                                    komentar</span>
                            </div>
                            <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-blue-900 text-sm">Tri Sulasmono, S.H.</h4>
                                        <p class="text-gray-500 text-xs">Advocate</p>
                                    </div>
                                </div>
                                <a href="#"
                                    class="text-blue-600 text-sm font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                                    Baca <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                        <div class="w-full h-40 flex items-center justify-center text-5xl">
                            <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300" alt="Hak Asuh Anak"
                                class="w-full h-40 object-cover">
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                            <div class="flex items-center gap-3 mb-3 flex-wrap">
                                <span
                                    class="text-xs font-semibold uppercase tracking-wide text-blue-700 bg-blue-100 px-3 py-1 rounded-full">Hukum
                                    Keluarga</span>
                                <span class="text-gray-400 text-xs flex items-center gap-1">
                                    <i class="far fa-calendar-alt"></i> 7 April 2025
                                </span>
                            </div>
                            <h3 class="font-bold text-blue-900 text-lg leading-snug mb-3">
                                Hak Asuh Anak Pasca Perceraian: Apa yang Perlu Anda Ketahui?
                            </h3>
                            <p class="text-gray-600 italic mb-4 flex-1">
                                "Proses perceraian kerap diiringi pertanyaan mendasar: siapa yang berhak mengasuh anak?
                                Artikel ini membahas dasar hukum dan faktor penentu keputusan pengadilan."
                            </p>
                            <div class="flex items-center gap-4 text-gray-400 text-xs mb-4">
                                <span class="flex items-center gap-1"><i class="far fa-eye text-blue-500"></i> 5.870
                                    pembaca</span>
                                <span class="flex items-center gap-1"><i class="far fa-comment text-blue-500"></i> 34
                                    komentar</span>
                            </div>
                            <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-blue-900 text-sm">Tri Sulasmono, S.H.</h4>
                                        <p class="text-gray-500 text-xs">Advocate</p>
                                    </div>
                                </div>
                                <a href="#"
                                    class="text-blue-600 text-sm font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                                    Baca <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                        <div class="w-full h-40 flex items-center justify-center text-5xl">
                            <img src="https://images.unsplash.com/photo-1589391886645-d51941baf7fb" alt="Hukum Pidana"
                                class="w-full h-40 object-cover">
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                            <div class="flex items-center gap-3 mb-3 flex-wrap">
                                <span
                                    class="text-xs font-semibold uppercase tracking-wide text-blue-700 bg-blue-100 px-3 py-1 rounded-full">Hukum
                                    Pidana</span>
                                <span class="text-gray-400 text-xs flex items-center gap-1">
                                    <i class="far fa-calendar-alt"></i> 1 April 2025
                                </span>
                            </div>
                            <h3 class="font-bold text-blue-900 text-lg leading-snug mb-3">
                                Memahami Hak Tersangka dalam Proses Penyidikan Pidana
                            </h3>
                            <p class="text-gray-600 italic mb-4 flex-1">
                                "Setiap warga negara memiliki hak-hak fundamental saat berhadapan dengan proses hukum
                                pidana. Kenali hak Anda sebelum terlambat."
                            </p>
                            <div class="flex items-center gap-4 text-gray-400 text-xs mb-4">
                                <span class="flex items-center gap-1"><i class="far fa-eye text-blue-500"></i> 2.990
                                    pembaca</span>
                                <span class="flex items-center gap-1"><i class="far fa-comment text-blue-500"></i> 12
                                    komentar</span>
                            </div>
                            <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-blue-900 text-sm">Tri Sulasmono, S.H.</h4>
                                        <p class="text-gray-500 text-xs">Advocate</p>
                                    </div>
                                </div>
                                <a href="#"
                                    class="text-blue-600 text-sm font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                                    Baca <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div><!-- /grid -->
            </div><!-- /container -->
        </section>
        <!-- End Blog Section -->


        <!-- Partners Section -->
        <section class="py-12 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h3 class="text-xl text-gray-600">Mitra organisasi advokat kami:</h3>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
                    <img src="{{ asset('images/peradi.png') }}" alt="PERADI"
                        class="h-12 md:h-16 opacity-70 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('images/ikadin.png') }}" alt="Kemenkumham"
                        class="h-12 md:h-16 opacity-70 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('images/kai.png') }}" alt="LBH"
                        class="h-12 md:h-16 opacity-70 hover:opacity-100 transition duration-300">
                    <img src="{{ asset('images/peradi2.jpeg') }}" alt="peradi"
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
                        <form onsubmit="return sendEmail(event)" class="bg-white p-8 rounded-lg shadow-lg">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                                <input name="name" type="text" id="name"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input name="email" type="email" id="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                                <input name="phone" type="tel" id="phone"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="service" class="block text-gray-700 font-medium mb-2">Jenis Layanan</label>
                                <select name="service" id="service"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Pilih Layanan</option>
                                    <option value="Hukum Pidana">Hukum Pidana</option>
                                    <option value="Hukum Perdata">Hukum Perdata</option>
                                    <option value="Hukum Bisnis">Hukum Bisnis</option>
                                    <option value="Hukum Keluarga">Hukum Keluarga</option>
                                    <option value="Hukum Properti">Hukum Properti</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                                <textarea name="message" id="message" rows="4"
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
                                        <p class="text-gray-600">Dusun Krajan RT.001 RW.009 Desa Dadapan Kecamatan Kabat
                                            Kabupaten Banyuwangi Provinsi Jawa Timur Indonesia Kode Pos 68461</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <i class="fas fa-phone-alt text-blue-600 text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-blue-900 mb-1">Telepon</h4>
                                        <p class="text-gray-600">+62 859-1069-53875 (24 Jam)</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <i class="fas fa-envelope text-blue-600 text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-blue-900 mb-1">Email</h4>
                                        <p class="text-gray-600">trisulasmono@gmail.com
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                                        <i class="fas fa-clock text-blue-600 text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-blue-900 mb-1">Jam Operasional</h4>
                                        <p class="text-gray-600">Senin - Sabtu: Janji Temu <br> Minggu: Libur</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <h4 class="font-bol d text-blue-900 mb-4">Ikuti Kami</h4>
                                <div class="flex space-x-4">
                                    <a href="https://www.facebook.com/share/1CQjGcxujy/"
                                        class="bg-blue-100 text-blue-600 p-3 rounded-full hover:bg-blue-200 transition duration-300">
                                        <i class="fab fa-facebook-f"></i>
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
            const btn = document.querySelector(".mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });

            const counters = document.querySelectorAll('.count-up');
            const speed = 200;

            function animateCounters() {
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-count');
                    const prefix = counter.getAttribute('data-prefix') || '';
                    const suffix = counter.getAttribute('data-suffix') || '';
                    const currentText = counter.innerText.replace(/\D/g, '');
                    const count = parseInt(currentText) || 0;
                    const increment = target / speed;

                    if (count < target) {
                        counter.innerText = prefix + Math.ceil(count + increment) + suffix;
                        setTimeout(animateCounters, 1);
                    } else {
                        counter.innerText = prefix + target + suffix;
                    }
                });
            }

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

                        if (!menu.classList.contains('hidden')) {
                            menu.classList.add('hidden');
                        }
                    }
                });
            });
        </script>
        <script>
            function sendEmail(event) {
                event.preventDefault();

                const name = document.querySelector('#name').value;
                const email = document.querySelector('#email').value;
                const phone = document.querySelector('#phone').value;
                const service = document.querySelector('#service').value;
                const message = document.querySelector('#message').value;

                const subject = `Permintaan Layanan: ${service}`;
                const body = `
            Nama: ${name}
            Email: ${email}
            No. HP: ${phone}
            Jenis Layanan: ${service}

            Pesan:
            ${message}
            `.trim();

                const mailtoLink =
                    `https://mail.google.com/mail/?view=cm&to=trisulasmono@gmail.com&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

                window.open(mailtoLink, '_blank');
                return false;
            }
        </script>
    </body>
@endsection
