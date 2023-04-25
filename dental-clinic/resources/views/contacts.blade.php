@extends('templates.layout')
@section('content')
    <section class="contacts">
        <div id="map" class="contacts__map"></div>
        <div class="container">
            <div class="contacts__block">
                <h3 class="contacts__h3">Контакты</h3>
                <address class="contacts__address">
                    г. Коломна, ул. Октябрьской революции д. 161
                </address>
                <div class="contacts__time">
                    <p class="contacts__time-text">
                        с 9:00 до 21:00 <span>последняя запись до 19:00</span>
                    </p>
                </div>
                <div class="contacts__phone">
                    <a href="tel:+74966141515">+7 (496) 614-15-15</a>
                    <a href="tel:+79260255767">+7 (926) 025-57-67</a>
                    <a href="tel:+79850255566">+7 (985) 025-55-66</a>
                </div>
                <div class="contacts__messenger">
                    <div class="contacts__messenger-icon">
                        <a href=""><img src="img/telegram.svg" alt="Иконка телеграмма"></a>
                        <a href=""><img src="img/whatsapp.svg" alt="Иконка whatsapp'a"></a>
                    </div>
                    <p class="contacts__messenger-text">спросить в мессенджере</p>
                </div>
                <div class="contacts__social">
                    <a href=""><img src="img/VK.svg" alt="Иконка Вконтакте"></a>
                    <p class="contacts__social-text">Наша круппа в ВКонтакте</p>
                </div>
            </div>
        </div>
    </section>

    <section class="free">
        <div class="container">
            <form action="" class="popup__form free__form" method="post">
                <h5 class="free__form-h5">
                    Запишитесь на бесплатную первичную консультацию и диагностику зубов
                </h5>
                <p class="popup__form-title free__form-title">
                    В ходе консультации вы получите 2-3 плана качественного лечения под ваш бюджет
                </p>
                <input class="popup__form-name" type="text" placeholder="Имя" maxlength="30" required>
                <input class="popup__form-tel" type="tel" placeholder="Телефон" maxlength="11" required>
                <div class="b-checkbox">
                    <input class="b-checkbox__btn" type="checkbox" name="personal-data" id="personal-data">
                    <label class="b-checkbox__label" for="personal-data">Я согласен на обработку моих <span>персональных данных</span></label>
                </div>
                <button type="submit" class="btn btn--popup-form">Записаться</button>
            </form>
        </div>
    </section>
@endsection
@section('ymaps')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=5703c528-fb4a-4c0a-a0b1-23d68ed92a66&lang=ru_RU"></script>
    <script src="js/ymaps.js"></script>
@endsection
