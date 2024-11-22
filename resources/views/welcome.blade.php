<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenue dans L'Amorce</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FCC940]">

<div class="wrapper">
    <main class="">
        <h1 class="opacity-0 absolute">
            Bienvenue dans L'Amorce
        </h1>
        <div class="flex pt-36 justify-center">
            <img src="{{ asset('images/logo-amorce.png')  }}" alt="L'Amorce, récolter, soutenir" class="w-2/3 ">
        </div>
        <div class="flex gap-x-10 justify-center">
            <x-buttons.link url_route="{{ route('login') }}" bg_color="bg-[#E9E9E9]" text="Se connecter" text_color="text-[#2E2E2E]"/>
            <x-buttons.link url_route="{{ route('register') }}" bg_color="bg-[#2E2E2E]" text="S'enregistrer" text_color="text-[#FCC940]"/>
        </div>
    </main>
</div>
</body>
</html>
