@extends('layouts.app')

@section('title', 'Александра Лекомцева — DESIGN.BOUQUET')

@section('content')
    <main>
        <section class="mt-[30px] grid grid-cols-1 md:mt-[130px] md:grid-cols-6">
            <div class="hidden border-b border-[#1f1e1d] pb-[20px] text-[19px] uppercase md:block md:border-b-0 md:border-r md:pb-0 md:pr-[20px]">
                Обо мне
            </div>

            <div class="order-2 mt-[30px] hidden md:order-2 md:col-span-2 md:mt-0 md:block md:pl-[20px]">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('images/about-mob.webp') }}">
                    <img class="block h-auto w-full" src="{{ asset('images/about-descktop.webp') }}" alt="Александра Лекомцева">
                </picture>
            </div>

            <div class="order-1 md:order-3 md:col-span-3 md:mt-0 md:pl-[20px]">
                <div class="flex flex-col gap-[20px]">
                    <h1 class="text-[30px] font-medium uppercase leading-[1.05] md:text-[50px]">Александра Лекомцева</h1>

                    <div class="flex h-[55px] items-center border-y border-[#1f1e1d] text-[14px] uppercase md:text-[19px]">
                        DESIGN.BOUQUET — БОЛЬШЕ ЧЕМ БУКЕТ
                    </div>
                </div>

                <picture class="mt-[30px] block md:hidden">
                    <source media="(max-width: 767px)" srcset="{{ asset('images/about-mob.webp') }}">
                    <img class="block h-auto w-full" src="{{ asset('images/about-descktop.webp') }}" alt="Александра Лекомцева">
                </picture>

                <div class="mt-[30px] grid grid-cols-1 gap-[20px] text-[16px] leading-[1.2] md:mt-[62px] md:gap-[24px] md:text-[19px]">
                    <p>За каждым проектом стоит задача. Иногда простая — оформить пространство к событию. Иногда сложная — создать среду, которая будет жить годами и работать на репутацию. Я люблю и те, и другие, но особенно — вторые: там, где можно месяцами вынашивать концепцию, искать материал, изобретать технологию.</p>
                    <p>Моя работа начинается с того, что я вслушиваюсь. В запрос, в пространство, в контекст. А заканчивается — результатом, который превосходит ожидания: решением, о котором клиент не догадывался, пространством, которое радует долгие годы. Потому что настоящая работа не заканчивается на открытии.</p>
                    <p>Я всегда работала на высоких планках и отдавалась делу полностью — с самого начала. И, пожалуй, именно поэтому вокруг меня собираются лучшие: команда экспертов, с которой мы делаем то, что другим кажется невозможным.</p>
                </div>
            </div>
        </section>

        <section class="mt-[60px] grid grid-cols-1 gap-y-[20px] border-t-0 pt-0 md:mt-[130px] md:grid-cols-4 md:gap-0 md:border-t md:pt-[14px]">
            <div class="text-[30px] font-medium uppercase leading-[1.05] md:col-span-2 md:text-[19px] md:font-normal md:leading-normal">ЭКСПЕРТНОСТЬ</div>

            <div class="grid grid-cols-1 text-[14px] uppercase md:col-span-2 md:text-[19px]">
                @foreach ([
                    'С 2013 года — во флористике и декоре',
                    'Обучение у чемпионов мира, Европы и России',
                    '2 диплома флориста-дизайнера',
                    'Победы в международных конкурсах',
                    'Участие в международных выставках',
                    'Награды от администраций городов за вклад в развитие отрасли',
                    'Биеннале в Шанхае — флагманский проект в коллаборации с художниками',
                    'Команда ведущих экспертов отрасли',
                ] as $expertiseIndex => $expertise)
                    <div class="flex {{ $expertiseIndex === 0 ? 'h-[40px] items-start' : 'min-h-[55px] items-center py-[10px]' }} justify-between gap-[12px] border-b border-[#1f1e1d]">
                        <span>{{ $expertise }}</span>
                        <span aria-hidden="true">•</span>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="mt-[60px] border-t-0 pt-0 md:mt-[130px] md:border-t md:border-[#1f1e1d] md:pt-[12px]">
            <h2 class="text-[30px] font-medium uppercase leading-[1.05] md:text-[19px] md:font-normal md:leading-normal">НАГРАДЫ И ДИПЛОМЫ</h2>

            <div class="swiper mt-[33px]" data-awards-slider>
                <div class="swiper-wrapper">
                    @foreach (range(1, 17) as $diplomaNumber)
                        <article class="swiper-slide">
                            <a class="block" href="{{ asset('images/diploms/' . $diplomaNumber . '.webp') }}" data-fancybox="awards" data-caption="Диплом №{{ $diplomaNumber }}">
                                <img class="aspect-[3/4] w-full bg-white object-contain grayscale transition-[filter] duration-500 hover:grayscale-0" src="{{ asset('images/diploms/' . $diplomaNumber . '.webp') }}" alt="Диплом №{{ $diplomaNumber }}" loading="lazy">
                            </a>
                            <div class="mt-[19px] min-h-[44px] text-[16px] leading-[1.35] md:text-[19px]">
                                <p>Диплом №{{ $diplomaNumber }}</p>
                                <p class="text-[#828282]">Награды и достижения</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="mt-[40px] grid grid-cols-1 gap-y-[20px] border-t-0 pt-0 md:hidden" aria-label="География работы">
            <div class="text-[30px] font-medium uppercase leading-[1.05]">География</div>

            <div class="text-[16px] uppercase">
                @foreach (['ОАЭ', 'Россия', 'Китай', 'Италия', 'Саудовская Аравия'] as $countryIndex => $country)
                    <div class="flex {{ $countryIndex === 0 ? 'h-[40px] items-start' : 'h-[55px] items-center' }} justify-between border-b border-[#1f1e1d]">
                        <span>{{ $country }}</span>
                        <span aria-hidden="true">•</span>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="mt-[130px] hidden overflow-x-auto md:block" aria-label="География работы">
            <div class="grid h-[55px] min-w-[760px] grid-cols-6 items-center border-y border-[#1f1e1d] text-[14px] uppercase md:min-w-0 md:text-[19px]">
                <div class="flex h-full items-center border-r border-[#1f1e1d] pr-[12px]">География</div>
                <div class="text-center">ОАЭ</div>
                <div class="text-center">Россия</div>
                <div class="text-center">Китай</div>
                <div class="text-center">Италия</div>
                <div class="text-center">Саудовская Аравия</div>
            </div>
        </section>

        <div class="mb-[40px] mt-[40px] md:mb-[120px] md:mt-[115px]">
            <x-contact-form />
        </div>
    </main>
@endsection
