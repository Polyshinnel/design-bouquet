@extends('layouts.app')

@section('title', 'СВАДЕБНЫЙ ПРОЕКТ ГУМ — DESIGN.BOUQUET')

@section('content')
    @php
        $galleryImages = range(1, 8);
    @endphp

    <main class="mb-[100px] pt-[20px] md:pt-[130px]">
        <h1 class="text-[32px] font-medium uppercase leading-[1.05] md:text-[70px]">Свадебный проект ГУМ</h1>

        <table class="mt-[25px] w-full border-collapse border-t border-[#1f1e1d] text-[13px] uppercase leading-[1.2] md:mt-[40px] md:text-[19px]">
            <tbody class="block md:table-row-group">
                <tr class="grid grid-cols-1 md:table-row">
                    <td class="flex h-[55px] items-center border-b border-[#1f1e1d] text-left md:table-cell md:w-1/2 md:border-r">Декор и оформление</td>
                    <td class="relative flex h-[55px] items-center border-b border-[#1f1e1d] pr-[20px] text-left md:table-cell md:w-1/2 md:pl-[20px] md:pr-[25px]">
                        <span>Россия, 2026</span>
                        <span class="absolute right-0 top-1/2 -translate-y-1/2" aria-hidden="true">•</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <picture class="mt-[10px] block md:mt-[20px]">
            <source media="(max-width: 767px)" srcset="{{ asset('images/projects/gum-wedding/main-mob.webp') }}">
            <img class="block h-auto w-full" src="{{ asset('images/projects/gum-wedding/main.webp') }}" alt="Цветочное оформление свадебного торжества в ГУМе">
        </picture>

        <section class="mt-[45px] grid grid-cols-1 gap-[25px] md:mt-[100px] md:grid-cols-2 md:gap-[40px]">
            <h2 class="text-[25px] font-medium uppercase leading-[1.08] md:text-[50px]">Вальс цветов: Когда идея становится реальностью</h2>
            <div class="space-y-[18px] text-[15px] leading-[1.35] md:space-y-[22px] md:text-[19px]">
                <p>Есть проекты, где всё решает не бюджет и не масштаб, а точность замысла. Когда идея продумана до мелочей — до последнего изгиба стебля, до угла наклона лепестка, — остаётся только одно: виртуозное исполнение. И тогда на площадку выходит самая сильная команда.</p>
                <p>Я часто работаю на площадках как флорист-дизайнер. Это особая роль: не просто создавать, а видеть целое, чувствовать детали, собирать вокруг себя тех, кто говорит на том же языке — языке цвета, формы, света.</p>
                <p>Так случилось и в этом проекте.</p>
                <p>Для реализации дизайна была собрана уникальная команда флористов-дизайнеров. Не просто исполнителей — единомышленников, каждый из которых привнёс в общее дело своё мастерство. Мы работали несколько дней. Уникальные конструктивы для люстр были разработаны огромной командой профессионалов — инженерные решения, которые позволили цветам парить в воздухе, не теряя ни грамма естественности. Каждая люстра стала отдельным произведением: конструкция, невидимая глазу, держала живую материю так, что казалось — она растёт прямо из воздуха.</p>
                <p>За сутки до торжества зал ГУМа преобразился. Нет — он не украсился. Он зазвучал. Пространство, знакомое тысячам людей, стало сценой, на которой закружился вальс цветов. Тысячи бутонов, сотни оттенков, игра света и тени — всё двигалось в едином ритме, подчиняясь невидимой партитуре.</p>
                <p>Это не оформление. Это хореография. И когда гости вошли в зал, они услышали тишину — ту самую, которая наступает, когда слова становятся лишними.</p>
                <p>Разработка конструктивов и шеф-монтаж команды <a class="underline underline-offset-2" href="https://www.instagram.com/lidseventdecor/">@lidseventdecor</a>.</p>
            </div>
        </section>

        <section class="mt-[45px] grid grid-cols-2 gap-[8px] md:mt-[100px] md:grid-cols-4 md:gap-[15px]" aria-label="Галерея свадебного проекта ГУМ">
            @foreach ($galleryImages as $image)
                <a class="block overflow-hidden" href="{{ asset('images/projects/gum-wedding/gallery/'.$image.'.webp') }}" data-fancybox="gum-wedding-gallery">
                    <img class="aspect-[4/3] w-full object-cover transition-transform duration-500 hover:scale-[1.03]" src="{{ asset('images/projects/gum-wedding/preview/'.$image.'.webp') }}" alt="Свадебный проект ГУМ — фотография {{ $image }}" loading="lazy">
                </a>
            @endforeach
        </section>
    </main>
@endsection
