<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tri Sulasmono, SH & Partner' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-white text-gray-800">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Konten halaman --}}
     <main> 
      @yield('content') 
     </main> 

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>