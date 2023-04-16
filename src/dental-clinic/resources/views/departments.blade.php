@extends('templates.layout')
@section('content')
    <section class="service">
        <div class="container">
            <div class="service__header obsv-header">
                <h2 class="service__h2">Услуги</h2>
                <h3 class="service__subtitle">
                    Наша клиника предоставляет широкий спектр услуг, выберите подходящую вам и <span>запишитесь на
                        бесплатную консультацию</span>
                </h3>
            </div>

            <div class="service__list">
                @foreach($departments as $department)
                    <article class="card obsv-card">
                        <h4 class="card__h4">{{$department->name}}</h4>
                        <p class="card__text">
                            {{$department->description}}
                        </p>
                        <ul class="card__list">
                            @foreach(explode(', ',$department->services) as $service)
                            <li class="card__list-item">
                                {{$service}}
                            </li>
                            @endforeach
                        </ul>
                        <img class="card__img" src="img/service/{{$department->image}}" alt="Удаление зуба">
                        <div class="card__messenger">
                            <div class="card__messenger-icon">
                                <a href=""><img src="img/telegram.svg" alt="Иконка телеграмма"></a>
                                <a href=""><img src="img/whatsapp.svg" alt="Иконка whatsapp'a"></a>
                            </div>
                            <p class="card__messenger-text">спросить в мессенджере</p>
                        </div>
                        <div class="card__btns">
                            <button class="btn btn--service btn--feedback">Записаться</button>
                            <button class="btn btn--price">Узнать цены</button>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="hygiene">
                <div class="hygiene__top">
                    <div class="hygiene__video">
                        <h3 class="hygiene__video-h3">
                            Технология профессиональной гигиены полости рта <span>в 4 этапа</span>
                        </h3>
                        <div class="hygiene__wrap-video">
                            <p class="hygiene__video-text">
                                Посмотрите видео о технологии
                            </p>
                            <div class="hygiene__video-play">
                                <video src="video/demo.mp4">
                                </video>
                            </div>
                        </div>
                        <button class="btn btn--hygiene btn--price">Узнать цены</button>
                    </div>
                    <div class="hygiene__desc">
                        <ul class="hygiene__list">
                            <li class="hygiene__list-item">
                                Максимальная чистка в труднодоступных местах от камня и налета
                            </li>
                            <li class="hygiene__list-item">
                                Применение AIR FLOW не доставляет дискомфорта и боли
                            </li>
                            <li class="hygiene__list-item">
                                Такая чистка помогает убрать неприятный запах изо рта
                            </li>
                            <li class="hygiene__list-item">
                                Осветляет зубы на 2-3 тона
                            </li>
                            <li class="hygiene__list-item">
                                Очищает протезы брекеты и другие ортодонтические конструкции
                            </li>
                            <li class="hygiene__list-item">
                                Убирает пятна от кофе, чая, табака и красного вина
                            </li>
                            <li class="hygiene__list-item">
                                Удаляет налет курильщика
                            </li>
                            <li class="hygiene__list-item">
                                Снижается развитие кариозного процесса
                            </li>
                            <li class="hygiene__list-item">
                                Все этапы безболезнены и атравматичны
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn--hygiene btn--medium">Узнать цены</button>
                </div>
                <div class="hygiene__bottom">
                    <div class="hygiene__wrap-step">
                        <div class="hygiene__step hygiene__step--1 obsv-hygiene-step">
                            <p class="hygiene__step-text">
                                Ультразвуковым аппаратом производится максимальная чистка в труднодоступных местах от
                                поддесневого и наддесневого камня и налета.
                            </p>
                        </div>
                        <div class="hygiene__step hygiene__step--2 obsv-hygiene-step">
                            <p class="hygiene__step-text">
                                Применение AIR FLOW не доставляет дискомфорта и боли, очищая межзубные отложения.
                            </p>
                        </div>
                        <div class="hygiene__step hygiene__step--3 obsv-hygiene-step">
                            <p class="hygiene__step-text">
                                Полировка зубов при помощи специальных паст и щеточек. Такая чистка устраняет все
                                неровности скопившихся отложений, освежает и убирает неприятный запах.
                            </p>
                        </div>
                        <div class="hygiene__step hygiene__step--4 obsv-hygiene-step">
                            <p class="hygiene__step-text">
                                Покрытие зубов ременилизирующим гелем. Снимает чувствительность, предотвращает развитие
                                кариеса.
                            </p>
                        </div>
                    </div>
                    <div class="hygiene__messenger">
                        <div class="hygiene__messenger-icon">
                            <a href=""><img src="img/telegram.svg" alt="Иконка телеграмма"></a>
                            <a href=""><img src="img/whatsapp.svg" alt="Иконка whatsapp'a"></a>
                        </div>
                        <p class="hygiene__messenger-text">спросить в мессенджере</p>
                    </div>
                    <div class="hygiene__btns">
                        <button class="btn btn--hygiene btn--feedback">Записаться</button>
                        <button class="btn btn--hygiene-select">Выбрать врача</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('popup--price-list')
    <div class="popup--price-list">
        <div class="dm-table">
            <div class="dm-cell">
                <div class="dm-modal">
                    <button class="popup__close popup__close--price-list">&times;</button>
                    <div class="popup--price-list__container">
                        <p class="popup--price-list__title">
                            Скачайте прайс-лист и ознакомьтесь с ценами
                        </p>
                        <img class="popup--price-list__img" src="img/pdf-icon.svg" alt="Иконка pdf">
                        <button type="download" class="btn btn--price-list">Скачать</button>
                        <div class="b-messenger">
                            <div class="b-messenger__icon">
                                <a href=""><img src="img/telegram.svg" alt="Иконка телеграмма"></a>
                                <a href=""><img src="img/whatsapp.svg" alt="Иконка whatsapp'a"></a>
                            </div>
                            <p class="b-messenger__text">спросить в мессенджере</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
