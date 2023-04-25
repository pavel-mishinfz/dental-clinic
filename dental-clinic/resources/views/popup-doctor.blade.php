<div class="dm-table">
    <div class="dm-cell">
        <div class="dm-modal">
            <div class="container popup__container popup__container--popup">
                <button class="popup__close popup__close--doctor">&times;</button>
                <p class="popup__header popup__header--doctor">
                    <span>Вы выбрали</span> <span>{{$doctor->surname}} {{$doctor->name}} {{$doctor->lastname}}</span>. Поздравляем,
                    это отличный специалист, настоящий профессионал своего дела
                </p>
                <p class="popup__subtitle">
                    Напишите свой номер телефона, и вам перезвонят в ближайшее время чтобы уточнить
                    время приема
                    у
                    <span>{{$doctor->surname}} {{$doctor->name}} {{$doctor->lastname}}</span>
                </p>
                <div class="popup__grid popup__grid--doctor">
                    <div class="popup__grid-wrap-item">
                        <div class="popup__grid-item popup__grid-item--left">
                            <img class="popup__img popup__img--doctor" src="img/doctors/{{$doctor->image}}"
                                 alt="{{$doctor->name}}">
                            <div class="popup__info">
                                <p class="popup__info-name">
                                    {{$doctor->surname}}
                                    {{$doctor->name}}
                                    {{$doctor->lastname}}
                                </p>
                                <p class="popup__info-specialization">
                                    {{$doctor->position}}
                                    @if($doctor->experience > 20)
                                        <span>Ведущий специалист</span>
                                    @endif
                                </p>
                            </div>
                            <div class="popup__desc">
                                <p class="popup__desc-title">
                                    Опыт работы более {{$doctor->experience}} лет
                                </p>
                                <div class="popup__desc-text">
                                    <span>Действующие сертификаты:</span> {{$doctor->certificates}}
                                    <br>
                                    <span>Направленность:</span> {{$doctor->orientation}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup__grid-wrap-item">
                        <div class="popup__right">
                            <form id="popup__form-feedback" class="popup__form" method="post">
                                @csrf
                                <p class="popup__form-title">
                                    В ходе консультации вы получите 2-3 плана качественного лечения под ваш
                                    бюджет
                                </p>
                                <input class="popup__form-name" name="name" type="text" placeholder="Имя" value="{{ old('name') }}">
                                <input class="popup__form-surname" name="surname" type="text" placeholder="Фамилия" value="{{ old('surname') }}">
                                <input class="popup__form-lastname" name="lastname" type="text" placeholder="Отчество" value="{{ old('lastname') }}">
                                <input class="popup__form-tel" name="phone" type="tel" placeholder="Телефон">
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

