@extends('templates.layout')
@section('csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('review-css')
    <link rel="stylesheet" href="{{asset('css/croppie/croppie.css')}}" />
    <link rel="stylesheet" href="{{asset('css/arcticmodal/jquery.arcticmodal.css')}}" />
    <link rel="stylesheet" href="{{asset('css/arcticmodal/themes/simple.css')}}" />
@endsection
@yield('reviews-bootstrap')
@section('content')
    <section class="reviews">
        <div class="container">
            <div class="reviews__header obsv-header">
                <h2 class="reviews__h2">Отзывы</h2>
                <h3 class="reviews__subtitle">
                    Нашу клинику за годы работы посетили сотни пациентов. Всегда рады видеть довольных клиентов. Ваша
                    улыбка - это наша работа!
                </h3>
            </div>
            @foreach($reviews as $review)
                <article class="reviews__slider-item item">
                    <div class="reviews__slider-item-content">
                        <img src="{{asset('upload') . '/' . $review->img}}" alt="Пользователь" class="reviews__img reviews__img--static">
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
            <div class="reviews__feedback reviews__feedback--margin">
                <p class="reviews__feedback-title reviews__feedback-add">Оставить отзыв</p>
                <a href=""><img src="{{asset('img/VK.svg')}}" alt="Иконка Вконтакте" class="reviews__feedback-icon"></a>
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
                        <img id="user-photo" src="{{asset('upload/user-photo.png')}}">
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
@section('review-js')
    <script src="{{asset('js/croppie/croppie.js')}}"></script>
    <script src="{{asset('js/arcticmodal/jquery.arcticmodal.js')}}"></script>
    <script src="{{asset('js/image-crop.js')}}"></script>
    <script src="{{asset('js/review.js')}}"></script>
@endsection
