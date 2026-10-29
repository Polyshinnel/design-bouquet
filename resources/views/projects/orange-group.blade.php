@extends('layouts.app')

@section('title', 'ORANGE GROUP — DESIGN.BOUQUET')

@section('content')
    @php
        $galleryImages = range(1, 8);
    @endphp

    <main class="mb-[100px] pt-[20px] md:pt-[130px]">
        <h1 class="text-[32px] font-medium uppercase leading-[1.05] md:text-[70px]">ORANGE GROUP</h1>

        <table class="mt-[25px] w-full border-collapse border-t border-[#1f1e1d] text-[13px] uppercase leading-[1.2] md:mt-[40px] md:text-[19px]">
            <tbody class="block md:table-row-group">
                <tr class="grid grid-cols-1 md:table-row">
                    <td class="flex h-[55px] items-center border-b border-[#1f1e1d] text-left md:table-cell md:w-1/2 md:border-r">Озеленение офисного пространства</td>
                    <td class="relative flex h-[55px] items-center border-b border-[#1f1e1d] pr-[20px] text-left md:table-cell md:w-1/2 md:pl-[20px] md:pr-[25px]">
                        <div class="flex items-center gap-[5px]">
                            <span>ОАЭ, 2026</span>
                        </div>
                        <span class="absolute right-0 top-1/2 -translate-y-1/2" aria-hidden="true">•</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <picture class="mt-[10px] block md:mt-[20px]">
            <source media="(max-width: 767px)" srcset="{{ asset('images/projects/orange-group/main-mob.webp') }}">
            <img class="block h-auto w-full" src="{{ asset('images/projects/orange-group/main.webp') }}" alt="Озеленение офиса Orange Group">
        </picture>

        <section class="mt-[45px] grid grid-cols-1 gap-[25px] md:mt-[100px] md:grid-cols-2 md:gap-[40px]">
            <h2 class="text-[25px] font-medium uppercase leading-[1.08] md:text-[50px]">Природные формы<br>в пространстве современного офиса</h2>
            <div class="space-y-[18px] text-[15px] leading-[1.35] md:space-y-[22px] md:text-[19px]">
                <p>Озеленение офиса Orange Group стало продолжением архитектурной концепции — сдержанной, современной и открытой. Растительные композиции дополняют интерьер, смягчают строгую геометрию и привносят природные формы в деловую среду.</p>
                <p>Зелёные зоны объединены в общую композицию, которая раскрывается с разных точек пространства. Крупные растения создают выразительные акценты, а более лёгкие и воздушные группы добавляют глубину и плавность. Сочетание разных силуэтов, оттенков зелени и фактур листвы делает оформление многослойным, сохраняя ощущение простора.</p>
                <p>Озеленение поддерживает ритм открытой планировки и визуально связывает разные части офиса. Растительные композиции органично вписаны в окружающую обстановку: они подчёркивают архитектурные решения и создают более камерную атмосферу в зонах отдыха.</p>
                <p>В результате сформировалось целостное пространство, в котором современная офисная эстетика сочетается с мягкостью природных форм. Зелень добавляет интерьеру тепло и выразительность, создавая спокойный фон для работы, общения и отдыха.</p>
                <p>Автор дизайн-проекта: <a class="underline underline-offset-2" href="https://www.instagram.com/katrinmuse_design/">@katrinmuse_design</a><br>Кашпо: <a class="underline underline-offset-2" href="https://www.instagram.com/plantersuae/">@plantersuae</a></p>
            </div>
        </section>

        <section class="mt-[45px] grid grid-cols-2 gap-[8px] md:mt-[100px] md:grid-cols-4 md:gap-[15px]" aria-label="Галерея проекта Orange Group">
            @foreach ($galleryImages as $image)
                <a class="block overflow-hidden" href="{{ asset('images/projects/orange-group/gallery/'.$image.'.webp') }}" data-fancybox="orange-group-gallery">
                    <img class="aspect-[4/3] w-full object-cover transition-transform duration-500 hover:scale-[1.03]" src="{{ asset('images/projects/orange-group/preview/'.$image.'.webp') }}" alt="Orange Group — фотография {{ $image }}" loading="lazy">
                </a>
            @endforeach
        </section>
    </main>
@endsection
