<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="canonical" href="https://demo.themesberg.com/landwind/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Jasa Bantuan Hukum</title>

    <!-- Meta SEO -->
    <meta name="title" content="Beranda - Jasa Bantuan Hukum">
    <meta name="description" content="Kami melayani secar professional dan Cepat">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Themesberg">

    <!-- Social media share -->
    <meta property="og:title" content=Beranda - Jasa Bantuan Hukum>
    <meta property="og:site_name" content=Themesberg>
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:description" content="Jasa bantuan hukum terpercaya dan profesional.">
    <meta property="og:type" content="website">
    <meta property="og:image" content={{ asset('images/Logo.jpg') }}>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@themesberg" />
    <meta name="twitter:creator" content="@themesberg" />

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/Logo.jpg') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/output.css'])
</head>

<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Konten halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Icon WA --}}
    @include('partials.whatapps')

    {{-- Footer --}}
    @include('partials.footer')

</body>

</html>
