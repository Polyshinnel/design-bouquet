@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <main>
        <div class="mt-[30px] md:mt-[130px]">
            <article class="mx-auto grid w-full max-w-[1354px] grid-cols-1 gap-[20px] border-b border-[#1f1e1d] pb-[40px] pt-0 md:grid-cols-2 md:gap-x-[46px] md:gap-y-0 md:border-b-0 md:pb-[66px]">
                <div class="order-1 contents md:col-start-2 md:row-span-2 md:row-start-1 md:flex md:flex-col">
                    <h1 class="order-1 text-[30px] font-medium uppercase leading-[1.05] md:text-[50px]">Контакты</h1>

                    <ul class="order-3 mt-0 text-[16px] md:mt-[50px] md:text-[19px]">
                        <li class="flex min-h-[55px] items-center justify-between gap-4 border-t border-[#1f1e1d] py-3 leading-[1.1] last:border-b">
                            <span>Телефон:</span>
                            <a href="tel:+79652515252">+7 965 251 52 52</a>
                        </li>
                        <li class="flex min-h-[55px] items-center justify-between gap-4 border-t border-[#1f1e1d] py-3 leading-[1.1] last:border-b">
                            <span>Email:</span>
                            <a href="mailto:buro@design-bouquet.ru">buro@design-bouquet.ru</a>
                        </li>
                        <li class="flex min-h-[55px] items-center justify-between gap-4 border-t border-[#1f1e1d] py-3 leading-[1.1] last:border-b">
                            <span>WhatsApp:</span>
                            <a href="https://wa.me/79652515252">+7 965 251 52 52</a>
                        </li>
                        <li class="flex min-h-[55px] items-center justify-between gap-4 border-t border-[#1f1e1d] py-3 leading-[1.1] last:border-b">
                            <span>Telegram:</span>
                            <a href="https://t.me/+79652515252">+7 965 251 52 52</a>
                        </li>
                        <li class="flex min-h-[55px] items-center justify-between gap-4 border-t border-[#1f1e1d] py-3 leading-[1.1] last:border-b">
                            <span>Instagram:</span>
                            <a href="https://www.instagram.com/design.bouquet/">@design.bouquet</a>
                        </li>
                    </ul>

                    <a class="group order-4 mt-[25px] inline-flex w-fit gap-[5px] text-[16px] uppercase md:mt-[30px] md:text-[19px]" href="mailto:buro@design-bouquet.ru">
                        <span class="transition-transform duration-300 group-hover:-translate-x-1">[</span>
                        <span>Обсудить проект</span>
                        <span class="transition-transform duration-300 group-hover:translate-x-1">]</span>
                    </a>
                </div>

                <picture class="order-2 block md:col-start-1 md:row-span-2 md:row-start-1">
                    <source media="(max-width: 767px)" srcset="{{ asset('images/contacts-mob.webp') }}">
                    <img class="block h-auto w-full" src="{{ asset('images/contacts-desktop.webp') }}" alt="Александра Лекомцева">
                </picture>
            </article>
        </div>

        <div class="mb-[40px] mt-[40px] md:mb-[120px] md:mt-[115px]">
            <x-contact-form />
        </div>
    </main>
@endsection
