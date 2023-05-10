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
                <ul class="doctors__left owl-dots">
                    @foreach($doctors as $doctor)
                        <li class="doctors__preview owl-dot">
                            <figure>
                                <img class="doctors__preview-img" src="img/doctors/{{$doctor->icon}}" alt="Иконка врача">
                                <figcaption>
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
                                </figcaption>
                            </figure>
                        </li>
                    @endforeach
                </ul>
                <div class="doctors__right">
                    <div class="doctors__wrap-slider">
                        <div class="doctors__slider owl-carousel owl-theme">
                            @foreach($doctors as $doctor)
                                <div class="doctors__slider-item item" style="width: 100%">
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
                            <form class="helpers__form" data-id-department="{{$department->id}}" method="get">
                                <button class="helpers__list-item helpers__list-item--{{substr($department->image, 0, -4)}}">
                                    <h4 class="helpers__h4">{{$department->name}}</h4>
                                    <img class="helpers__img" src="img/doctors/helpers/{{$department->icon}}" >
                                </button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('popup--doctors')
    <div class="popup popup--helpers"></div>

    <div class="popup popup--doctor"></div>
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
                dotsData: true,
                dots: true,
                dotsEach: 6,
                dotsContainer: '.doctors__left',
            });

            $('.owl-dot').click(function () {
                $('.doctors__slider').trigger('to.owl.carousel', [$(this).index(), 300]);
            });

        });
    </script>
@endsection

