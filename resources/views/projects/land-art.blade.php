@extends('layouts.app')

@section('title', 'ЛЭНД АРТ — DESIGN.BOUQUET')

@section('content')
    @php
        $galleryImages = range(1, 12);
    @endphp

    <main class="mb-[100px] pt-[20px] md:pt-[130px]">
        <h1 class="text-[32px] font-medium uppercase leading-[1.05] md:text-[70px]">Лэнд арт</h1>

        <table class="mt-[25px] w-full border-collapse border-t border-[#1f1e1d] text-[13px] uppercase leading-[1.2] md:mt-[40px] md:text-[19px]">
            <tbody class="block md:table-row-group">
                <tr class="grid grid-cols-1 md:table-row">
                    <td class="flex h-[55px] items-center border-b border-[#1f1e1d] text-left md:table-cell md:w-1/2 md:border-r">Международный конкурс</td>
                    <td class="relative flex h-[55px] items-center border-b border-[#1f1e1d] pr-[20px] text-left md:table-cell md:w-1/2 md:pl-[20px] md:pr-[25px]">
                        <span>Россия, 2025</span>
                        <span class="absolute right-0 top-1/2 -translate-y-1/2" aria-hidden="true">•</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <picture class="mt-[10px] block md:mt-[20px]">
            <source media="(max-width: 767px)" srcset="{{ asset('images/projects/land-art/main-mob.webp') }}">
            <img class="block h-auto w-full" src="{{ asset('images/projects/land-art/main.webp') }}" alt="Работы проекта лэнд-арта в природном пространстве">
        </picture>

        <section class="mt-[45px] grid grid-cols-1 gap-[25px] md:mt-[100px] md:grid-cols-2 md:gap-[40px]">
            <h2 class="text-[25px] font-medium uppercase leading-[1.08] md:text-[50px]">Искусство в природном пространстве</h2>
            <div class="space-y-[18px] text-[15px] leading-[1.35] md:space-y-[22px] md:text-[19px]">
                <p>Проект на пересечении флористики, скульптуры и ландшафта, созданный для участия в международном конкурсе лэнд-арта. Природные материалы стали основой объёмных композиций, в которых выразительность формы рождается из переплетения ветвей, плавных линий и естественных фактур.</p>
                <p>Каждый изгиб и рисунок плетения сохраняют характер материала. Тёплые древесные оттенки связывают объекты с окружающим пейзажем, а просветы между ветвями наполняют их светом и воздухом. С разных точек раскрываются новые силуэты и детали, меняется ощущение объёма.</p>
                <p>Эти работы становятся частью открытого пространства, вступая в диалог с деревьями, небом и рельефом. Они предлагают остановиться, рассмотреть привычные природные материалы иначе и увидеть, как из простых элементов возникает художественная форма.</p>
            </div>
        </section>

        <section class="mt-[45px] grid grid-cols-2 gap-[8px] md:mt-[100px] md:grid-cols-4 md:gap-[15px]" aria-label="Галерея проекта Лэнд арт">
            @foreach ($galleryImages as $image)
                <a class="block overflow-hidden" href="{{ asset('images/projects/land-art/gallery/'.$image.'.webp') }}" data-fancybox="land-art-gallery">
                    <img class="aspect-[4/3] w-full object-cover transition-transform duration-500 hover:scale-[1.03]" src="{{ asset('images/projects/land-art/preview/'.$image.'.webp') }}" alt="Лэнд арт — фотография {{ $image }}" loading="lazy">
                </a>
            @endforeach
        </section>
    </main>
@endsection
