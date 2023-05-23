@extends('templates.layout')
@section('csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('review-css')
    <link rel="stylesheet" href="{{asset('css/croppie/croppie.css')}}" />
    <link rel="stylesheet" href="{{asset('css/arcticmodal/jquery.arcticmodal.css')}}" />
    <link rel="stylesheet" href="{{asset('css/arcticmodal/themes/simple.css')}}" />
@endsection
@section('content')
    <section class="about">
        <div class="container">
            <div class="about__header obsv-header">
                <h2 class="about__h2">О клинике</h2>
                <h3 class="about__subtitle">Вы получите качественное лечение на современном оборудовании по приемлимым
                    ценам</h3>
            </div>
            <div class="about__wrap-content">
                <div class="about__left">
                    <div class="about__b-text">
                        <p class="about__text">
                            Философия клиники Ваша здоровая улыбка – наша работа. В стенах нашей стоматологической
                            клиники Вы всегда можете рассчитывать на профессиональное оказание услуг в кратчайшие сроки.
                        </p>
                    </div>
                    <ul class="about__list">
                        <li class="about__list-item">
                            Современное оборудование, профессионализм врачей, опыт, а главное – внимательное отношение к
                            пациенту.
                        </li>
                        <li class="about__list-item">
                            Главное направление – оказание качественной стоматологической помощи (детская стоматология,
                            терапевтическое лечение, хирургическое лечение, имплантология, ортодонтическое лечение,
                            ортопедия).
                        </li>
                        <li class="about__list-item">
                            Каждый месяц у нас проходят акции и специальные предложения
                        </li>
                    </ul>
                </div>
                <div class="about__right">
                    <div class="about__b-img">
                        <img class="about__img" src="{{asset('img/about/about-img.jpg')}}" alt="Фото кабинета клиники">
                    </div>
                </div>
            </div>
            <div class="about__slider owl-carousel owl-theme">
                <div class="about__slider-item item">
                    <img src="{{asset('img/about/img-slider-1.png')}}" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="{{asset('img/about/img-slider-2.png')}}" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="{{asset('img/about/img-slider-3.png')}}" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="{{asset('img/about/img-slider-4.png')}}" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="{{asset('img/about/img-slider-1.png')}}" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="{{asset('img/about/img-slider-2.png')}}" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="{{asset('img/about/img-slider-3.png')}}" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="{{asset('img/about/img-slider-4.png')}}" alt="">
                </div>
            </div>
            <div class="about__slider-dots">
                <ul class="owl-dots owl-dots--about">
                </ul>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="reviews__header obsv-header">
                <h2 class="reviews__h2">Отзывы</h2>
                <h3 class="reviews__subtitle">
                    Нашу клинику за годы работы посетили сотни пациентов. Всегда рады видеть довольных клиентов. Ваша
                    улыбка - это наша работа!
                </h3>
            </div>
            <div class="reviews__slider owl-carousel owl-theme">
                @foreach($reviews as $review)
                    <article class="reviews__slider-item item">
                        <div class="reviews__slider-item-content">
                            <img src="{{asset('upload') . '/' . $review->img}}" alt="Пользователь" class="reviews__img">
                            <div class="reviews__desc">
                                <p class="reviews__desc-name">
                                    {{$review->name}}
                                    {{$review->surname}}
                                </p>
                                <p class="reviews__desc-text">
                                    {{$review->review}}
                                </p>
                            </div>
                        </div>
                        <div class="reviews__wrap-date">
                            <time class="reviews__date">{{$review->created_at}}</time>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="reviews__slider-dots">
                <ul class="owl-dots owl-dots--reviews">
                </ul>
            </div>
            <div class="reviews__feedback">
                <p class="reviews__feedback-title reviews__feedback-add">Оставить отзыв</p>
                <span>|</span>
                <a class="reviews__show-all" href="{{route('review.index')}}">Показать все</a>
                <a href=""><img src="{{asset('img/VK.svg')}}" alt="Иконка Вконтакте" class="reviews__feedback-icon"></a>
            </div>
        </div>
    </section>
    <section class="license">
        <div class="container">
            <div class="license__header obsv-header">
                <h2 class="license__h2">Лицензии и награды</h2>
                <h3 class="license__subtitle">
                    Деятельность клиники сертифицирована, мы имеем все необходимые лицензии и разрешающие документы.
                </h3>
            </div>
            <div class="license__slider owl-carousel owl-theme">
                @foreach($licenses as $license)
                <div class="license__slider-item item">
                    <img class="license__img" src="{{asset('img/about/license') . '/' . $license->image}}" alt="Лицензия">
                </div>
                @endforeach
            </div>
            <div class="license__slider-dots">
                <ul class="owl-dots owl-dots--license">
                </ul>
            </div>
        </div>
    </section>

    <div class="popup-review">
        <div class="dm-table">
            <div class="dm-cell">
                <div class="dm-modal">
                    <form id="popup__form-review" class="popup__form" method="post" enctype="multipart/form-data">
                        <button class="popup__close popup__close--review">&times;</button>
                        @csrf
                        <p class="popup__form-title">
                            Оставить отзыв
                        </p>
                        <input class="popup__form-name" name="name" type="text" placeholder="Имя" value="{{ old('name') }}">
                        <input class="popup__form-surname" name="surname" type="text" placeholder="Фамилия" value="{{ old('surname') }}">
                        <textarea class="popup__form-text" name="review" placeholder="Ваш отзыв" cols="50" rows="10" value="{{ old('review') }}"></textarea>
                        <input class="popup__form-file" name="file" type="file" id="file" accept="image/png, image/jpeg" multiple="false" value="user-photo.png">
                        <label for="file"><strong>Загрузить фото</strong></label>
                        <img id="user-photo" src="upload/user-photo.png">
                        <div class="b-captcha">
                            <span id="b-captcha__img">{!! captcha_img() !!}</span>
                            <button id="b-captcha__reload"><img src="{{asset('img/reload.svg')}}" alt="Обновить"></button>
                        </div>
                        <input class="popup__form-captcha" name="captcha" type="text">
                        <div class="success">
                            <div class="success-msg"></div>
                            <button class="success-close">&times;</button>
                        </div>
                        <button type="submit" class="btn btn--review-send">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div style="display: none;">
        <div class="box-modal box-modal--container" id="popup-image">
            <div class="box-modal_close arcticmodal-close">закрыть</div>
            <div class="box-modal__image">
                <img id="photo-review" class="popup__image-item" alt="Фото пользователя">
            </div>
            <div class="box-modal__btn">
                <button class="btn btn--resize">Обрезать</button>
            </div>
        </div>
    </div>

@endsection
@section('slider-css')
    <link rel="stylesheet" href="{{asset('owlCarousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('owlCarousel/assets/owl.theme.default.min.css')}}">
@endsection
@section('slider-js')
    <script src="{{asset('owlCarousel/owl.carousel.min.js')}}"></script>
@endsection
@section('slider-about')
    <script>
        $(document).ready(function () {
            $('.about__slider').owlCarousel({
                items: 4,
                loop: true,
                margin: 30,
                nav: true,
                navText: ["<div class='arrow-slider arrow-slider--about arrow-prev'></div>", "<div class='arrow-slider arrow-slider--about arrow-next'></div>"],
                dots: true,
                dotsEach: 4,
                dotsContainer: '.owl-dots--about',
                responsive: {
                    0: {
                        items: 1,
                        dotsEach: 1,
                    },
                    768: {
                        items: 2,
                        dotsEach: 2,
                    },
                    992: {
                        items: 4
                    }
                }
            });
            $('.reviews__slider').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                nav: true,
                navText: ["<div class='arrow-slider arrow-slider--reviews arrow-prev'></div>", "<div class='arrow-slider arrow-slider--reviews arrow-next'></div>"],
                dots: true,
                dotsEach: 1,
                dotsContainer: '.owl-dots--reviews',
                autoHeight: true,
            });
            $('.license__slider').owlCarousel({
                items: 4,
                loop: true,
                margin: 30,
                nav: true,
                navText: ["<div class='arrow-slider arrow-slider--license arrow-prev'></div>", "<div class='arrow-slider arrow-slider--license arrow-next'></div>"],
                dots: true,
                dotsEach: 4,
                dotsContainer: '.owl-dots--license',
                responsive: {
                    0: {
                        items: 1,
                        dotsEach: 1,
                    },
                    768: {
                        items: 2,
                        dotsEach: 2,
                    },
                    992: {
                        items: 4
                    }
                }
            });
        });
    </script>
@endsection
@section('review-js')
    <script src="{{asset('js/croppie/croppie.js')}}"></script>
    <script src="{{asset('js/arcticmodal/jquery.arcticmodal.js')}}"></script>
    <script src="{{asset('js/image-crop.js')}}"></script>
    <script src="{{asset('js/review.js')}}"></script>
@endsection
