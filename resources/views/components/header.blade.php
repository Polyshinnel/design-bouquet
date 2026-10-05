<header class="flex h-[105px] items-center justify-between border-b border-[#1f1e1d]">
    <a href="{{ route('home') }}" aria-label="На главную">
        <img src="{{ asset('images/logo.svg') }}" alt="Design Bouquet" width="115" height="57">
    </a>

    <nav aria-label="Основная навигация">
        <ul class="flex items-center gap-8 text-[19px] uppercase">
            <li>
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('home') }}">
                    Главная
                </a>
            </li>
            <li>
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('services') }}">
                    Услуги
                </a>
            </li>
            <li>
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('portfolio') }}">
                    Портфолио
                </a>
            </li>
            <li>
                <a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('about') }}">
                    Обо мне
                </a>
            </li>
            <li>
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
        </ul>
    </nav>
</header>
