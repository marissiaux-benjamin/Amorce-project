<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="min-h-screen flex h-screen">
    <div class="w-1/2 h-full bg-[#fcc940] flex flex-col items-center justify-center">
        <a href="/" title="Retourner à la page précédente" class="self-start absolute top-16 left-10">
            <svg width="46" height="24" viewBox="0 0 46 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M44 13.5C44.8284 13.5 45.5 12.8284 45.5 12C45.5 11.1716 44.8284 10.5 44 10.5V13.5ZM0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.93934 10.9393ZM44 10.5H2V13.5H44V10.5Z"
                    fill="black"/>
            </svg>
        </a>
        <img src="{{ asset('images/logo-amorce.png')  }}" alt="L'Amorce, récolter, soutenir">
    </div>
    <div class="w-1/2 bg-[#E9E9E9] h-full p-32 pt-0 flex flex-col justify-center">
        {{ $slot }}
    </div>
</div>
</body>
</html>
