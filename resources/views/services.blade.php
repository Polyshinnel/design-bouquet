@extends('layouts.app')

@section('title', 'Услуги')

@section('content')
    <main>
        @php
            $services = [
                [
                    'title' => 'Торжества',
                    'image' => '1',
                    'items' => ['Свадьбы', 'Дни рождения', 'Детские праздники', 'Светские мероприятия', 'Корпоративы', 'Новый год'],
                    'description' => 'Каждое событие начинается с задачи, а не с шаблона. Беру на себя всё: от идеи до последнего штриха. Создаю пространство, которое работает на настроение и запоминается.',
                ],
                [
                    'title' => 'Пространства',
                    'image' => '2',
                    'items' => ['Коммерческие', 'Частные'],
                    'description' => 'Отели, рестораны, офисы, жилые комплексы, шоурумы, магазины, витрины, входные группы, квартиры, дома. Создаю среду, которая работает на репутацию и остаётся уместной долгие годы.',
                ],
                [
                    'title' => 'Выставки',
                    'image' => '3',
                    'items' => ['Выставочные капсулы', 'Коллаборации с художниками'],
                    'description' => 'Участие в международных выставочных проектах, создание выставочных капсул, работа в коллаборации с художниками и архитекторами. Пространства, где флористика и декор становятся частью художественного высказывания.',
                ],
                [
                    'title' => 'Лэнд-арт',
                    'image' => '4',
                    'items' => ['Проекты на стыке флористики и ландшафта'],
                    'description' => 'Работа с природными формами и материалами. Проекты, где флористика выходит за пределы букета — в пространство, в ландшафт, в искусство.',
                ],
                [
                    'title' => 'Цветочные фестивали',
                    'image' => '5',
                    'items' => ['Участие', 'Организация'],
                    'description' => 'Международные фестивальные проекты. Создание инсталляций и выставочных пространств для фестивалей.',
                ],
            ];
        @endphp

        <div class="mt-[30px]">
            @foreach ($services as $service)
                <article class="mx-auto grid w-full max-w-[1354px] grid-cols-1 gap-[20px] border-b border-[#1f1e1d] pb-[66px] pt-[40px] first:pt-0 md:grid-cols-2 md:gap-x-[46px] md:gap-y-0 md:pt-[66px] md:first:pt-0 md:last:border-b-0">
                    <h2 class="order-1 text-[30px] font-medium uppercase leading-[1.05] md:col-start-2 md:row-start-1 md:text-[50px]">{{ $service['title'] }}</h2>

                    <picture class="order-2 block md:col-start-1 md:row-span-2 md:row-start-1">
                        <source media="(max-width: 767px)" srcset="{{ asset("images/services/{$service['image']}-mob.webp") }}">
                        <img class="block h-auto w-full" src="{{ asset("images/services/{$service['image']}.webp") }}" alt="{{ $service['title'] }}">
                    </picture>

                    <div class="order-3 flex flex-col md:col-start-2 md:row-start-2">
                        <ul class="mt-0 text-[16px] uppercase md:mt-[49px] md:text-[19px]">
                            @foreach ($service['items'] as $item)
                                <li class="flex min-h-[55px] items-center justify-between gap-4 border-t border-[#1f1e1d] py-3 leading-[1.1] last:border-b">
                                    <span>{{ $item }}</span>
                                    <span aria-hidden="true">•</span>
                                </li>
                            @endforeach
                        </ul>

                        <p class="mt-[50px] text-[16px] leading-[1.2] md:text-[19px]">{{ $service['description'] }}</p>

                        <a class="group mt-[25px] inline-flex w-fit gap-[5px] text-[16px] uppercase md:mt-[30px] md:text-[19px]" href="{{ route('contacts') }}">
                            <span class="transition-transform duration-300 group-hover:-translate-x-1">[</span>
                            <span>Обсудить проект</span>
                            <span class="transition-transform duration-300 group-hover:translate-x-1">]</span>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mb-[40px] mt-[20px] md:mb-[120px] md:mt-[50px]">
            <x-contact-form
                title="Не нашли нужную услугу?"
                description="Расскажите о своей задаче — я предложу решение."
            />
        </div>
    </main>
@endsection
