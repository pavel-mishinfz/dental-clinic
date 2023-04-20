<div class="dm-table">
    <div class="dm-cell">
        <div class="dm-modal">
            <button class="popup__close popup__close--doctor">&times;</button>
            <div class="container popup__container popup__container--popup">
                <p class="popup__header popup__header--doctor">
                    <span>Вы выбрали</span> <span>{{$doctor->surname}} {{$doctor->name}} {{$doctor->lastname}}</span>. Поздравляем,
                    это отличный специалист, настоящий профессионал своего дела
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
                            <p class="popup__right-title">
                                Напишите свой номер телефона, и вам перезвонят в ближайшее время чтобы уточнить
                                время приема
                                у
                                <br>
                                <span>{{$doctor->surname}} {{$doctor->name}} {{$doctor->lastname}}</span>
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
                                    В ходе консультации вы получите 2-3 плана качественного лечения под ваш
                                    бюджет
                                </p>
                                <input class="popup__form-name" type="text" placeholder="Имя" maxlength="30"
                                       required>
                                <input class="popup__form-tel" type="tel" placeholder="Телефон" maxlength="11"
                                       required>
                                <div class="b-checkbox">
                                    <input class="b-checkbox__btn" type="checkbox" name="personal-data"
                                           id="personal-data">
                                    <label class="b-checkbox__label" for="personal-data">Я согласен на обработку
                                        моих <span>персональных данных</span></label>
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
