@php
    $nomorWa = config('app.nomor_wa', '62859106953875'); 
    $pesan = urlencode('Halo Pak Tri, saya ingin berkonsultasi terkait layanan hukum.');
@endphp

<div class="fixed bottom-6 right-6 z-50 flex items-center space-x-3 group">
    <!-- Button WA -->
    <a href="https://wa.me/{{ $nomorWa }}?text={{ $pesan }}" target="_blank"
       class="relative bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition duration-300">

        <!-- Pulse animation -->
        <span class="absolute inset-0 rounded-full bg-green-400 animate-ping opacity-50"></span>

        <!-- Icon -->
        <svg class="w-6 h-6 relative z-10" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2C6.48 2 2 6.48 2 12c0 1.93.55 3.73 1.5 5.25L2 22l4.91-1.44A9.96 9.96 0 0 0 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2Zm0 18c-1.61 0-3.13-.44-4.44-1.21l-.32-.19-2.91.85.88-2.84-.21-.33A7.94 7.94 0 0 1 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8-3.59 8-8 8Zm4.39-5.46c-.24-.12-1.41-.7-1.63-.78-.22-.08-.38-.12-.54.12-.16.24-.62.78-.76.94-.14.16-.28.18-.52.06-.24-.12-1.01-.37-1.92-1.18-.71-.63-1.18-1.4-1.32-1.64-.14-.24-.01-.37.1-.49.1-.1.24-.26.36-.39.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.54-1.3-.74-1.78-.2-.48-.4-.42-.54-.43h-.46c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2s.86 2.32.98 2.48c.12.16 1.68 2.56 4.08 3.59.57.25 1.01.4 1.36.51.57.18 1.08.15 1.49.09.45-.07 1.41-.58 1.61-1.14.2-.56.2-1.04.14-1.14-.06-.1-.22-.16-.46-.28Z"/>
        </svg>
    </a>
</div>