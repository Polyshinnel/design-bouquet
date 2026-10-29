@extends('layouts.app')

@section('title', 'ПИВНОЙ РЕСТОРАН «ВЕРВЪ» — DESIGN.BOUQUET')

@section('content')
    @php
        $galleryImages = range(1, 8);
    @endphp

    <main class="mb-[100px] pt-[20px] md:pt-[130px]">
        <h1 class="text-[32px] font-medium uppercase leading-[1.05] md:text-[70px]">Пивной ресторан «Вервъ»</h1>

        <table class="mt-[25px] w-full border-collapse border-t border-[#1f1e1d] text-[13px] uppercase leading-[1.2] md:mt-[40px] md:text-[19px]">
            <tbody class="block md:table-row-group">
                <tr class="grid grid-cols-1 md:table-row">
                    <td class="flex h-[55px] items-center border-b border-[#1f1e1d] text-left md:table-cell md:w-1/2 md:border-r">Озеленение и дизайн пространства</td>
                    <td class="relative flex h-[55px] items-center border-b border-[#1f1e1d] pr-[20px] text-left md:table-cell md:w-1/2 md:pl-[20px] md:pr-[25px]">
                        <span>Россия, 2025</span>
                        <span class="absolute right-0 top-1/2 -translate-y-1/2" aria-hidden="true">•</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <picture class="mt-[10px] block md:mt-[20px]">
            <source media="(max-width: 767px)" srcset="{{ asset('images/projects/verb-restaurant/main-mob.webp') }}">
            <img class="block h-auto w-full" src="{{ asset('images/projects/verb-restaurant/main.webp') }}" alt="Озеленение пивного ресторана «Вервъ»">
        </picture>

        <section class="mt-[45px] grid grid-cols-1 gap-[25px] md:mt-[100px] md:grid-cols-2 md:gap-[40px]">
            <h2 class="text-[25px] font-medium uppercase leading-[1.08] md:text-[50px]">Джунгли с перевёрнутой лодкой</h2>
            <div class="space-y-[18px] text-[15px] leading-[1.35] md:space-y-[22px] md:text-[19px]">
                <p>Хозяин пивного ресторана «Вервъ» обратился ко мне с задачей, которая звучала почти как тост: озеленить пространство, где будут собираться любители спорта и шикарного пива, привезённого из разных стран. Не просто украсить — создать атмосферу, в которой хочется остаться на второй тайм и третий бокал.</p>
                <p>Заказчик полностью доверил дизайн и реализацию — и это стало тем самым ветром, который наполняет паруса. Фантазия разгулялась. Хотелось не просто поставить кашпо с зеленью на пол. Я решила, что мужское пространство заслуживает сюжета.</p>
                <p>Под потолок взмыла лодка — перевёрнутая. Не парусник, не символ странствий, а сама конструкция, вывернутая наизнанку и поднятая вверх. Нетрадиционное решение, которое переворачивает привычное восприятие пространства: там, где должно быть дно, — небо. Вокруг неё, как архипелаг в воздухе, раскинулись левитирующие острова зелени: мхи, папоротники, свисающие лианы. Свет пробивается сквозь них, рисуя на полу живые тени, которые меняются в течение дня.</p>
                <p>Стены превратились в джунгли. Зелень разрослась, переплелась, обняла деревья, повела взгляд вверх, туда, где под потолком парит перевёрнутая лодка. Это не декор — это маршрут: от стены к островам, от островов к лодке, от лодки к бокалу.</p>
                <p>Фантазийный сюжет для мужского пространства: спорт, пиво, путешествия — и джунгли, которые помнят о том, что где-то там, за горизонтом, ещё есть неоткрытые берега.</p>
                <p>Заказчик доверился — и получил не озеленение, а историю. Историю, в которой каждый вечер начинается как приключение, а заканчивается как хорошая компания.</p>
            </div>
        </section>

        <section class="mt-[45px] grid grid-cols-2 gap-[8px] md:mt-[100px] md:grid-cols-4 md:gap-[15px]" aria-label="Галерея проекта Пивной ресторан Вервъ">
            @foreach ($galleryImages as $image)
                <a class="block overflow-hidden" href="{{ asset('images/projects/verb-restaurant/gallery/'.$image.'.webp') }}" data-fancybox="verb-restaurant-gallery">
                    <img class="aspect-[4/3] w-full object-cover transition-transform duration-500 hover:scale-[1.03]" src="{{ asset('images/projects/verb-restaurant/preview/'.$image.'.webp') }}" alt="Пивной ресторан Вервъ — фотография {{ $image }}" loading="lazy">
                </a>
            @endforeach
        </section>
    </main>
@endsection
