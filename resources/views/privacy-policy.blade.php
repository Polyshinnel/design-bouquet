@extends('layouts.app')

@section('title', 'Политика конфиденциальности — DESIGN.BOUQUET')

@section('content')
    <main class="mx-auto mt-[30px] max-w-[1354px] pb-[80px] md:mt-[130px] md:pb-[130px]">
        <h1 class="border-b border-[#1f1e1d] pb-[20px] text-[30px] font-medium uppercase leading-[1.05] md:text-[50px]">Политика конфиденциальности</h1>

        <div class="mt-[30px] grid grid-cols-1 gap-[30px] md:mt-[50px] md:grid-cols-[1fr_2fr] md:gap-[46px]">
            <p class="text-[14px] uppercase md:text-[19px]">Обработка информации на сайте</p>

            <div class="space-y-[28px] text-[16px] leading-[1.35] md:text-[19px]">
                <p>Настоящая политика описывает, как сайт DESIGN.BOUQUET использует информацию посетителей и защищает персональные данные.</p>

                <section>
                    <h2 class="mb-[10px] font-medium uppercase">Какие данные мы получаем</h2>
                    <p>При заполнении формы обратной связи вы можете указать имя, телефон или адрес электронной почты, дату события, описание проекта и предпочтительный способ связи. Также сайт может получать технические данные о посещении, включая файлы cookie и сведения, собираемые сервисами веб-аналитики.</p>
                </section>

                <section>
                    <h2 class="mb-[10px] font-medium uppercase">Для чего используется информация</h2>
                    <p>Данные из формы используются, чтобы связаться с вами, ответить на запрос и обсудить проект. Технические данные и cookie помогают обеспечивать работу сайта, понимать, как посетители им пользуются, и улучшать его содержание.</p>
                </section>

                <section>
                    <h2 class="mb-[10px] font-medium uppercase">Cookie и веб-аналитика</h2>
                    <p>Cookie — небольшие файлы, которые сохраняются в браузере. Сайт использует их и сервисы веб-аналитики. Вы можете ограничить сохранение cookie в настройках браузера; это может повлиять на работу некоторых функций сайта. Нажимая «Принимаю» в уведомлении на сайте, вы подтверждаете, что ознакомились с этой политикой.</p>
                </section>

                <section>
                    <h2 class="mb-[10px] font-medium uppercase">Связь</h2>
                    <p>По вопросам обработки данных напишите на <a class="underline underline-offset-2" href="mailto:buro@design-bouquet.ru">buro@design-bouquet.ru</a> или позвоните по номеру <a class="underline underline-offset-2" href="tel:+79652515252">+7 965 251 52 52</a>.</p>
                </section>
            </div>
        </div>
    </main>
@endsection
