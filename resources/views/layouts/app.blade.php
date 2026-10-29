<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
        <title>@yield('title', config('app.name'))</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="px-[15px] lg:px-[49px]">
        <x-header />

        @yield('content')

        <x-footer />

        <aside class="fixed bottom-[15px] left-[15px] z-50 w-[calc(100%-30px)] max-w-[390px] border border-[#1f1e1d] bg-[#ebe9e6] p-[18px] text-[14px] leading-[1.25] shadow-[0_4px_20px_rgba(31,30,29,0.12)] md:bottom-[24px] md:left-[24px] md:p-[22px]" data-cookie-notice aria-label="Уведомление об использовании cookie">
            <p>Сайт использует файлы cookie и сервисы веб-аналитики. Пользуясь сайтом, вы принимаете <a class="underline underline-offset-2" href="{{ route('privacy-policy') }}">Политику конфиденциальности</a>.</p>
            <button class="mt-[16px] border border-[#1f1e1d] px-[18px] py-[9px] text-[13px] uppercase transition-colors hover:bg-[#1f1e1d] hover:text-[#ebe9e6]" type="button" data-cookie-accept>Принимаю</button>
        </aside>

        @stack('scripts')
    </body>
</html>
