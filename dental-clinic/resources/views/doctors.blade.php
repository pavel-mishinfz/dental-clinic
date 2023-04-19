@extends('templates.layout')
@section('content')
    <section class="doctors">
        <div class="container">
            <div class="doctors__header obsv-header">
                <h2 class="doctors__h2">Врачи</h2>
                <h3 class="doctors__subtitle">
                    В нашей клинике работают высококлассные специалисты с большим опытом работы. Выберите подходящего
                    врача и запишитесь на консультацию.
                </h3>
            </div>

            <div class="doctors__wrap">
                <div class="doctors__left owl-dots">
                    @foreach($doctors as $doctor)
                    <button class="doctors__preview owl-dot">
                        <p class="doctors__preview-name">
                            {{$doctor->surname}}
                            {{$doctor->name}}
                            {{$doctor->lastname}}
                        </p>
                        <div class="doctors__preview-desc">
                            <p class="doctors__preview-prof">
                                {{$doctor->position}}
                                @if($doctor->experience > 20)
                                    <span>Ведущий специалист</span>
                                @endif
                            </p>
                        </div>
                    </button>
                    @endforeach
                </div>
                <div class="doctors__right">
                    <div class="doctors__wrap-slider">
                        <div class="doctors__slider owl-carousel owl-theme">
                            @foreach($doctors as $doctor)
                            <div class="doctors__slider-item item">
                                <img class="doctors__img" src="img/doctors/{{$doctor->image}}"
                                     alt="">
                                <div class="doctors__info">
                                    <p class="doctors__info-name">
                                        {{$doctor->surname}}
                                        {{$doctor->name}}
                                        {{$doctor->lastname}}
                                    </p>
                                    <p class="doctors__info-specialization">
                                        {{$doctor->position}}
                                        @if($doctor->experience > 20)
                                        <span>Ведущий специалист</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="doctors__desc">
                                    <p class="doctors__desc-title">
                                        Опыт работы более {{$doctor->experience}} лет
                                    </p>
                                    <div class="doctors__desc-text">
                                        <span>Действующие сертификаты:</span> {{$doctor->certificates}} <br>
                                        <span>Направленность:</span> {{$doctor->orientation}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <button class="btn btn--doctor btn--feedback">Записаться</button>
                </div>
            </div>
            <div class="doctors__wrap-messenger">
                <div class="doctors__messenger">
                    <div class="doctors__messenger-icon">
                        <a href=""><img src="img/telegram.svg" alt="Иконка телеграмма"></a>
                        <a href=""><img src="img/whatsapp.svg" alt="Иконка whatsapp'a"></a>
                    </div>
                    <p class="doctors__messenger-text">спросить в мессенджере</p>
                </div>
            </div>
            <div class="helpers">
                <h3 class="helpers__h3">
                    Выбрав, интересующую вас услугу, <span>наш электронный помощник</span>, поможет вам быстро подобрать
                    нужного специалиста
                </h3>
                <div class="helpers__wrap-list">
                    <div class="helpers__list">
                        @foreach($departments as $department)
                        <div class="helpers__list-item helpers__list-item--{{substr($department->image, 0, -4)}}">
                            <h4 class="helpers__h4">{{$department->name}}</h4>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('popup--doctor')
    <div class="popup popup--helpers">
        <div class="dm-table">
            <div class="dm-cell">
                <div class="dm-modal">
                    <button class="popup__close popup__close--helpers">&times;</button>
                    <div class="container popup__container">
                        <p class="popup__header">
                            Можете выбрать профильного врача, специализирующегося на <span>Терапия</span>
                        </p>
                        <p class="popup__subtitle">
                            Выберите врача который вам подходит и кликните на его фото:
                        </p>
                        <div class="popup__grid">
                            <div class="popup__grid-wrap-item item--click">
                                <div class="popup__grid-item">
                                    <img class="popup__img" src="img/doctors/person-1.png" alt="Саидов Шамсулло Нарзуллоевич">
                                    <div class="popup__info">
                                        <p class="popup__info-name">
                                            Саидов Шамсулло Нарзуллоевич
                                        </p>
                                        <p class="popup__info-specialization">
                                            Врач-стоматолог
                                            <span>Ведущий специалист</span>
                                        </p>
                                    </div>
                                    <div class="popup__desc">
                                        <p class="popup__desc-title">
                                            Опыт работы более 25 лет
                                        </p>
                                        <div class="popup__desc-text">
                                            <span>Действующие сертификаты:</span>
                                            стоматология ортопедическая;
                                            стоматология хирургическая <br>
                                            <span>Все виды высококачественного протезирования:</span> съемные,
                                            несъемные, безметалловые конструкции, цирконий, проте-
                                            зирование на имплантах, драгметаллах, вкладки, виниры, гнатология и хирургия
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popup__grid-wrap-item item--click">
                                <div class="popup__grid-item">
                                    <img class="popup__img" src="img/doctors/person-1.png" alt="Саидов Шамсулло Нарзуллоевич">
                                    <div class="popup__info">
                                        <p class="popup__info-name">
                                            Саидов Шамсулло Нарзуллоевич
                                        </p>
                                        <p class="popup__info-specialization">
                                            Врач-стоматолог
                                            <span>Ведущий специалист</span>
                                        </p>
                                    </div>
                                    <div class="popup__desc">
                                        <p class="popup__desc-title">
                                            Опыт работы более 25 лет
                                        </p>
                                        <div class="popup__desc-text">
                                            <span>Действующие сертификаты:</span>
                                            стоматология ортопедическая;
                                            стоматология хирургическая <br>
                                            <span>Все виды высококачественного протезирования:</span> съемные,
                                            несъемные, безметалловые конструкции, цирконий, проте-
                                            зирование на имплантах, драгметаллах, вкладки, виниры, гнатология и хирургия
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popup__grid-wrap-item item--click">
                                <div class="popup__grid-item">
                                    <img class="popup__img" src="img/doctors/person-1.png" alt="Саидов Шамсулло Нарзуллоевич">
                                    <div class="popup__info">
                                        <p class="popup__info-name">
                                            Саидов Шамсулло Нарзуллоевич
                                        </p>
                                        <p class="popup__info-specialization">
                                            Врач-стоматолог
                                            <span>Ведущий специалист</span>
                                        </p>
                                    </div>
                                    <div class="popup__desc">
                                        <p class="popup__desc-title">
                                            Опыт работы более 25 лет
                                        </p>
                                        <div class="popup__desc-text">
                                            <span>Действующие сертификаты:</span>
                                            стоматология ортопедическая;
                                            стоматология хирургическая <br>
                                            <span>Все виды высококачественного протезирования:</span> съемные,
                                            несъемные, безметалловые конструкции, цирконий, проте-
                                            зирование на имплантах, драгметаллах, вкладки, виниры, гнатология и хирургия
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popup__grid-wrap-item item--click">
                                <div class="popup__grid-item">
                                    <img class="popup__img" src="img/doctors/person-1.png" alt="Саидов Шамсулло Нарзуллоевич">
                                    <div class="popup__info">
                                        <p class="popup__info-name">
                                            Саидов Шамсулло Нарзуллоевич
                                        </p>
                                        <p class="popup__info-specialization">
                                            Врач-стоматолог
                                            <span>Ведущий специалист</span>
                                        </p>
                                    </div>
                                    <div class="popup__desc">
                                        <p class="popup__desc-title">
                                            Опыт работы более 25 лет
                                        </p>
                                        <div class="popup__desc-text">
                                            <span>Действующие сертификаты:</span>
                                            стоматология ортопедическая;
                                            стоматология хирургическая <br>
                                            <span>Все виды высококачественного протезирования:</span> съемные,
                                            несъемные, безметалловые конструкции, цирконий, проте-
                                            зирование на имплантах, драгметаллах, вкладки, виниры, гнатология и хирургия
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup__footer">
                            <a href="" class="popup__footer-other">
                                Хотите выбрать другую услугу?
                            </a>
                            <a href="" class="popup__footer-refresh">
                                На главную
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup popup--doctor">
        <div class="dm-table">
            <div class="dm-cell">
                <div class="dm-modal">
                    <button class="popup__close popup__close--doctor">&times;</button>
                    <div class="container popup__container popup__container--popup">
                        <p class="popup__header popup__header--doctor">
                            <span>Вы выбрали</span> <span>Иванова Оксана Григорьевна</span>. Поздравляем,
                            это отличный специалист, настоящий профессионал своего дела
                        </p>
                        <div class="popup__grid popup__grid--doctor">
                            <div class="popup__grid-wrap-item">
                                <div class="popup__grid-item popup__grid-item--left">
                                    <img class="popup__img popup__img--doctor" src="img/doctors/person-1.png"
                                         alt="Саидов Шамсулло Нарзуллоевич">
                                    <div class="popup__info">
                                        <p class="popup__info-name">
                                            Саидов Шамсулло Нарзуллоевич
                                        </p>
                                        <p class="popup__info-specialization">
                                            Врач-стоматолог
                                            <span>Ведущий специалист</span>
                                        </p>
                                    </div>
                                    <div class="popup__desc">
                                        <p class="popup__desc-title">
                                            Опыт работы более 25 лет
                                        </p>
                                        <div class="popup__desc-text">
                                            <span>Действующие сертификаты:</span>
                                            стоматология ортопедическая;
                                            стоматология хирургическая <br>
                                            <span>Все виды высококачественного протезирования:</span> съемные,
                                            несъемные, безметалловые конструкции, цирконий, проте-
                                            зирование на имплантах, драгметаллах, вкладки, виниры, гнатология и хирургия
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popup__grid-wrap-item">
                                <div class="popup__right">
                                    <p class="popup__right-title">
                                        Напишите свой номер телефона, и вам перезвонят в ближайшее время чтобы уточнить время приема
                                        у
                                        <br>
                                        <span>Иванова Оксана Григорьевна</span>
                                    </p>
                                    <div class="popup__messenger">
                                        <div class="popup__messenger-icon">
                                            <a href=""><img src="img/telegram.svg" alt="Иконка телеграмма"></a>
                                            <a href=""><img src="img/whatsapp.svg" alt="Иконка whatsapp'a"></a>
                                        </div>
                                        <p class="card__messenger-text">
                                            спросить в мессенджере
                                        </p>
                                    </div>
                                    <form action="" class="popup__form" method="post">
                                        <p class="popup__form-title">
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
                            </div>
                        </div>
                        <div class="popup__footer popup__footer--doctor">
                            <a href="" class="popup__footer-other">
                                Хотите выбрать другого специалиста?
                            </a>
                            <a href="" class="popup__footer-refresh">
                                На главную
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('slider-css')
    <link rel="stylesheet" href="owlCarousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="owlCarousel/assets/owl.theme.default.min.css">
@endsection
@section('slider-js')
    <script src="owlCarousel/owl.carousel.min.js"></script>
@endsection
@section('slider-doctor')
    <script>
        $(document).ready(function () {
            $('.doctors__slider').owlCarousel({
                items: 1,
                nav: true,
                navText: ["<div class='arrow-slider arrow-prev'></div>", "<div class='arrow-slider arrow-next'></div>"],
                loop: true,
                dots: true,
                dotsEach: 1,
                dotsContainer: '.doctors__left.owl-dots',
            });
        });
    </script>
@endsection

