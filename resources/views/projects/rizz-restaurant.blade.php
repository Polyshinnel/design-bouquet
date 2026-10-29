@extends('layouts.app')

@section('title', 'RIZZ RESTAURANT — DESIGN.BOUQUET')

@section('content')
    @php
        $galleryImages = range(1, 8);
    @endphp

    <main class="mb-[100px] pt-[20px] md:pt-[130px]">
        <h1 class="text-[32px] font-medium uppercase leading-[1.05] md:text-[70px]">RIZZ RESTAURANT</h1>

        <table class="mt-[25px] w-full border-collapse border-t border-[#1f1e1d] text-[13px] uppercase leading-[1.2] md:mt-[40px] md:text-[19px]">
            <tbody class="block md:table-row-group">
                <tr class="grid grid-cols-1 md:table-row">
                    <td class="flex h-[55px] items-center border-b border-[#1f1e1d] text-left md:table-cell md:w-1/2 md:border-r">Оформление входной группы</td>
                    <td class="relative flex h-[55px] items-center border-b border-[#1f1e1d] pr-[20px] text-left md:table-cell md:w-1/2 md:pl-[20px] md:pr-[25px]">
                        <span>Россия, 2026</span>
                        <span class="absolute right-0 top-1/2 -translate-y-1/2" aria-hidden="true">•</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <picture class="mt-[10px] block md:mt-[20px]">
            <source media="(max-width: 767px)" srcset="{{ asset('images/projects/rizz-restaurant/main-mob.webp') }}">
            <img class="block h-auto w-full" src="{{ asset('images/projects/rizz-restaurant/main.webp') }}" alt="Оформление входной группы ресторана RIZZ">
        </picture>

        <section class="mt-[45px] grid grid-cols-1 gap-[25px] md:mt-[100px] md:grid-cols-2 md:gap-[40px]">
            <h2 class="text-[25px] font-medium uppercase leading-[1.08] md:text-[50px]">Оформление, которое начинается с понимания места и его характера</h2>
            <div class="space-y-[18px] text-[15px] leading-[1.35] md:space-y-[22px] md:text-[19px]">
                <p>Это началось с рекомендации. Дизайнеры, которые уже знали мои работы, привели меня к заказчику — и с первых минут стало ясно: здесь хотят не просто оформление. Хотят характер.</p>
                <p>Мне прислали каталог с миссией ресторана и всей компании — сети отелей и ресторанов. Я читала не прайсы, а философию бренда. Выписывала слова, которые повторялись. Всматривалась в цвета, которые они считают своими. Так родилось несколько вариантов — и один из них оказался точным попаданием.</p>
                <p>А потом началась настоящая работа.</p>
                <p>Входная группа — на улице. Шпон, из которого делают мебель, к погоде не приспособлен: дождь, солнце, перепады температур. Я армировала его, покрыла яхтным лаком — тем самым, которым защищают палубы от солёной воды и ветра. Цветы создавала с учётом климата. С виду — нежные, почти невесомые. Внутри — прочные, армированные. Красота, которая выдерживает всё.</p>
                <p>Заказчик остался доволен. А я в очередной раз убедилась: настоящий дизайн — это не про материалы. Это про погружение в пространство и людей, для которых ты работаешь.</p>
            </div>
        </section>

        <section class="mt-[45px] grid grid-cols-2 gap-[8px] md:mt-[100px] md:grid-cols-4 md:gap-[15px]" aria-label="Галерея проекта RIZZ RESTAURANT">
            @foreach ($galleryImages as $image)
                <a class="block overflow-hidden" href="{{ asset('images/projects/rizz-restaurant/gallery/'.$image.'.webp') }}" data-fancybox="rizz-restaurant-gallery">
                    <img class="aspect-[4/3] w-full object-cover transition-transform duration-500 hover:scale-[1.03]" src="{{ asset('images/projects/rizz-restaurant/preview/'.$image.'.webp') }}" alt="RIZZ RESTAURANT — фотография {{ $image }}" loading="lazy">
                </a>
            @endforeach
        </section>
    </main>
@endsection
