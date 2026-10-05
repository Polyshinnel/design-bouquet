@extends('layouts.app')

@section('title', 'DESIGN.BOUQUET - Флористика как архитектура')

@section('content')
    <main>
        <h1 class="mt-[20px] text-[120px] font-medium">DESIGN.BOUQUET</h1>

        <table class="mt-[10px] w-full table-fixed border-collapse">
            <tbody>
                <tr>
                    <td class="h-[55px] border-y border-r border-[#1f1e1d] text-left align-middle text-[19px] uppercase">
                        БОЛЬШЕ ЧЕМ БУКЕТ
                    </td>
                    <td class="h-[55px] border-y border-[#1f1e1d] pl-[5px] text-left align-middle text-[19px]">
                        <div class="flex items-center justify-between gap-4">
                            <span>Флористика как архитектура</span>
                            <span aria-hidden="true">•</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="h-[55px] border-b border-r border-[#1f1e1d] text-left align-middle text-[19px]">
                        Флористика и декор для событий и пространств
                    </td>
                    <td class="h-[55px] border-b border-[#1f1e1d] pl-[5px] text-left align-middle text-[19px]">
                        <div class="flex items-center justify-between gap-4">
                            <span>Александра Лекомцева</span>
                            <span aria-hidden="true">•</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <picture class="mt-[40px] block">
            <source media="(max-width: 767px)" srcset="{{ asset('images/main-banner-mob.webp') }}">
            <img class="block h-auto w-full" src="{{ asset('images/main-banner.webp') }}" alt="Цветок в руке">
        </picture>

        <section class="mt-[40px] grid grid-cols-1 md:grid-cols-6">
            <div class="border-b border-[#1f1e1d] pb-[20px] text-[19px] uppercase md:border-b-0 md:border-r md:pb-0 md:pr-[20px]">
                Обо мне
            </div>

            <div class="mt-[40px] md:col-span-2 md:mt-0 md:pl-[20px]">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('images/alexandra-mob.webp') }}">
                    <img class="block h-auto w-full" src="{{ asset('images/alexandra-desktop.webp') }}" alt="Александра Лекомцева">
                </picture>
                <div class="mt-[20px] text-[19px] uppercase">
                    <p>Александра Лекомцева</p>
                    <p class="normal-case">Флорист-дизайнер, декоратор</p>
                </div>
            </div>

            <div class="mt-[40px] md:col-span-3 md:mt-0 md:pl-[20px]">
                <div class="border-b border-[#1f1e1d] pb-[26px] text-[50px] font-medium leading-[1.05]">
                    <p>Александра Лекомцева:</p>
                    <p>“Вижу суть — создаю форму”</p>
                </div>

                <div class="mt-[62px] grid grid-cols-1 gap-[30px] border-b border-[#1f1e1d] pb-[62px] text-[19px] leading-[1.2] md:grid-cols-2">
                    <p>Я не украшаю пространство — я его выстраиваю. Цвет, форма, фактура, свет — всё подчинено одной идее. Как архитектор работает с объёмом и материалом, так я работаю с живой материей: цветами, растениями, декором.</p>
                    <p>За этим стоит опыт с 2013 года, обучение у чемпионов мира и Европы, и сотни проектов — от частных интерьеров до международных выставок.</p>
                </div>

                <a class="group mt-[20px] inline-flex gap-[5px] text-[19px] uppercase" href="{{ route('contacts') }}">
                    <span class="transition-transform duration-300 group-hover:-translate-x-1">[</span>
                    <span>Обсудить проект</span>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">]</span>
                </a>
                <div class="mt-[17px] border-b border-[#1f1e1d]"></div>
            </div>
        </section>

        <table class="mt-[120px] h-[55px] w-full table-fixed border-y border-[#1f1e1d] border-collapse text-[19px] uppercase">
            <tbody>
                <tr>
                    <td class="h-[55px] text-left align-middle">Торжества</td>
                    <td class="h-[55px] text-left align-middle">Пространства</td>
                    <td class="h-[55px] text-left align-middle" colspan="2">
                        <div class="flex items-center justify-between gap-4">
                            <span>Выставки и Арт</span>
                            <span aria-hidden="true">•</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <section class="mt-[10px] grid grid-cols-1 gap-y-[40px] md:grid-cols-2 md:gap-0">
            <h2 class="text-[50px] font-medium uppercase leading-[1.05]">Избранные проекты</h2>

            <div>
                <p class="text-[19px] leading-[1.2]">
                    Каждый проект — это работа с пространством,<br class="hidden md:block">
                    его настроением и характером. Здесь собраны<br class="hidden md:block">
                    события и интерьеры, для которых флористика и<br class="hidden md:block">
                    декор стали частью общей идеи.
                </p>
                <a class="group mt-[64px] inline-flex gap-[5px] text-[19px] uppercase" href="{{ route('portfolio') }}">
                    <span class="transition-transform duration-300 group-hover:-translate-x-1">[</span>
                    <span>Смотреть все портфолио</span>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">]</span>
                </a>
            </div>
        </section>

        <section class="mt-[70px] grid grid-cols-2 gap-[10px] md:grid-cols-4" aria-label="Избранные проекты">
            @foreach (range(1, 8) as $projectNumber)
                <img
                    class="block aspect-square h-auto w-full grayscale transition-[filter] duration-500 hover:grayscale-0"
                    src="{{ asset("images/favorite-project/{$projectNumber}.webp") }}"
                    alt="Избранный проект {{ $projectNumber }}"
                >
            @endforeach
        </section>

        <table class="mt-[120px] h-[55px] w-full table-fixed border-y border-[#1f1e1d] border-collapse text-[19px] uppercase">
            <tbody>
                <tr>
                    <td class="h-[55px] text-left align-middle">Внимание к деталям</td>
                    <td class="h-[55px] text-left align-middle">Индивидуальный подход</td>
                    <td class="h-[55px] text-left align-middle" colspan="2">
                        <div class="flex items-center justify-between gap-4">
                            <span>Высокое качество исполнения</span>
                            <span aria-hidden="true">•</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <section class="mt-[10px] grid grid-cols-1 gap-y-[40px] md:grid-cols-2 md:gap-0">
            <h2 class="text-[50px] font-medium uppercase leading-[1.05]">Принципы</h2>

            <div>
                <p class="text-[19px] leading-[1.2]">
                    Каждый проект начинается с задачи,<br class="hidden md:block">
                    а не с шаблона. Я вслушиваюсь, уточняю,<br class="hidden md:block">
                    предлагаю — и только потом создаю.
                </p>
            </div>
        </section>

        <section class="mt-[120px] grid grid-cols-1 gap-y-[40px] border-t border-[#1f1e1d] pt-[14px] md:grid-cols-4 md:gap-0">
            <div class="text-[19px] uppercase md:col-span-2">География</div>

            <p class="text-[19px] leading-[1.2]">
                Работаю по всему миру. Собираю<br class="hidden md:block">
                команду под задачу — лучших<br class="hidden md:block">
                специалистов отрасли.
            </p>

            <div class="text-[19px] uppercase">
                @foreach (['ОАЭ', 'Россия', 'Китай', 'Италия', 'Саудовская Аравия'] as $countryIndex => $country)
                    <div class="flex {{ $countryIndex === 0 ? 'h-[40px] items-start' : 'h-[55px] items-center' }} justify-between border-b border-[#1f1e1d]">
                        <span>{{ $country }}</span>
                        <span aria-hidden="true">•</span>
                    </div>
                @endforeach
            </div>
        </section>

        <picture class="mt-[120px] block">
            <source media="(max-width: 767px)" srcset="{{ asset('images/main-bottom-mob.webp') }}">
            <img class="block h-auto w-full" src="{{ asset('images/main-bottom.webp') }}" alt="Цветочные композиции в интерьере">
        </picture>

        <div class="mb-[120px] mt-[115px]">
            <x-contact-form />
        </div>
    </main>
@endsection
