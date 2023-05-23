@extends('templates.layout')
@section('content')
    <main class="main">
        <div class="container main__container">
            <div class="preview obsv-header">
                <h1 class="preview__h1">Лечение и протезирование зубов по Европейским стандартам</h1>
                <p class="preview__subtitle">Предоставим 2-3 плана качественного лечения под ваш бюджет</p>
                <p class="preview__text">Запишитесь на <span>бесплатную</span> первичную консультацию - диагностику
                    зубов</p>
                <button class="btn btn--preview btn--feedback">Записаться</button>
            </div>
        </div>
    </main>
    <section class="features">
        <div class="container">
            <div class="features__list">
                <div class="features__list-item">
                    <img src="{{asset('img/main/calendar.svg')}}" alt="Календарь" class="features__img">
                    <div class="features__desc">
                        <p class="features__title">Работаем с 2011 года</p>
                        <p class="features__text">Многолетний опыт работы - залог качественного сервиса</p>
                    </div>
                </div>
                <div class="features__list-item">
                    <img src="{{asset('img/main/user.svg')}}" alt="Пользователь" class="features__img">
                    <div class="features__desc">
                        <p class="features__title">Опытные врачи</p>
                        <p class="features__text">Огромный опыт персонала и слаженность работы</p>
                    </div>
                </div>
                <div class="features__list-item">
                    <img src="{{asset('img/main/fingerprint.svg')}}" alt="Отпечаток пальца" class="features__img">
                    <div class="features__desc">
                        <p class="features__title">Уникальный подход</p>
                        <p class="features__text">Применяем в своей работе современные технологии</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="consultation">
        <div class="container consultation__container">
            <div class="consultation__header obsv-header">
                <h2 class="consultation__h2">
                    Бесплатная консультация врача
                </h2>
                <h3 class="consultation__subtitle">
                    На бесплатной консультации врач клиники проведет диагностику всех зубов:
                </h3>
            </div>
            <div class="consultation__list--small-device">
                <div class="consultation__list-item--small-device">
                    <div class="consultation__img"><img src="{{asset('img/consultation/inspection.png')}}" alt="Осмотр"></div>
                    <p class="consultation__text">
                        Полный осмотр и диагностика полости рта
                    </p>
                    <p class="consultation__small-text">
                        При необходимости сделаем дополнительный снимок зубов, у нас в клинике
                    </p>
                </div>
                <div class="consultation__list-item--small-device">
                    <div class="consultation__img"><img src="{{asset('img/consultation/plane.png')}}" alt="Осмотр"></div>
                    <p class="consultation__text">
                        Составит 2-3 плана лечения на выбор
                    </p>
                    <p class="consultation__small-text">
                        Вы сможете выбрать подходящий план лечения, исходя из бюджета
                    </p>
                </div>
                <div class="consultation__list-item--small-device">
                    <div class="consultation__img"><img src="{{asset('img/consultation/clean.png')}}" alt="Осмотр"></div>
                    <p class="consultation__text">
                        При необходимости проведем проф. гигиену
                    </p>
                    <p class="consultation__small-text">
                        Вы сможете выбрать подходящий план лечения, исходя из бюджета
                    </p>
                    <p class="consultation__small-text">
                        Чистка зубов в 4 этапа
                    </p>
                </div>
            </div>
            <div class="consultation__list">
                <div class="consultation__list-item consultation__list-item--img">
                    <div class="consultation__img"><img src="{{asset('img/consultation/inspection.png')}}" alt="Осмотр"></div>
                    <div class="consultation__img"><img src="{{asset('img/consultation/plane.png')}}" alt="Осмотр"></div>
                    <div class="consultation__img"><img src="{{asset('img/consultation/clean.png')}}" alt="Осмотр"></div>
                </div>
                <div class="consultation__list-item consultation__list-item--text">
                    <p class="consultation__text">
                        Полный осмотр и диагностика полости рта
                    </p>
                    <p class="consultation__text">
                        Составит 2-3 плана лечения на выбор
                    </p>
                    <p class="consultation__text">
                        При необходимости проведем проф. гигиену
                    </p>
                </div>
                <div class="consultation__list-item consultation__list-item--small-text">
                    <p class="consultation__small-text">
                        При необходимости сделаем дополнительный снимок зубов, у нас в клинике
                    </p>
                    <p class="consultation__small-text">
                        Вы сможете выбрать подходящий план лечения, исходя из бюджета
                    </p>
                    <p class="consultation__small-text">
                        Чистка зубов в 4 этапа
                    </p>
                </div>
            </div>
            <button class="btn btn--consultation btn--feedback">Записаться</button>
        </div>
    </section>
@endsection
