@props([
    'title' => 'Расскажите о своей идее.',
    'description' => "Я выслушаю, задам вопросы, предложу\nрешение — и мы вместе поймём, каким\nможет быть ваш проект.",
    'action' => null,
])

<section class="grid grid-cols-1 md:grid-cols-[1.2fr_1.2fr_1fr_1fr_0.6fr] md:gap-0" aria-label="Форма обратной связи">
    <div class="md:col-span-2 md:pr-[20px]">
        <h2 class="text-[50px] font-medium uppercase leading-[1.05]">{{ $title }}</h2>
        <p class="mt-[35px] whitespace-pre-line text-[19px] leading-[1.2]">{{ $description }}</p>
    </div>

    <form class="mt-[40px] md:col-span-2 md:mt-0 md:pl-[20px]" action="{{ $action }}" method="POST">
        @csrf

        <div>
            <label class="sr-only" for="contact-form-name">Имя</label>
            <input class="h-[55px] w-full border-t border-[#1f1e1d] bg-transparent text-[19px] outline-none placeholder:text-[#8F8F8F]" id="contact-form-name" name="name" type="text" placeholder="Имя">
        </div>

        <div>
            <label class="sr-only" for="contact-form-contact">Телефон/Email</label>
            <input class="h-[55px] w-full border-t border-[#1f1e1d] bg-transparent text-[19px] outline-none placeholder:text-[#8F8F8F]" id="contact-form-contact" name="contact" type="text" placeholder="Телефон/Email">
        </div>

        <div>
            <label class="sr-only" for="contact-form-date">Дата события (если есть)</label>
            <input class="h-[55px] w-full border-t border-[#1f1e1d] bg-transparent text-[19px] outline-none placeholder:text-[#8F8F8F]" id="contact-form-date" name="date" type="text" placeholder="Дата события (если есть)">
        </div>

        <div>
            <label class="sr-only" for="contact-form-idea">Описание идеи</label>
            <textarea class="block h-[55px] w-full resize-none border-t border-[#1f1e1d] bg-transparent pt-[16px] text-[19px] leading-[1.2] outline-none placeholder:text-[#8F8F8F]" id="contact-form-idea" name="idea" placeholder="Описание идеи"></textarea>
        </div>

        <div class="border-y border-[#1f1e1d]">
            <p class="pt-[16px] text-[19px]">Каким способом вы хотите получить обратную связь</p>

            <div class="flex flex-col gap-[10px] pb-[16px] pt-[16px]">
                @foreach (['whatsapp' => 'WhatsApp', 'telegram' => 'Telegram', 'email' => 'Email'] as $value => $label)
                    <label class="flex cursor-pointer items-center gap-[10px] text-[19px]">
                        <input class="peer sr-only" name="feedback_method" type="radio" value="{{ $value }}" @checked($value === 'whatsapp')>
                        <span class="relative h-[24px] w-[24px] shrink-0 rounded-full border border-[#1f1e1d] after:absolute after:left-1/2 after:top-1/2 after:h-[12px] after:w-[12px] after:-translate-x-1/2 after:-translate-y-1/2 after:scale-0 after:rounded-full after:bg-[#1f1e1d] after:transition-transform peer-checked:after:scale-100"></span>
                        <span>{{ $label }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <button class="group mt-[55px] inline-flex cursor-pointer gap-[5px] text-[19px] uppercase" type="submit">
            <span class="transition-transform duration-300 group-hover:-translate-x-1">[</span>
            <span>Отправить</span>
            <span class="transition-transform duration-300 group-hover:translate-x-1">]</span>
        </button>

        <p class="mt-[16px] text-[16px] leading-[1.2] text-[#8F8F8F]">
            Нажимая на кнопку, вы даете согласие на
            <a class="underline" href="#">обработку персональных данных</a>.
        </p>
    </form>

    <div class="hidden md:block"></div>
</section>
