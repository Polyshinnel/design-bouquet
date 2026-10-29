@extends('layouts.app')

@section('title', 'ЦВЕТОЧНЫЙ АРТ — DESIGN.BOUQUET')

@section('content')
    @php
        $galleryImages = range(1, 8);
    @endphp

    <main class="mb-[100px] pt-[20px] md:pt-[130px]">
        <h1 class="text-[32px] font-medium uppercase leading-[1.05] md:text-[70px]">Цветочный арт</h1>

        <table class="mt-[25px] w-full border-collapse border-t border-[#1f1e1d] text-[13px] uppercase leading-[1.2] md:mt-[40px] md:text-[19px]">
            <tbody class="block md:table-row-group">
                <tr class="grid grid-cols-1 md:table-row">
                    <td class="flex h-[55px] items-center border-b border-[#1f1e1d] text-left md:table-cell md:w-1/2 md:border-r">Арт-съёмки · Сценография · Флористические инсталляции</td>
                    <td class="relative flex h-[55px] items-center border-b border-[#1f1e1d] pr-[20px] text-left md:table-cell md:w-1/2 md:pl-[20px] md:pr-[25px]">
                        <span>Россия, 2026</span>
                        <span class="absolute right-0 top-1/2 -translate-y-1/2" aria-hidden="true">•</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <picture class="mt-[10px] block md:mt-[20px]">
            <source media="(max-width: 767px)" srcset="{{ asset('images/projects/floral-art/main-mob.webp') }}">
            <img class="block h-auto w-full" src="{{ asset('images/projects/floral-art/main.webp') }}" alt="Цветочная арт-инсталляция">
        </picture>

        <section class="mt-[45px] grid grid-cols-1 gap-[25px] md:mt-[100px] md:grid-cols-2 md:gap-[40px]">
            <h2 class="text-[25px] font-medium uppercase leading-[1.08] md:text-[50px]">Манифест соавторства: Когда цветы становятся светом</h2>
            <div class="space-y-[18px] text-[15px] leading-[1.35] md:space-y-[22px] md:text-[19px]">
                <p>Я верю, что цветок — это не финальная точка. Это запятая.</p>
                <p>Ко мне часто обращаются фотографы. Не за букетом — за соавторством. За тем состоянием, когда декорация перестаёт быть фоном и становится действующим лицом, дышит в кадре, ловит свет, спорит с тенью. Такие процессы меня притягивают сильнее, чем готовый результат. Потому что именно в них рождается то, что невозможно повторить: живая материя встречается с оптикой, замысел — с импровизацией, ремесло — с магией.</p>
                <p>Я работаю на стыке. Флористика для меня — не украшательство, а сценография. Каждый стебель — реплика в диалоге, каждая фактура — характер, каждая тень — пауза. Когда фотограф говорит «мне нужно ощущение, а не композиция», я понимаю этот язык без перевода.</p>
                <p>Меня вдохновляют люди, которые смотрят сквозь видоискатель и видят больше, чем есть. Художники, которые приходят с эскизами, снами, странными идеями. Те, кто не боится, что цветы завянут в процессе, — потому что знает: мы создаём не долговечное, мы создаём настоящее.</p>
                <p>Я всегда открыта. К фотографам, художникам, режиссёрам, мечтателям. К тем, кто хочет не заказать оформление, а построить вместе мир — пусть даже на три часа, пусть даже только для одного кадра.</p>
                <p>Потому что кадр — это тоже вечность. Просто короткая.</p>
                <p>В соавторстве с <a class="underline underline-offset-2" href="https://www.instagram.com/pavek_love/">@pavek_love</a>.</p>
            </div>
        </section>

        <section class="mt-[45px] grid grid-cols-2 gap-[8px] md:mt-[100px] md:grid-cols-4 md:gap-[15px]" aria-label="Галерея проекта Цветочный арт">
            @foreach ($galleryImages as $image)
                <a class="block overflow-hidden" href="{{ asset('images/projects/floral-art/gallery/'.$image.'.webp') }}" data-fancybox="floral-art-gallery">
                    <img class="aspect-[4/3] w-full object-cover transition-transform duration-500 hover:scale-[1.03]" src="{{ asset('images/projects/floral-art/preview/'.$image.'.webp') }}" alt="Цветочный арт — фотография {{ $image }}" loading="lazy">
                </a>
            @endforeach
        </section>
    </main>
@endsection
