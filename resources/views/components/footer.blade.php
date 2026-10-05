<footer class="border-t border-[#1f1e1d] pb-[38px] pt-[49px] text-[19px] uppercase">
    <div class="grid grid-cols-[1fr_1fr_1.5fr_0.75fr] gap-10">
        <div class="col-span-2 flex flex-col items-start gap-5">
            <a href="{{ route('home') }}" aria-label="На главную">
                <img class="w-[175px]" src="{{ asset('images/logo.svg') }}" alt="Design Bouquet" width="175" height="87">
            </a>
            <p class="font-medium">Design.Bouquet</p>
            <p>Больше чем букет</p>
        </div>

        <div>
            <h2 class="font-medium">Контакты</h2>
            <div class="mt-[25px] flex flex-col gap-2">
                <a class="relative inline-block w-fit after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="mailto:buro@design-bouquet.ru">buro@design-bouquet.ru</a>
                <a class="relative inline-block w-fit after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="tel:+79652515252">+7 965 251 52 52</a>
            </div>
            <div class="mt-[45px] flex items-center gap-5">
                <a class="transition-opacity duration-300 hover:opacity-60" href="#" aria-label="Instagram">
                    <img src="{{ asset('images/instagram.svg') }}" alt="" width="24" height="24">
                </a>
                <a class="transition-opacity duration-300 hover:opacity-60" href="#" aria-label="Telegram">
                    <img src="{{ asset('images/telegram.svg') }}" alt="" width="24" height="24">
                </a>
                <a class="transition-opacity duration-300 hover:opacity-60" href="#" aria-label="WhatsApp">
                    <img src="{{ asset('images/whatsapp.svg') }}" alt="" width="24" height="24">
                </a>
            </div>
        </div>

        <div>
            <h2 class="font-medium">Меню</h2>
            <nav class="mt-[25px]" aria-label="Навигация в подвале">
                <ul class="flex flex-col gap-2">
                    <li><a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('home') }}">Главная</a></li>
                    <li><a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('services') }}">Услуги</a></li>
                    <li><a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('portfolio') }}">Портфолио</a></li>
                    <li><a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('about') }}">Обо мне</a></li>
                    <li><a class="relative inline-block after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="{{ route('contacts') }}">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="mt-[125px] grid grid-cols-[1fr_1fr_1.5fr_0.75fr] gap-10">
        <p class="col-span-2">Copyright © 2026 Design Bouquet — Все права защищены</p>
        <a class="relative inline-block w-fit after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="#">Политика конфиденциальности</a>
        <a class="relative inline-block w-fit after:absolute after:bottom-[-4px] after:left-0 after:h-px after:w-0 after:bg-[#1f1e1d] after:transition-all after:duration-300 hover:after:w-full" href="#">Документы</a>
    </div>
</footer>
