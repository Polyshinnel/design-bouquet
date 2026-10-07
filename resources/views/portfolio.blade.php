@extends('layouts.app')

@section('title', 'Портфолио — DESIGN.BOUQUET')

@section('content')
    @php
        $portfolioSections = [
            [
                'title' => 'Озеленение пространств',
                'projects' => [
                    ['image' => 1, 'title' => 'Зелёный остров в офисе'],
                    ['image' => 2, 'title' => 'Вертикальное озеленение интерьера'],
                ],
            ],
            [
                'title' => 'Торжества',
                'projects' => [
                    ['image' => 3, 'title' => 'Свадебный ужин в классическом зале'],
                    ['image' => 4, 'title' => 'Цветочная композиция с арт-объектом'],
                    ['image' => 5, 'title' => 'Новогоднее оформление пространства'],
                    ['image' => 6, 'title' => 'Цветочная фотозона'],
                ],
            ],
            [
                'title' => 'Выставки и фестивали',
                'projects' => [
                    ['image' => 7, 'title' => 'Оформление выставочного стенда'],
                    ['image' => 8, 'title' => 'Зелёная инсталляция в галерее'],
                    ['image' => 9, 'title' => 'Природная арт-инсталляция'],
                    ['image' => 10, 'title' => 'Цветочная инсталляция на фестивале'],
                ],
            ],
            [
                'title' => 'Арт',
                'projects' => [
                    ['image' => 11, 'title' => 'Цветочный образ'],
                    ['image' => 12, 'title' => 'Букет как арт-объект'],
                ],
            ],
        ];
    @endphp

    <main class="pt-[20px] md:pt-[130px]">
        <div>
            @foreach ($portfolioSections as $section)
                <section class="mb-[70px] md:mb-[120px]" aria-labelledby="portfolio-section-{{ $loop->index }}">
                    <h2 id="portfolio-section-{{ $loop->index }}" class="mb-[25px] text-[28px] font-medium uppercase leading-[1.05] md:mb-[40px] md:text-[50px]">
                        {{ $section['title'] }}
                    </h2>

                    <div class="grid grid-cols-1 gap-y-[30px] md:grid-cols-2 md:gap-x-[20px] md:gap-y-[50px]">
                        @foreach ($section['projects'] as $project)
                            <article>
                                <img
                                    class="block h-auto w-full grayscale transition-[filter] duration-500 hover:grayscale-0 focus-visible:grayscale-0"
                                    src="{{ asset('images/portfolio/'.$project['image'].'.webp') }}"
                                    alt="{{ $project['title'] }}"
                                    loading="lazy"
                                >
                                <h3 class="mt-[12px] text-[13px] uppercase leading-[1.1] md:mt-[20px] md:text-[19px]">
                                    {{ $project['title'] }}
                                </h3>
                                <div class="mt-[12px] border-b border-[#1f1e1d] md:mt-[20px]"></div>
                                <p class="mt-[10px] text-[13px] uppercase md:mt-[15px] md:text-[19px]">Локация</p>
                                <p class="mt-[5px] text-[13px] md:mt-[10px] md:text-[19px]">2026</p>
                            </article>
                        @endforeach
                    </div>
                </section>
            @endforeach
        </div>
    </main>
@endsection
