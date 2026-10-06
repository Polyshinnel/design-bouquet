<header class="relative z-40 flex h-[75px] items-center justify-between border-b-0 border-[#1f1e1d] lg:h-[105px] lg:border-b">
    <a href="{{ route('home') }}" aria-label="На главную">
        <img class="h-auto w-[90px] lg:w-[115px]" src="{{ asset('images/logo.svg') }}" alt="Design Bouquet" width="115" height="57">
    </a>

    <nav aria-label="Основная навигация">
        <ul class="flex items-center gap-8 text-[19px] uppercase">
            <li class="hidden lg:block">
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('home') }}">
                    Главная
                </a>
            </li>
            <li class="hidden lg:block">
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('services') }}">
                    Услуги
                </a>
            </li>
            <li class="hidden lg:block">
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('portfolio') }}">
                    Портфолио
                </a>
            </li>
            <li class="hidden lg:block">
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('about') }}">
                    Обо мне
                </a>
            </li>
            <li class="hidden lg:block">
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('contacts') }}">
                    Контакты
                </a>
            </li>
            <li class="ml-2">
                <label class="sr-only" for="language">Язык</label>
                <div class="relative w-[48px] bg-[#ebe9e6]" data-language-select>
                    <select id="language" class="sr-only" name="language">
                        <option value="ru" selected>RU</option>
                        <option value="en">EN</option>
                    </select>
                    <button class="flex h-[29px] w-full cursor-pointer items-center justify-start gap-[8px] bg-[#ebe9e6] text-[19px] uppercase outline-none" type="button" aria-controls="language-options" aria-expanded="false" data-language-toggle>
                        <img class="pointer-events-none" src="{{ asset('images/triangle.svg') }}" alt="" width="12" height="7">
                        <span data-language-value>RU</span>
                    </button>
                    <ul id="language-options" class="absolute right-0 top-full z-10 hidden w-full border border-[#1f1e1d] bg-[#ebe9e6] text-[19px] uppercase" data-language-options>
                        <li>
                            <button class="w-full cursor-pointer bg-[#1f1e1d] text-center text-white" type="button" data-language-option="ru">RU</button>
                        </li>
                        <li>
                            <button class="w-full cursor-pointer bg-[#ebe9e6] text-center text-[#1f1e1d]" type="button" data-language-option="en">EN</button>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="block lg:hidden">
                <button class="flex h-[44px] w-[64px] cursor-pointer items-center justify-center" type="button" aria-controls="mobile-menu" aria-expanded="false" data-menu-toggle>
                    <img class="h-auto w-full" src="{{ asset('images/menu.svg') }}" alt="Открыть меню" width="94" height="44">
                </button>
            </li>
        </ul>
    </nav>

    <div class="fixed inset-x-0 bottom-0 top-[75px] z-30 flex max-h-0 flex-col overflow-hidden bg-[#ebe9e6] px-[15px] pb-[35px] pt-[15px] opacity-0 transition-[max-height,opacity] duration-500 ease-in-out pointer-events-none lg:hidden" id="mobile-menu" data-mobile-menu aria-hidden="true">
        <div class="absolute left-[15px] right-[15px] top-0 border-t border-[#1f1e1d]" aria-hidden="true"></div>
        <nav aria-label="Мобильная навигация">
            <ul class="flex flex-col text-[19px] uppercase">
                <li class="flex items-center justify-between gap-4 border-b border-[#1f1e1d] py-[14px] first:pt-0">
                    <a class="block" href="{{ route('home') }}">Главная</a>
                    <span aria-hidden="true">•</span>
                </li>
                <li class="flex items-center justify-between gap-4 border-b border-[#1f1e1d] py-[14px]">
                    <a class="block" href="{{ route('services') }}">Услуги</a>
                    <span aria-hidden="true">•</span>
                </li>
                <li class="flex items-center justify-between gap-4 border-b border-[#1f1e1d] py-[14px]">
                    <a class="block" href="{{ route('portfolio') }}">Портфолио</a>
                    <span aria-hidden="true">•</span>
                </li>
                <li class="flex items-center justify-between gap-4 border-b border-[#1f1e1d] py-[14px]">
                    <a class="block" href="{{ route('about') }}">Обо мне</a>
                    <span aria-hidden="true">•</span>
                </li>
                <li class="flex items-center justify-between gap-4 py-[14px] last:pb-0">
                    <a class="block" href="{{ route('contacts') }}">Контакты</a>
                    <span aria-hidden="true">•</span>
                </li>
            </ul>
        </nav>

        <div class="mt-auto flex flex-col items-center gap-5 pt-[35px] text-center text-[16px] uppercase">
            <a href="{{ route('home') }}" aria-label="На главную">
                <img class="w-[145px]" src="{{ asset('images/logo.svg') }}" alt="Design Bouquet" width="175" height="87">
            </a>
            <p class="font-medium">Design.Bouquet</p>

            <div class="flex flex-col gap-2">
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="tel:+79652515252">+7 965 251 52 52</a>
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="mailto:buro@design-bouquet.ru">buro@design-bouquet.ru</a>
            </div>

            <div class="flex items-center gap-5">
                <a class="transition-opacity duration-300 hover:opacity-60" href="#" aria-label="Instagram">
                    <img class="h-[32px] w-[32px]" src="{{ asset('images/instagram.svg') }}" alt="" width="24" height="24">
                </a>
                <a class="transition-opacity duration-300 hover:opacity-60" href="#" aria-label="Telegram">
                    <img class="h-[32px] w-[32px]" src="{{ asset('images/telegram.svg') }}" alt="" width="24" height="24">
                </a>
                <a class="transition-opacity duration-300 hover:opacity-60" href="#" aria-label="WhatsApp">
                    <img class="h-[32px] w-[32px]" src="{{ asset('images/whatsapp.svg') }}" alt="" width="24" height="24">
                </a>
            </div>
        </div>
    </div>
</header>
