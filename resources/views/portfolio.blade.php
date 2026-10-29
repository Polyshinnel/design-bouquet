@extends('layouts.app')

@section('title', 'Портфолио — DESIGN.BOUQUET')

@section('content')
    @php
        $portfolioSections = [
            [
                'title' => 'Рестораны',
                'projects' => [
                    ['image' => 'restaurants-1', 'title' => 'РЕСТОРАН RIZZ', 'location' => 'Россия', 'year' => '2026', 'url' => route('portfolio.rizz-restaurant')],
                    ['image' => 'restaurants-2', 'title' => 'ПИВНОЙ РЕСТОРАН «ВЕРВЪ»', 'location' => 'Россия', 'year' => '2025', 'url' => route('portfolio.verb-restaurant')],
                ],
            ],
            [
                'title' => 'Озеленение пространств',
                'projects' => [
                    ['image' => 'landscaping-1', 'title' => 'ORANGE GROUP', 'location' => 'ОАЭ', 'year' => '2026', 'url' => route('portfolio.orange-group')],
                ],
            ],
            [
                'title' => 'Торжества',
                'projects' => [
                    ['image' => 'celebrations-1', 'title' => 'СВАДЕБНЫЙ ПРОЕКТ ГУМ', 'location' => 'Россия', 'year' => '2026', 'url' => route('portfolio.gum-wedding')],
                    ['image' => 'celebrations-2', 'title' => 'НОВЫЙ ГОД ФЕНИКСПРЕЗЕНТ', 'location' => 'Россия', 'year' => '2026', 'url' => route('portfolio.phoenix-new-year')],
                ],
            ],
            [
                'title' => 'Выставки и фестивали',
                'projects' => [
                    ['image' => 'exhibitions-1', 'title' => 'SHANGHAI BIENNALE', 'location' => 'Шанхай, Китай', 'year' => '2025', 'url' => route('portfolio.shanghai-biennale')],
                    ['image' => 'exhibitions-2', 'title' => 'ЛЭНД АРТ', 'location' => 'Россия', 'year' => '2025', 'url' => route('portfolio.land-art')],
                ],
            ],
            [
                'title' => 'Арт',
                'projects' => [
                    ['image' => 'art-1', 'title' => 'ЦВЕТОЧНЫЙ АРТ', 'location' => 'Россия', 'year' => '2026', 'url' => route('portfolio.floral-art')],
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
                                @if (isset($project['url']))
                                    <a href="{{ $project['url'] }}" aria-label="Открыть проект {{ $project['title'] }}">
                                @endif
                                <img
                                    class="block h-auto w-full grayscale transition-[filter] duration-500 hover:grayscale-0 focus-visible:grayscale-0"
                                    src="{{ asset('images/portfolio/'.$project['image'].'.webp') }}"
                                    alt="{{ $project['title'] }}"
                                    loading="lazy"
                                >
                                <h3 class="mt-[12px] text-[13px] uppercase leading-[1.1] md:mt-[20px] md:text-[19px]">
                                    {{ $project['title'] }}
                                </h3>
                                @if (isset($project['url']))
                                    </a>
                                @endif
                                <div class="mt-[12px] border-b border-[#1f1e1d] md:mt-[20px]"></div>
                                <p class="mt-[10px] text-[13px] uppercase md:mt-[15px] md:text-[19px]">{{ $project['location'] }}</p>
                                <p class="mt-[5px] text-[13px] md:mt-[10px] md:text-[19px]">{{ $project['year'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </section>
            @endforeach
        </div>
    </main>
@endsection
