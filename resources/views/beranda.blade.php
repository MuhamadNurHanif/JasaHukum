@extends('app')

@section('content')
    <style>
        @keyframes slideReset {
            0% {
                transform: translateX(100%);
                opacity: 1;
            }

            80% {
                opacity: 1;
            }

            100% {
                transform: translateX(-100%);
                opacity: 0;
            }
        }

        .animate-slide-reset {
            animation: slideReset 15s linear infinite;
        }
    </style>
    <main>
        {{-- Hero Section --}}
        <section class="animate-fade-in bg-white dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28"
                data-aos="zoom-out-down" data-aos-duration="1000" data-aos-delay="100">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-black"
                        data-aos="fade-up" data-aos-delay="200">
                        Profesional, Responsif,<br>& Siap Membantu.</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600"
                        data-aos="fade-up" data-aos-delay="300">Kami adalah penyedia layanan bantuan hukum yang siap
                        membantu Anda dalam menghadapi berbagai masalah hukum. Dengan tim pengacara yang berpengalaman dan
                        profesional, kami memberikan solusi hukum yang dapat diandalkan untuk setiap permasalahan yang Anda
                        hadapi. <a>
                    </p>
                    <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-1" data-aos="fade-up" data-aos-delay="400">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=trisulasmono@gmail.com"
                            class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-blue-500 hover:text-white focus:ring-4 focus:ring-blue-500 dark:text-white dark:border-gray-700 dark:hover:bg-blue-500 dark:focus:ring-blue-500 animate-pulse">
                            <svg class="w-4 h-4 mr-2 text-gray-800 dark:text-gray-400" viewBox="0 0 512 512"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M502.3 190.8c-3.9-3.1-109.1-85.6-145.6-114.4-5.4-4.2-11.8-6.4-18.4-6.4H173.7c-6.6 0-13 2.2-18.4 6.4-36.5 28.8-141.7 111.3-145.6 114.4C3.6 193.9 0 198.7 0 204v204c0 22.1 17.9 40 40 40h432c22.1 0 40-17.9 40-40V204c0-5.3-3.6-10.1-9.7-13.2zM464 408c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V232.3l192 151.7c5.6 4.4 13.2 4.4 18.8 0l192-151.7V408zM256 320L48.7 160h414.6L256 320z" />
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-8 lg:mt-0 col-span-full lg:col-span-5"
                    data-aos="zoom-out-down" data-aos-delay="500">
                    <div
                        class="border-2 border-gray-300 p-4 rounded-lg w-full max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-3xl xl:max-w-4xl">
                        <img src="{{ asset('images/beranda.jpeg') }}" alt="Gambar tidak ada"
                            class="w-full h-auto rounded-lg object-cover">
                    </div>
                </div>
            </div>
        </section>

        {{-- Slider Image --}}
        <section class="bg-white dark:bg-gray-900 py-8 overflow-hidden relative">
            <div class="w-full h-24 relative overflow-hidden">
                <div class="absolute animate-slide-reset flex items-center gap-12">
                    <img src="{{ asset('images/peradi.png') }}" class="w-40 h-20 object-contain" />
                    <img src="{{ asset('images/ikadin.png') }}" class="w-24 h-20 object-contain" />
                    <img src="{{ asset('images/kai.png') }}" class="w-20 h-16 object-contain" />
                </div>
            </div>
        </section>

        {{-- testimonial --}}
        <section class="bg-gray-50 dark:bg-gray-800">
            <div class="max-w-screen-xl px-4 py-12 mx-auto text-center lg:py-24 lg:px-6" data-aos="fade-right"
                data-aos-offset="300" data-aos-easing="ease-in-sine">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                            fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-xl font-sans text-gray-900 md:text-2xl dark:text-white">
                            "Pendampingan hukum yang kami berikan bertujuan untuk melindungi dan memperjuangkan hak-hak
                            klien secara maksimal. Kami hadir sebagai solusi dalam setiap permasalahan hukum yang Anda
                            hadapi."
                        </p>
                    </blockquote>
                    <figcaption
                        class="flex flex-col sm:flex-row items-center justify-center mt-6 space-y-2 sm:space-y-0 sm:space-x-6">
                        <div class="flex items-center space-x-3">
                            <p class="text-lg font-sans text-gray-700 dark:text-white">
                                <span>Klien yang sudah ditangani: 1200+</span><br>
                                <span class="ml-4">Partner: 100+</span>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </section>

        {{-- Information --}}
        <section class="bg-white dark:bg-gray-900">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">

                {{-- Judul dan Paragraf --}}
                <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12" data-aos="fade-up" data-aos-duration="3000">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Informasi</h2>
                    <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                        Kami hadir untuk memberikan solusi hukum yang menyeluruh dan terpercaya bagi Anda. Dengan tim
                        advokat berpengalaman dan berdedikasi, kami siap mendampingi Anda dalam berbagai permasalahan hukum
                        baik secara litigasi (pengadilan) maupun non-litigasi (di luar pengadilan).
                    </p>
                </div>

                {{-- Card --}}
                <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                    <!-- card 1 -->
                    <div class="max-w-md mx-auto bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden dark:bg-gray-800 dark:border-gray-700"
                        data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

                        <!-- Gambar -->
                        <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <img class="w-full h-48 object-cover" src="{{ asset('images/ts.jpg') }}" alt="Gambar Artikel">
                        </div>

                        <!-- Konten -->
                        <div class="p-6" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="500">

                            <!-- Judul -->
                            <h2 class="text-xl text-gray-900 font-medium leading-8 mb-5">
                                Sambut Tahun Baru 2023, Ketua BAI DPD Jatim Ingin Anggota Lebih Banyak Berpetualang
                            </h2>

                            <!-- Info Admin dan Tanggal -->
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                                <!-- Icon User -->
                                <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0a5 5 0 00-5 5v1a5 5 0 0010 0V5a5 5 0 00-5-5zm-7 16a7 7 0 0114 0v1H3v-1z" />
                                </svg>
                                <span>Admin</span>
                                <span class="mx-2">•</span>
                                <!-- Icon Calendar -->
                                <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 2a1 1 0 012 0v1h4V2a1 1 0 112 0v1h2a2 2 0 012 2v1H2V5a2 2 0 012-2h2V2zm12 5H2v9a2 2 0 002 2h12a2 2 0 002-2V7z" />
                                </svg>
                                <span>13 April 2025</span>
                            </div>

                            <!-- Ringkasan Konten -->
                            <p class="text-gray-700 dark:text-gray-300 mb-5" data-aos="fade-zoom-in"
                                data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                                Badan Advokasi Indonesia, Jatim - Ketua BAI DPD Jatim Tri Sulasmono menyambut tahun baru
                                2023 dengan harapan besar sebagai salah seorang yang berprofesi sebagai penegak hukum di
                                Lembaga Bantuan Hukum, Badan Advokasi Indonesia.
                            </p>

                            <!-- Tombol -->
                            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <a href="{{ route('detail') }}"
                                    class="inline-block px-5 py-2.5 text-sm font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 dark:focus:ring-purple-800 transition">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-md mx-auto bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden dark:bg-gray-800 dark:border-gray-700"
                        data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

                        <!-- Gambar -->
                        <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <img class="w-full h-48 object-cover" src="{{ asset('images/ts.jpg') }}"
                                alt="Gambar Artikel">
                        </div>

                        <!-- Konten -->
                        <div class="p-6" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="500">

                            <!-- Judul -->
                            <h2 class="text-xl text-gray-900 font-medium leading-8 mb-5">
                                Sambut Tahun Baru 2023, Ketua BAI DPD Jatim Ingin Anggota Lebih Banyak Berpetualang
                            </h2>

                            <!-- Info Admin dan Tanggal -->
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                                <!-- Icon User -->
                                <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0a5 5 0 00-5 5v1a5 5 0 0010 0V5a5 5 0 00-5-5zm-7 16a7 7 0 0114 0v1H3v-1z" />
                                </svg>
                                <span>Admin</span>
                                <span class="mx-2">•</span>
                                <!-- Icon Calendar -->
                                <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 2a1 1 0 012 0v1h4V2a1 1 0 112 0v1h2a2 2 0 012 2v1H2V5a2 2 0 012-2h2V2zm12 5H2v9a2 2 0 002 2h12a2 2 0 002-2V7z" />
                                </svg>
                                <span>13 April 2025</span>
                            </div>

                            <!-- Ringkasan Konten -->
                            <p class="text-gray-700 dark:text-gray-300 mb-5" data-aos="fade-zoom-in"
                                data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                                Badan Advokasi Indonesia, Jatim - Ketua BAI DPD Jatim Tri Sulasmono menyambut tahun baru
                                2023 dengan harapan besar sebagai salah seorang yang berprofesi sebagai penegak hukum di
                                Lembaga Bantuan Hukum, Badan Advokasi Indonesia.
                            </p>

                            <!-- Tombol -->
                            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <a href="{{ route('detail') }}"
                                    class="inline-block px-5 py-2.5 text-sm font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 dark:focus:ring-purple-800 transition">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-md mx-auto bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden dark:bg-gray-800 dark:border-gray-700"
                        data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

                        <!-- Gambar -->
                        <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <img class="w-full h-48 object-cover" src="{{ asset('images/ts.jpg') }}"
                                alt="Gambar Artikel">
                        </div>

                        <!-- Konten -->
                        <div class="p-6" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="500">

                            <!-- Judul -->
                            <h2 class="text-xl text-gray-900 font-medium leading-8 mb-5">
                                Sambut Tahun Baru 2023, Ketua BAI DPD Jatim Ingin Anggota Lebih Banyak Berpetualang
                            </h2>

                            <!-- Info Admin dan Tanggal -->
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                                <!-- Icon User -->
                                <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0a5 5 0 00-5 5v1a5 5 0 0010 0V5a5 5 0 00-5-5zm-7 16a7 7 0 0114 0v1H3v-1z" />
                                </svg>
                                <span>Admin</span>
                                <span class="mx-2">•</span>
                                <!-- Icon Calendar -->
                                <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 2a1 1 0 012 0v1h4V2a1 1 0 112 0v1h2a2 2 0 012 2v1H2V5a2 2 0 012-2h2V2zm12 5H2v9a2 2 0 002 2h12a2 2 0 002-2V7z" />
                                </svg>
                                <span>13 April 2025</span>
                            </div>

                            <!-- Ringkasan Konten -->
                            <p class="text-gray-700 dark:text-gray-300 mb-5" data-aos="fade-zoom-in"
                                data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                                Badan Advokasi Indonesia, Jatim - Ketua BAI DPD Jatim Tri Sulasmono menyambut tahun baru
                                2023 dengan harapan besar sebagai salah seorang yang berprofesi sebagai penegak hukum di
                                Lembaga Bantuan Hukum, Badan Advokasi Indonesia.
                            </p>

                            <!-- Tombol -->
                            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <a href="{{ route('detail') }}"
                                    class="inline-block px-5 py-2.5 text-sm font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 dark:focus:ring-purple-800 transition">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
