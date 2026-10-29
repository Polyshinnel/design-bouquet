@extends('layouts.app')

@section('title', 'НОВЫЙ ГОД ФЕНИКСПРЕЗЕНТ — DESIGN.BOUQUET')

@section('content')
    @php
        $galleryImages = range(1, 12);
    @endphp

    <main class="mb-[100px] pt-[20px] md:pt-[130px]">
        <h1 class="text-[32px] font-medium uppercase leading-[1.05] md:text-[70px]">Новый год Феникспрезент</h1>

        <table class="mt-[25px] w-full border-collapse border-t border-[#1f1e1d] text-[13px] uppercase leading-[1.2] md:mt-[40px] md:text-[19px]">
            <tbody class="block md:table-row-group">
                <tr class="grid grid-cols-1 md:table-row">
                    <td class="flex h-[55px] items-center border-b border-[#1f1e1d] text-left md:table-cell md:w-1/2 md:border-r">Оформление шоурума</td>
                    <td class="relative flex h-[55px] items-center border-b border-[#1f1e1d] pr-[20px] text-left md:table-cell md:w-1/2 md:pl-[20px] md:pr-[25px]">
                        <span>Россия, 2026</span>
                        <span class="absolute right-0 top-1/2 -translate-y-1/2" aria-hidden="true">•</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <picture class="mt-[10px] block md:mt-[20px]">
            <source media="(max-width: 767px)" srcset="{{ asset('images/projects/phoenix-new-year/main-mob.webp') }}">
            <img class="block h-auto w-full" src="{{ asset('images/projects/phoenix-new-year/main.webp') }}" alt="Новогоднее оформление шоурума Феникспрезент">
        </picture>

        <section class="mt-[45px] grid grid-cols-1 gap-[25px] md:mt-[100px] md:grid-cols-2 md:gap-[40px]">
            <h2 class="text-[25px] font-medium uppercase leading-[1.08] md:text-[50px]">Спектакль в четырёх действиях</h2>
            <div class="space-y-[18px] text-[15px] leading-[1.35] md:space-y-[22px] md:text-[19px]">
                <p>Для меня задача стояла не оформить шоурум, а поставить спектакль. И главной декорацией стала сама идея театра.</p>
                <p>Вместе с <a class="underline underline-offset-2" href="https://www.instagram.com/svetlanamiryuk/">@svetlanamiryuk</a> мы выстроили пространство как драматургию: вы входите — и оказываетесь в фойе. Хрустальные люстры рассыпают искры, зеркала множат пространство, подвесные украшения добавляют многослойность. Бархат глубоких красных драпировок обнимает стены, золото мерцает в отблесках гирлянд, и кажется, что вот-вот прозвенит третий звонок. Театральный занавес приподнят, и за ним — истории.</p>
                <p>Дальше — буфет. Зона, где праздник становится вкусом и светом. Нарядные ели выстроились как приглашённые гости: банты, свечи, винтажные открытки, гирлянды из баранок — каждая деталь как реквизит из старой доброй сказки.</p>
                <p>Потом — диско. Здесь тон меняется: зеркальные шары, разноцветные игрушки, игривое настроение. Праздник сбрасывает бархат и надевает блёстки.</p>
                <p>А в финале — сказочный лес. Крупномерные деревья, светящиеся аватары, тишина, в которой слышно, как сияет хвоя. Вы прошли сквозь театр и оказались внутри чуда.</p>
                <p>В каждой зоне — своя новогодняя ель, своя тема, свой характер. И повсюду — коллекции украшений, вписанные в композицию так, что их хочется рассматривать, примерять на собственную ёлку. Посетители собирают идеи для своего праздника, как билеты на будущие спектакли.</p>
                <p>Это была концепция театра: не декор, а маршрут. Не оформление, а переживание. Пространство, где Новый год играет главную роль — и приглашает вас на сцену.</p>
                <p>Но за кулисами — отдельная история. Сроки были сжаты до предела. Заказчики знали, кому доверяют проект, — и это доверие стало топливом. Команда собралась в кратчайшие сроки, как труппа перед премьерой, и довела референсы до высшего пилотажа. Каждая деталь — от драпировки до последнего шара — отточена, как движение в хореографии.</p>
                <p>Шоурум в два этажа преобразился за три дня. Из серых стен — в фееричный театр. Три дня, которые вместили месяцы идей и за которые пространство научилось дышать, светиться и играть.</p>
                <p>Браво команде. Браво тем, кто верит и доверяет. Браво празднику, который начинается за кулисами.</p>
            </div>
        </section>

        <section class="mt-[45px] grid grid-cols-2 gap-[8px] md:mt-[100px] md:grid-cols-4 md:gap-[15px]" aria-label="Галерея проекта Новый год Феникспрезент">
            @foreach ($galleryImages as $image)
                <a class="block overflow-hidden" href="{{ asset('images/projects/phoenix-new-year/gallery/'.$image.'.webp') }}" data-fancybox="phoenix-new-year-gallery">
                    <img class="aspect-[4/3] w-full object-cover transition-transform duration-500 hover:scale-[1.03]" src="{{ asset('images/projects/phoenix-new-year/preview/'.$image.'.webp') }}" alt="Новогоднее оформление Феникспрезент — фотография {{ $image }}" loading="lazy">
                </a>
            @endforeach
        </section>
    </main>
@endsection
