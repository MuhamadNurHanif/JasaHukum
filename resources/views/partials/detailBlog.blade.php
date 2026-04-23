@extends('app')

@section('content')
    <style>
        .blog-hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        }

        .blog-content {
            line-height: 1.8;
        }

        .blog-content p {
            margin-bottom: 1.5rem;
        }

        .blog-content h2 {
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .blog-meta {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
        }
    </style>

    <body class="font-sans">
        <!-- Blog Detail Hero Section -->
        <div class="blog-hero text-white py-12 md:py-16">
            <div class="container mx-auto px-4 md:px-6">
                <div class="max-w-4xl mx-auto">
                    <a href="{{ url('/') }}"
                        class="inline-flex items-center text-blue-200 hover:text-white mb-6 transition duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Kembali ke Beranda
                    </a>
                    <span
                        class="inline-block bg-blue-500 bg-opacity-50 text-white px-4 py-1 rounded-full text-sm font-semibold mb-4">
                        {{ $category ?? 'Hukum' }}
                    </span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">{{ $title ?? 'Judul Blog' }}
                    </h1>

                    <div class="blog-meta rounded-lg p-4 text-blue-900">
                        <div class="flex flex-wrap items-center gap-4 text-sm">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span>{{ $date ?? date('d F Y') }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>Tri Sulasmono, S.H & Partner</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                                <span>{{ $views ?? '0' }} pembaca</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Content -->
        <div class="py-12 md:py-16">
            <div class="container mx-auto px-4 md:px-6">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10">
                        @if (isset($image))
                            <div class="mb-8">
                                <img src="{{ $image }}" alt="{{ $title ?? 'Blog Image' }}"
                                    class="w-full h-64 md:h-96 object-cover rounded-xl">
                            </div>
                        @endif

                        <div class="blog-content text-gray-700">
                            @if ($slug == 'cara-mendirikan-pt-yang-benar-sesuai-hukum-indonesia')
                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Pendahuluan</h2>
                                <p class="text-lg">
                                    Mendirikan perusahaan bukan hanya soal modal dan ide  ada serangkaian prosedur hukum
                                    yang wajib dipenuhi agar bisnis Klien berjalan aman dan terlindungi secara legal. Di
                                    Indonesia, pendirian PT (Perseroan Terbatas) diatur dalam Undang-Undang No. 40 Tahun
                                    2007 tentang Perseroan Terbatas.
                                </p>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Syarat Pendirian PT</h2>
                                <p>Sebelum memulai proses pendirian PT, Anda harus mempersiapkan beberapa syarat utama:</p>
                                <ul class="list-disc pl-6 mb-6 space-y-2">
                                    <li><strong>Nama PT:</strong> Minimal 3 suku kata, tidak boleh sama dengan PT lain yang
                                        sudah terdaftar</li>
                                    <li><strong>Modal Dasar:</strong> Minimal Rp 50 juta (untuk PT Perdagangan) atau sesuai
                                        ketentuan lain</li>
                                    <li><strong>Karyawan:</strong> Minimal 2 orang (1 Direktur dan 1 Komisaris)</li>
                                    <li><strong>Domisili:</strong> Alamat lengkap tempat usaha akan berdiri</li>
                                    <li><strong>KTP & NPWP:</strong> Dokumen identitas semua pendiri</li>
                                </ul>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Prosedur Pendirian PT</h2>
                                <p>Proses pendirian PT melibatkan beberapa tahapan yang harus dilalui secara berurutan:</p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">1. Perjanjian Pendirian</h3>
                                <p>Membuat akta pendirian PT di hadapan notaris yang akan memuat anggaran dasar PT. Dokumen
                                    ini sangat penting sebagai dasar legalitas perusahaan.</p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">2. Pengesahan Menkumham</h3>
                                <p>Mengajukan permohonan pengesahan badan hukum PT kepada Menteri Hukum dan Hak Asasi
                                    Manusia. Proses ini biasanya memakan waktu 3-7 hari kerja.</p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">3. NPWP Perusahaan</h3>
                                <p>Mendaftarkan NPWP (Nomor Pokok Wajib Pajak) perusahaan di Kantor Pelayanan Pajak
                                    setempat.</p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">4. Izin Usaha</h3>
                                <p>Mengurus izin usaha sesuai dengan bidang usaha yang dijalani melalui OSS (Online Single
                                    Submission).</p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">5. Registrasi Perusahaan</h3>
                                <p>Mendaftarkan perusahaan ke sistem administrasi badan hukum dan mendapatkan TDP (Tanda
                                    Daftar Perusahaan).</p>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Kesimpulan</h2>
                                <p>Proses pendirian PT memang terlihat rumit, namun dengan pemahaman yang benar dan bantuan
                                    profesional, Anda dapat menyelesaikannya dengan baik. Konsultasikan dengan ahli hukum
                                    untuk memastikan semua proses berjalan sesuai dengan ketentuan yang berlaku.</p>
                            @elseif($slug == 'hak-asuh-anak-pasca-perceraian')
                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Pendahuluan</h2>
                                <p class="text-lg">
                                    Proses perceraian kerap diiringi pertanyaan mendasar: siapa yang berhak mengasuh anak?
                                    Artikel ini membahas dasar hukum dan faktor penentu keputusan pengadilan dalam
                                    menentukan hak asuh anak pasca perceraian di Indonesia.
                                </p>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Dasar Hukum Hak Asuh Anak</h2>
                                <p>Hak asuh anak di Indonesia diatur dalam beberapa peraturan perundang-undangan:</p>
                                <ul class="list-disc pl-6 mb-6 space-y-2">
                                    <li><strong>Undang-Undang No. 1 Tahun 1974:</strong> Tentang Perkawinan</li>
                                    <li><strong>Undang-Undang No. 35 Tahun 2014:</strong> Tentang Perlindungan Anak</li>
                                    <li><strong>Kompilasi Hukum Islam (KHI):</strong> Untuk pasangan Muslim</li>
                                </ul>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Prinsip Utama Hak Asuh</h2>
                                <p>Dalam menentukan hak asuh anak, pengadilan selalu mempertimbangkan prinsip
                                    <strong>kepentingan terbaik anak</strong> (best interests of the child). Ini berarti
                                    keputusan selalu mengutamakan kesejahteraan dan perkembangan anak.
                                </p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">Faktor-Faktor Penentu</h3>
                                <ul class="list-disc pl-6 mb-6 space-y-2">
                                    <li><strong>Usia Anak:</strong> Anak di bawah 5 tahun biasanya lebih disarankan bersama
                                        ibu</li>
                                    <li><strong>Kesejahteraan:</strong> Kemampuan finansial dan emosional orang tua</li>
                                    <li><strong>Relasi Emosional:</strong> Kedekatan anak dengan masing-masing orang tua
                                    </li>
                                    <li><strong>Lingkungan:</strong> Kondisi tempat tinggal dan lingkungan sosial</li>
                                    <li><strong>Pilihan Anak:</strong> Jika anak sudah cukup dewasa, pendapatnya
                                        dipertimbangkan</li>
                                </ul>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Hak Asuh untuk Anak di Bawah
                                    12 Tahun</h2>
                                <p>Berdasarkan Pasal 105 KHI, untuk perceraian pasangan Muslim:</p>
                                <ul class="list-disc pl-6 mb-6 space-y-2">
                                    <li>Anak yang belum mumayyiz (di bawah 12 tahun) menjadi hak penjagaan ibu</li>
                                    <li>Anak yang sudah mumayyiz dapat memilih untuk tinggal dengan ayah atau ibu</li>
                                </ul>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Kunjungan dan Komunikasi</h2>
                                <p>Orang tua yang tidak mendapatkan hak asuh tetap memiliki hak untuk:</p>
                                <ul class="list-disc pl-6 mb-6 space-y-2">
                                    <li>Berkunjung secara teratur</li>
                                    <li>Berkomunikasi dengan anak</li>
                                    <li>Mendapatkan informasi tentang perkembangan anak</li>
                                </ul>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Kesimpulan</h2>
                                <p>Hak asuh anak adalah isu sensitif yang memerlukan penanganan penuh kehati-hatian.
                                    Konsultasikan dengan pengacara keluarga untuk memastikan hak-hak anak dan orang tua
                                    terlindungi secara optimal.</p>
                            @elseif($slug == 'memahami-hak-tersangka-dalam-proses-penyidikan-pidana')
                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Pendahuluan</h2>
                                <p class="text-lg">
                                    Setiap warga negara memiliki hak-hak fundamental saat berhadapan dengan proses hukum
                                    pidana. Kenali hak Anda sebelum terlambat. Memahami hak-hak ini adalah langkah penting
                                    untuk melindungi diri dalam sistem peradilan pidana Indonesia.
                                </p>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Hak-Hak Tersangka</h2>
                                <p>Sebagai tersangka, Anda memiliki hak-hak yang dijamin oleh undang-undang, termasuk:</p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">1. Hak untuk Diam (Right to Silence)</h3>
                                <p>Setiap tersangka berhak untuk tidak memberikan keterangan atau menjawab pertanyaan
                                    penyidik. Hak ini diatur dalam KUHAP Pasal 52 ayat (1) dan merupakan prinsip penting
                                    untuk melindungi diri dari incriminating statements.</p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">2. Hak Mendapatkan Bantuan Advokat</h3>
                                <p>Setiap tersangka berhak mendapatkan bantuan hukum dari satu orang atau lebih penasihat
                                    hukum selama pada setiap tingkat pemeriksaan (KUHAP Pasal 54). Untuk tersangka yang
                                    tidak mampu, negara akan memberikan bantuan hukum.</p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">3. Hak Diberitahu</h3>
                                <p>Tersangka berhak diberitahu dengan jelas tentang apa yang disangkakan kepadanya dalam
                                    bahasa yang dimengerti (KUHAP Pasal 52 ayat (1) huruf a).</p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">4. Hak Menghubungi Orang Lain</h3>
                                <p>Tersangka berhak menghubungi dan menerima kunjungan dari keluarga, penasihat hukum, atau
                                    orang lain untuk kepentingan pembelaan (KUHAP Pasal 56).</p>

                                <h3 class="text-xl font-bold text-blue-800 mb-3">5. Hak Kesehatan</h3>
                                <p>Tersangka berhak mendapatkan pelayanan kesehatan dan keperluan rohani lainnya selama
                                    dalam tahanan (KUHAP Pasal 52 ayat (1) huruf f).</p>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Prosedur Penahanan</h2>
                                <p>Penahanan adalah tindakan penahan seseorang oleh penyidik berdasarkan undang-undang.
                                    Ketentuan penahanan:</p>
                                <ul class="list-disc pl-6 mb-6 space-y-2">
                                    <li><strong>Masa Penahanan:</strong> Maksimal 20 hari untuk penyidik tingkat pertama
                                    </li>
                                    <li><strong>Perpanjangan:</strong> Dapat diperpanjang maksimal 40 hari</li>
                                    <li><strong>Wajib Ditetapkan:</strong> Penahanan harus ditetapkan dengan surat perintah
                                    </li>
                                    <li><strong>Hak Kalapas:</strong> Kepala rutan harus memberitahu penahanan kepada
                                        keluarga</li>
                                </ul>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Penyadapan dan Pemeriksaan
                                </h2>
                                <p>Penyadapan hanya dapat dilakukan dengan izin tertulis dari Ketua Pengadilan Negeri
                                    setempat untuk kepentingan penyidikan. Setiap pemeriksaan harus dilakukan sesuai dengan
                                    prosedur yang diatur dalam KUHAP.</p>

                                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Kesimpulan</h2>
                                <p>Memahami hak Anda sebagai tersangka adalah kunci untuk melindungi diri dalam proses hukum
                                    pidana. Jika Anda menghadapi masalah hukum, segera konsultasikan dengan advokat
                                    berpengalaman untuk memastikan hak-hak Anda terlindungi.</p>
                            @else
                                <p class="text-lg">Konten blog sedang dalam proses pembuatan. Silakan kembali lagi nanti.
                                </p>
                            @endif
                        </div>

                        <!-- Author Box -->
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <div class="flex items-start">
                                <div
                                    class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-blue-900 text-lg">Tri Sulasmono, S.H & Partner.</h4>
                                    <p class="text-gray-600 mb-2">Advokat</p>
                                </div>
                            </div>
                        </div>

                        <!-- Call to Action -->
                        <div class="mt-8 bg-blue-50 rounded-xl p-6 text-center">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Butuh Konsultasi Hukum?</h3>
                            <p class="text-gray-600 mb-4">Tim kami siap membantu Klien dengan masalah hukum yang Anda
                                hadapi.</p>
                            <a href="https://wa.me/62859106953875" target="_blank"
                                class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">
                                <i class="fab fa-whatsapp mr-2"></i>Konsultasi Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
