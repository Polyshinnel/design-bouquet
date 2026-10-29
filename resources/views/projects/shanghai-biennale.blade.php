@extends('layouts.app')

@section('title', 'SHANGHAI BIENNALE — DESIGN.BOUQUET')

@section('content')
    @php
        $galleryImages = range(1, 8);
    @endphp

    <main class="mb-[100px] pt-[20px] md:pt-[130px]">
        <h1 class="text-[32px] font-medium uppercase leading-[1.05] md:text-[70px]">Shanghai Biennale</h1>

        <table class="mt-[25px] w-full border-collapse border-t border-[#1f1e1d] text-[13px] uppercase leading-[1.2] md:mt-[40px] md:text-[19px]">
            <tbody class="block md:table-row-group">
                <tr class="grid grid-cols-1 md:table-row">
                    <td class="flex h-[55px] items-center border-b border-[#1f1e1d] text-left md:table-cell md:w-1/2 md:border-r">Power Station of Art</td>
                    <td class="relative flex h-[55px] items-center border-b border-[#1f1e1d] pr-[20px] text-left md:table-cell md:w-1/2 md:pl-[20px] md:pr-[25px]">
                        <span>Шанхай, Китай, 2025</span>
                        <span class="absolute right-0 top-1/2 -translate-y-1/2" aria-hidden="true">•</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <picture class="mt-[10px] block md:mt-[20px]">
            <source media="(max-width: 767px)" srcset="{{ asset('images/projects/shanghai-biennale/main-mob.webp') }}">
            <img class="block h-auto w-full" src="{{ asset('images/projects/shanghai-biennale/main.webp') }}" alt="Инсталляция Phantom Forest на биеннале в Шанхае">
        </picture>

        <section class="mt-[45px] grid grid-cols-1 gap-[25px] md:mt-[100px] md:grid-cols-2 md:gap-[40px]">
            <h2 class="text-[25px] font-medium uppercase leading-[1.08] md:text-[50px]">Phantom forest:<br>Как мы заставили деревья левитировать</h2>
            <div class="space-y-[18px] text-[15px] leading-[1.35] md:space-y-[22px] md:text-[19px]">
                <p>В мире, где материя стремится вниз, мы решили бросить вызов гравитации. Всё началось со звонка мне компании REAL TOUCH — предложения, от которого невозможно отказаться: стать соавторами чуда в тандеме с художниками. Задача дышала дерзостью: создать призрака. Не просто декорацию, а дерево-фантом для музейного пространства Турина, где цветы табибуи, оторванные от ветвей, должны были парить в воздухе, рисуя невидимый контур кроны.</p>
                <p>Я с командой погрузились в математику красоты. Рождались дизайны, чертились схемы монтажа, просчитывалась каждая точка опоры для хрупких лепестков. И вот — чудо свершилось: невесомое дерево застыло в воздухе Турина, доказывая, что корни могут быть не в земле, а в идее.</p>
                <p>Но аппетит приходит во время игры. Тема призрачной природы оказалась слишком соблазнительной, чтобы остановиться на одном дереве. Так родился Phantom Forest.</p>
                <p>Шанхай. Биеннале. Масштаб, требующий полугода титанической работы: разработка форм, инженерия конструктивов, сотни чертежей. Мы строили лес, которого нет. Три недели монтажа в стенах Power Station of Art — и вот уже три дерева-призрака выросли там, где раньше была лишь пустота.</p>
                <p>Этот флагманский проект произвел фурор. Среди гудящей толпы, в свете софитов, Phantom Forest (2025) заставил зрителей затаить дыхание. Это было не просто искусство — это была материализация снов, созданная в коллаборации с гениями современности Jennifer Allora и Guillermo Calzadilla.</p>
                <p>Благодарю команду REAL TOUCH (<a class="underline underline-offset-2" href="https://www.instagram.com/real_touch_flowers/">@real_touch_flowers</a>) и лично <a class="underline underline-offset-2" href="https://www.instagram.com/kulikovyan/">@kulikovyan</a> и <a class="underline underline-offset-2" href="https://www.instagram.com/prokazovaluybov/">@prokazovaluybov</a> за то, что земля уходит из-под ног, оставляя только парящие цветы.</p>
            </div>
        </section>

        <section class="mt-[45px] grid grid-cols-2 gap-[8px] md:mt-[100px] md:grid-cols-4 md:gap-[15px]" aria-label="Галерея проекта Shanghai Biennale">
            @foreach ($galleryImages as $image)
                <a class="block overflow-hidden" href="{{ asset('images/projects/shanghai-biennale/gallery/'.$image.($image === 3 ? '.mp4' : '.webp')) }}" data-fancybox="shanghai-biennale-gallery" @if ($image === 3) data-type="html5video" @endif>
                    <img class="aspect-[4/3] w-full object-cover transition-transform duration-500 hover:scale-[1.03]" src="{{ asset('images/projects/shanghai-biennale/preview/'.$image.'.webp') }}" alt="Shanghai Biennale — {{ $image === 3 ? 'видео' : 'фотография '.$image }}" loading="lazy">
                </a>
            @endforeach
        </section>
    </main>
@endsection
