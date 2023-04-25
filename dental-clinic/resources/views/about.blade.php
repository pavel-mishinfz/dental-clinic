@extends('templates.layout')
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
                        <img class="about__img" src="img/about/about-img.jpg" alt="Фото кабинета клиники">
                    </div>
                </div>
            </div>
            <div class="about__slider owl-carousel owl-theme">
                <div class="about__slider-item item">
                    <img src="img/about/img-slider-1.png" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="img/about/img-slider-2.png" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="img/about/img-slider-3.png" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="img/about/img-slider-4.png" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="img/about/img-slider-1.png" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="img/about/img-slider-2.png" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="img/about/img-slider-3.png" alt="">
                </div>
                <div class="about__slider-item item">
                    <img src="img/about/img-slider-4.png" alt="">
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
                <article class="reviews__slider-item item">
                    <div class="reviews__slider-item-content">
                        <img src="img/about/reviews/icon-slider-1.svg" alt="Пользователь" class="reviews__img">
                        <div class="reviews__desc">
                            <p class="reviews__desc-name">
                                Юрьева Оксана
                            </p>
                            <p class="reviews__desc-text">
                                Клиника чистая, уютная. Персонал улыбчивый, вежливый, услужливый. Всегда объяснят если
                                что
                                не понятно несколько раз, с таким персоналом приятно общаться. Мне уделили довольно
                                много
                                времени, всё подробно рассказали и проконсультировали.
                            </p>
                        </div>
                    </div>
                    <div class="reviews__wrap-date">
                        <time class="reviews__date">12.02.2020</time>
                    </div>
                </article>
                <article class="reviews__slider-item item">
                    <div class="reviews__slider-item-content">
                        <img src="img/about/reviews/icon-slider-2.svg" alt="Пользователь" class="reviews__img">
                        <div class="reviews__desc">
                            <p class="reviews__desc-name">
                                Викина Вика
                            </p>
                            <p class="reviews__desc-text">
                                Хочу сказать огромное СПАСИБО врачам и персоналу Стоматологии Семейный Доктор. Я ваш
                                вечный
                                клиент и главное эксклюзивный. Очень рада что мы познакомились. СПАСИБО!
                            </p>
                        </div>
                    </div>
                    <div class="reviews__wrap-date">
                        <time class="reviews__date">12.02.2020</time>
                    </div>
                </article>
                <article class="reviews__slider-item item">
                    <div class="reviews__slider-item-content">
                        <img src="img/about/reviews/icon-slider-1.svg" alt="Пользователь" class="reviews__img">
                        <div class="reviews__desc">
                            <p class="reviews__desc-name">
                                Юрьева Оксана
                            </p>
                            <p class="reviews__desc-text">
                                Клиника чистая, уютная. Персонал улыбчивый, вежливый, услужливый. Всегда объяснят если
                                что
                                не понятно несколько раз, с таким персоналом приятно общаться. Мне уделили довольно
                                много
                                времени, всё подробно рассказали и проконсультировали.
                            </p>
                        </div>
                    </div>
                    <div class="reviews__wrap-date">
                        <time class="reviews__date">12.02.2020</time>
                    </div>
                </article>
                <article class="reviews__slider-item item">
                    <div class="reviews__slider-item-content">
                        <img src="img/about/reviews/icon-slider-2.svg" alt="Пользователь" class="reviews__img">
                        <div class="reviews__desc">
                            <p class="reviews__desc-name">
                                Викина Вика
                            </p>
                            <p class="reviews__desc-text">
                                Хочу сказать огромное СПАСИБО врачам и персоналу Стоматологии Семейный Доктор. Я ваш
                                вечный
                                клиент и главное эксклюзивный. Очень рада что мы познакомились. СПАСИБО!
                            </p>
                        </div>
                    </div>
                    <div class="reviews__wrap-date">
                        <time class="reviews__date">12.02.2020</time>
                    </div>
                </article>
                <article class="reviews__slider-item item">
                    <div class="reviews__slider-item-content">
                        <img src="img/about/reviews/icon-slider-1.svg" alt="Пользователь" class="reviews__img">
                        <div class="reviews__desc">
                            <p class="reviews__desc-name">
                                Юрьева Оксана
                            </p>
                            <p class="reviews__desc-text">
                                Клиника чистая, уютная. Персонал улыбчивый, вежливый, услужливый. Всегда объяснят если
                                что
                                не понятно несколько раз, с таким персоналом приятно общаться. Мне уделили довольно
                                много
                                времени, всё подробно рассказали и проконсультировали.
                            </p>
                        </div>
                    </div>
                    <div class="reviews__wrap-date">
                        <time class="reviews__date">12.02.2020</time>
                    </div>
                </article>
                <article class="reviews__slider-item item">
                    <div class="reviews__slider-item-content">
                        <img src="img/about/reviews/icon-slider-2.svg" alt="Пользователь" class="reviews__img">
                        <div class="reviews__desc">
                            <p class="reviews__desc-name">
                                Викина Вика
                            </p>
                            <p class="reviews__desc-text">
                                Хочу сказать огромное СПАСИБО врачам и персоналу Стоматологии Семейный Доктор. Я ваш
                                вечный
                                клиент и главное эксклюзивный. Очень рада что мы познакомились. СПАСИБО!
                                Хочу сказать огромное СПАСИБО врачам и персоналу Стоматологии Семейный Доктор. Я ваш
                                вечный
                                клиент и главное эксклюзивный. Очень рада что мы познакомились. СПАСИБО!
                                Хочу сказать огромное СПАСИБО врачам и персоналу Стоматологии Семейный Доктор. Я ваш
                                вечный
                                клиент и главное эксклюзивный. Очень рада что мы познакомились. СПАСИБО!
                                Хочу сказать огромное СПАСИБО врачам и персоналу Стоматологии Семейный Доктор. Я ваш
                                вечный
                                клиент и главное эксклюзивный. Очень рада что мы познакомились. СПАСИБО!
                            </p>
                        </div>
                    </div>
                    <div class="reviews__wrap-date">
                        <time class="reviews__date">12.02.2020</time>
                    </div>
                </article>
                <article class="reviews__slider-item item">
                    <div class="reviews__slider-item-content">
                        <img src="img/about/reviews/icon-slider-1.svg" alt="Пользователь" class="reviews__img">
                        <div class="reviews__desc">
                            <p class="reviews__desc-name">
                                Юрьева Оксана
                            </p>
                            <p class="reviews__desc-text">
                                Клиника чистая, уютная. Персонал улыбчивый, вежливый, услужливый. Всегда объяснят если
                                что
                                не понятно несколько раз, с таким персоналом приятно общаться. Мне уделили довольно
                                много
                                времени, всё подробно рассказали и проконсультировали.
                            </p>
                        </div>
                    </div>
                    <div class="reviews__wrap-date">
                        <time class="reviews__date">12.02.2020</time>
                    </div>
                </article>
                <article class="reviews__slider-item item">
                    <div class="reviews__slider-item-content">
                        <img src="img/about/reviews/icon-slider-2.svg" alt="Пользователь" class="reviews__img">
                        <div class="reviews__desc">
                            <p class="reviews__desc-name">
                                Викина Вика
                            </p>
                            <p class="reviews__desc-text">
                                Хочу сказать огромное СПАСИБО врачам и персоналу Стоматологии Семейный Доктор. Я ваш
                                вечный
                                клиент и главное эксклюзивный. Очень рада что мы познакомились. СПАСИБО!
                            </p>
                        </div>
                    </div>
                    <div class="reviews__wrap-date">
                        <time class="reviews__date">12.02.2020</time>
                    </div>
                </article>
            </div>
            <div class="reviews__slider-dots">
                <ul class="owl-dots owl-dots--reviews">
                </ul>
            </div>
            <div class="reviews__feedback">
                <a class="reviews__feedback-title" href="">Оставить отзыв</a>
                <a href=""><img src="img/VK.svg" alt="Иконка Вконтакте" class="reviews__feedback-icon"></a>
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
                    <img class="license__img" src="img/about/license/{{$license->image}}" alt="Лицензия">
                </div>
                @endforeach
            </div>
            <div class="license__slider-dots">
                <ul class="owl-dots owl-dots--license">
                </ul>
            </div>
        </div>
    </section>
@endsection
@section('slider-css')
    <link rel="stylesheet" href="owlCarousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="owlCarousel/assets/owl.theme.default.min.css">
@endsection
@section('slider-js')
    <script src="owlCarousel/owl.carousel.min.js"></script>
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
