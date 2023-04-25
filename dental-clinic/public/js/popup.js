/******/
(() => { // webpackBootstrap
    let __webpack_exports__ = {};
    /*!*******************************!*\
      !*** ./resources/js/popup.js ***!
      \*******************************/
    /* Интерактив обратной формы связи */
    let popup_form_tel = document.querySelector('.popup__form-tel');
    $(popup_form_tel).inputmask({"mask": "+7(999)999-99-99"});

    let buttonsFeedback = document.querySelectorAll('.btn--feedback');
    let formFeedback = document.querySelector('.popup-feedback');
    buttonsFeedback.forEach(function (btn) {
        return btn.addEventListener("click", formFeedbackHandler);
    });

    function formFeedbackHandler(e) {
        e.preventDefault();
        formFeedback.classList.toggle("open");
        document.body.classList.toggle("noscroll");
    }

    let closeFeedbackForm = document.querySelector('.popup__close--feedback');
    closeFeedbackForm.addEventListener("click", closeOnClickForm);

    function closeOnClickForm(e) {
        e.preventDefault();
        formFeedback.classList.remove("open");
        document.body.classList.remove("noscroll");
    }

    /* Интерактив электронного помощника */
    let helpersForms = document.querySelectorAll('.helpers__form');
    let popupHelpers = document.querySelector('.popup--helpers');

    $(helpersForms).each(function () {
        $(this).on('submit', function (e) {
            e.preventDefault();

            let id = $(this).data('id-department');

            $.ajax({
                url: "/popup/helpers",
                type: "GET",
                data: {
                    id: id,
                },
                success: function (response) {
                    $('.popup--helpers').html(response.tmp);

                    $(popupHelpers).addClass("open");
                    $(document.body).addClass("noscroll");

                    let closeHelperForm = document.querySelector('.popup__close--helpers');
                    let closeOnClickHelperForm = function closeOnClickHelperForm(e) {
                        e.preventDefault();
                        $(popupHelpers).removeClass("open");
                        $(document.body).removeClass("noscroll");
                    };
                    closeHelperForm.addEventListener("click", closeOnClickHelperForm);

                    /* Запись к конкретному врачу */
                    let doctorForms = document.querySelectorAll('.popup__form-doctor');
                    let doctorPopup = document.querySelector('.popup--doctor');

                    $(doctorForms).each(function(){
                        $(this).on('submit', function (e){
                            e.preventDefault();

                            id = $(this).data('id-doctor');

                            $.ajax({
                                url: "/popup/doctor",
                                type: "GET",
                                data: {
                                    id: id,
                                },
                                success: function (response) {
                                    $('.popup--doctor').html(response.tmp);

                                    $(doctorPopup).addClass("open");
                                    $(popupHelpers).removeClass("open");

                                    let closeDoctorForm = document.querySelector('.popup__close--doctor');
                                    let closeOnClickDoctorForm = function closeOnClickDoctorForm(e) {
                                        e.preventDefault();
                                        $(doctorPopup).removeClass("open");
                                        $(document.body).removeClass("noscroll");
                                    };
                                    closeDoctorForm.addEventListener("click", closeOnClickDoctorForm);

                                    popup_form_tel = document.querySelector('.popup__form-tel');
                                    $(popup_form_tel).inputmask({"mask": "+7(999)999-99-99"});

                                    console.log(response.success);
                                }
                            });
                        });
                    });

                    console.log(response.success);
                },
            });
        });
    });

    /* Узнать цены */
    let priceButtons = document.querySelectorAll('.btn--price');
    let pricePopup = document.querySelector('.popup--price-list');
    priceButtons.forEach(function (btn) {
        return btn.addEventListener("click", pricePopupHandler);
    });

    function pricePopupHandler(e) {
        e.preventDefault();
        pricePopup.classList.toggle("open");
        document.body.classList.toggle("noscroll");
    }

    let closePricePopup = document.querySelector('.popup__close--price-list');
    if (closePricePopup) {
        let closeOnClickPricePopup = function closeOnClickPricePopup(e) {
            e.preventDefault();
            pricePopup.classList.remove("open");
            document.body.classList.remove("noscroll");
        };
        closePricePopup.addEventListener("click", closeOnClickPricePopup);
    }
    /******/
})()
;
