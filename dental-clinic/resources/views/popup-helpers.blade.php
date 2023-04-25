<div class="dm-table">
    <div class="dm-cell">
        <div class="dm-modal">
            <div class="container popup__container">
                <button class="popup__close popup__close--helpers">&times;</button>
                <p class="popup__header">
                    Можете выбрать профильного врача, специализирующегося на <span>{{$department_name}}</span>
                </p>
                <p class="popup__subtitle">
                    Выберите врача который вам подходит и кликните на его фото:
                </p>
                <div class="popup__grid">
                    @foreach($department_doctors as $department_doctor)
                        <form class="popup__form-doctor" data-id-doctor="{{$department_doctor->id}}" method="get">
                            <button type="submit" class="popup__grid-wrap-item item--click">
                                <div class="popup__grid-item">
                                    <img class="popup__img" src="img/doctors/{{$department_doctor->image}}"
                                         alt="{{$department_doctor->name}}">
                                    <div class="popup__info">
                                        <p class="popup__info-name">
                                            {{$department_doctor->surname}}
                                            {{$department_doctor->name}}
                                            {{$department_doctor->lastname}}
                                        </p>
                                        <p class="popup__info-specialization">
                                            {{$department_doctor->position}}
                                            @if($department_doctor->experience > 20)
                                                <span>Ведущий специалист</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="popup__desc">
                                        <p class="popup__desc-title">
                                            Опыт работы более {{$department_doctor->experience}} лет
                                        </p>
                                        <div class="popup__desc-text">
                                            <span>Действующие сертификаты:</span> {{$department_doctor->certificates}}
                                            <br>
                                            <span>Направленность:</span> {{$department_doctor->orientation}}
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </form>
                    @endforeach
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
