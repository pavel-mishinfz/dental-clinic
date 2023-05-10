<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>{{$title}}</title>
</head>

<body>

<header class="header">
    <div class="container header__container">
        <div class="logo">
            <img class="logo__img" src="img/logo.svg" alt="Логотип">
            <p class="logo__title">Стоматологическая клиника</p>
        </div>
        <nav class="nav">
            <div class="hamb" id="hamb">
                <div class="hamb__field" id="hamb">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
            <ul class="nav__list">
                <li class="nav__list-item"><a href="{{route('main.index')}}">Главная</a></li>
                <li class="nav__list-item"><a href="{{route('department.index')}}">Услуги</a></li>
                <li class="nav__list-item"><a href="{{route('doctor.index')}}">Врачи</a></li>
                <li class="nav__list-item"><a href="{{route('about.index')}}">О клинике</a></li>
                <li class="nav__list-item"><a href="{{route('contact.index')}}">Контакты</a></li>
            </ul>
        </nav>
    </div>
</header>

@yield('content')

<footer class="footer">
    <div class="container footer__container">
        <div class="footer__left">
            <div class="logo">
                <img class="logo__img" src="img/logo.svg" alt="Логотип">
                <p class="logo__title">Стоматологическая клиника</p>
            </div>
        </div>
        <div class="hamb" id="hamb-footer">
            <div class="hamb__field" id="hamb">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
        <div class="footer__right">
            <address class="address">
                <div class="address__top">
                    <img src="img/location.svg" alt="Иконка адреса">
                    <p class="address__title">Адрес</p>
                </div>
                <div class="address__bottom">
                    <p class="address__text">
                        г. Коломна, ул. Октябрьской революции д. 161
                    </p>
                </div>
            </address>
            <div class="work-time">
                <div class="work-time__top">
                    <img src="img/clock.svg" alt="Иконка часов">
                    <p class="work-time__title">Время работы</p>
                </div>
                <div class="work-time__bottom">
                    <p class="work-time__text">
                        Работаем без выходных с 9:00 до 21:00
                    </p>
                </div>
            </div>
            <div class="social-network">
                <a href=""><img src="img/telegram.svg" alt="Иконка телеграмма"></a>
                <a href=""><img src="img/whatsapp.svg" alt="Иконка whatsapp'a"></a>
            </div>
            <div class="phone">
                <a href="tel:+74966141515" class="phone__number">+7 (496) 614-25-25</a>
                <a href="tel:+79260255767" class="phone__number">+7 (926) 025-57-67</a>
                <button class="phone__feedback btn--feedback">Перезвоните мне</button>
            </div>
        </div>
    </div>
</footer>

@yield('popup--doctors')

<div class="menu" id="menu">
    <div class="menu__container">
        <div class="menu__header">
            <h5 class="menu__h5">Меню</h5>
            <button class="menu__close">&times;</button>
        </div>
        <ul class="menu__list">
            <li class="menu__list-item"><a href="{{route('main.index')}}">Главная</a></li>
            <li class="menu__list-item"><a href="{{route('department.index')}}">Услуги</a></li>
            <li class="menu__list-item"><a href="{{route('doctor.index')}}">Врачи</a></li>
            <li class="menu__list-item"><a href="{{route('about.index')}}">О клинике</a></li>
            <li class="menu__list-item"><a href="{{route('contact.index')}}">Контакты</a></li>
        </ul>
    </div>
</div>
<div class="popup-menu" id="popup"></div>

<div class="popup-feedback">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <form id="popup__form-feedback" class="popup__form" method="post">
                    <button class="popup__close popup__close--feedback">&times;</button>
                    @csrf
                    <p class="popup__form-title">
                        Напишите ваши контактные данные и наши менеджеры свяжуться с вами в ближайшее время
                    </p>
                    <input class="popup__form-name" name="name" type="text" placeholder="Имя" value="{{ old('name') }}">
                    <input class="popup__form-surname" name="surname" type="text" placeholder="Фамилия" value="{{ old('surname') }}">
                    <input class="popup__form-lastname" name="lastname" type="text" placeholder="Отчество" value="{{ old('lastname') }}">
                    <input class="popup__form-tel" name="phone" type="tel" placeholder="Телефон" value="{{ old('phone') }}">
                    <div class="b-captcha">
                        <span id="b-captcha__img">{!! captcha_img() !!}</span>
                        <button id="b-captcha__reload"><img src="img/reload.svg" alt="Обновить"></button>
                    </div>
                    <input class="popup__form-captcha" name="captcha" type="text">
                    <div class="b-checkbox">
                        <input class="b-checkbox__btn" type="checkbox" name="checkbox" id="personal-data" checked>
                        <label class="b-checkbox__label" for="personal-data">Я согласен на обработку моих <span>персональных данных</span></label>
                    </div>
                    <div class="success">
                        <div class="success-msg"></div>
                        <button class="success-close">&times;</button>
                    </div>
                    <button type="submit" class="btn btn--popup-form">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

@yield('popup--price-list')

@yield('slider-css')

<script
    src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
    crossorigin="anonymous"></script>
<script src="Inputmask-5.x/dist/inputmask.js"></script>
<script src="Inputmask-5.x/dist/jquery.inputmask.js"></script>

@yield('slider-js')

@yield('ymaps')
<script src="js/hamb-menu.js"></script>
<script src="js/observer.js"></script>
<script src="js/popup.js"></script>

@yield('slider-doctor')

@yield('slider-about')

<script src="js/captcha.js"></script>
<script src="js/feedback.js"></script>

</body>

</html>
