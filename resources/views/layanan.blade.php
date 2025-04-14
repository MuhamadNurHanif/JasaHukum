@extends('app')

@section('content')
    <main class="pt-24">
        <section class="py-20 bg-gray-100 dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-extrabold text-blue-800">Jenis Layanan Hukum</h2>
                    <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 mb-6 rounded-full"></div>
                    <p class="text-lg text-gray-600 dark:text-gray-600 max-w-3xl mx-auto">
                        Kami menyediakan berbagai layanan hukum yang dirancang untuk memenuhi kebutuhan individu maupun
                        korporasi dengan pendekatan profesional dan terpercaya.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                    <!-- Card 1 -->
                    <div
                        class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-transform duration-300 transform hover:-translate-y-2">
                        <div
                            class="w-14 h-14 flex items-center justify-center bg-blue-100 text-black rounded-full text-2xl font-semibold mb-4">
                            1
                        </div>
                        <h3 class="text-2xl font-semibold text-blue-700 mb-3">Layanan Warga Negara Indonesia</h3>
                        <p class="text-gray-600 dark:text-gray-900 text-sm leading-relaxed">
                            Layanan hukum bagi perorangan atau organisasi dalam perkara perdata (keluarga, bisnis, pajak,
                            properti, dsb.) maupun pidana umum dan khusus. Kami hadir untuk mewakili kepentingan hukum Anda
                            dengan integritas.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-transform duration-300 transform hover:-translate-y-2">
                        <div
                            class="w-14 h-14 flex items-center justify-center bg-blue-100 text-black rounded-full text-2xl font-semibold mb-4">
                            2
                        </div>
                        <h3 class="text-2xl font-semibold text-blue-700 mb-3">Layanan Perusahaan</h3>
                        <p class="text-gray-600 dark:text-gray-900 text-sm leading-relaxed">
                            Menyediakan pendampingan hukum bagi entitas bisnis dalam urusan kontraktual, perpajakan,
                            ketenagakerjaan, merger, akuisisi, dan kepatuhan terhadap hukum yang berlaku.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-transform duration-300 transform hover:-translate-y-2">
                        <div
                            class="w-14 h-14 flex items-center justify-center bg-blue-100 text-black rounded-full text-2xl font-semibold mb-4">
                            3
                        </div>
                        <h3 class="text-2xl font-semibold text-blue-700 mb-3">Layanan Pro Bono</h3>
                        <p class="text-gray-600 dark:text-gray-900 text-sm leading-relaxed">
                            Komitmen kami terhadap keadilan diwujudkan dengan layanan hukum gratis untuk masyarakat kurang
                            mampu, sesuai dengan peraturan dan dokumen pendukung yang sah.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
