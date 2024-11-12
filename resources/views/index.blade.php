<!DOCTYPE html>
<html lang="en" class="scroll-smooth focus:scroll-auto"> {{-- Scroll Smooth --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Dagang</title>
    {{-- Website Icon --}}
    <link rel="icon" href="{{ asset('logopink.ico') }}">
    {{-- Font Inter --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    {{-- Font Josefin Sans For Logo --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    {{-- Font Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- Icon --}}
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- Scroll Reveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- Connect TailwindCSS --}}
    @vite('resources/css/app.css')
</head>

<body class="bg-c-white font-inter w-full overflow-x-hidden">
    <x-navbar></x-navbar>
    <x-home></x-home>
    <x-about></x-about>
    <x-product></x-product>
    <x-contact></x-contact>
    <x-info></x-info>

    <script>
        ScrollReveal({
            distance: '80px',
            duration: 1000,
            delay: 400
        });

        ScrollReveal().reveal('.judul', {
            delay: 200,
            origin: 'left',
            interval: 500
        });
        ScrollReveal().reveal('.cover', {
            delay: 300,
            origin: 'right'
        });
        ScrollReveal().reveal('.btn-produk', {
            delay: 200,
            origin: 'bottom'
        });
        ScrollReveal().reveal('.sc-1', {
            delay: 200,
            origin: 'top',
            interval: 100
        });
        ScrollReveal().reveal('us li', {
            delay: 400,
            origin: 'left',
            interval: 50
        });
        ScrollReveal().reveal('.jdl', {
            delay: 200,
            origin: 'top',
            interval: 100
        });
        ScrollReveal().reveal('.ls li', {
            delay: 400,
            origin: 'left',
            interval: 50
        });
        ScrollReveal().reveal('.kategori', {
            delay: 300,
            origin: 'left',
            interval: 100
        });
        ScrollReveal().reveal('.scroller', {
            delay: 300,
            origin: 'top'
        });
        ScrollReveal().reveal('.cards1', {
            delay: 300,
            origin: 'top',
            interval: 100
        });
        ScrollReveal().reveal('.cards2', {
            delay: 300,
            origin: 'top',
            interval: 100
        });
        ScrollReveal().reveal('.cards3', {
            delay: 300,
            origin: 'top',
            interval: 100
        });
    </script>
</body>

</html>
