$(document).ready(function(){
    /* Интерактив обратной формы связи */
    let popup_form_tel = document.querySelectorAll('.popup__form-tel');
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
    closeFeedbackForm.addEventListener("click", closeOnClickFeedbackForm);

    function closeOnClickFeedbackForm(e) {
        e.preventDefault();
        formFeedback.classList.remove("open");
        document.body.classList.remove("noscroll");
        $('.success').removeClass('submitted');
    }

    /* Интерактив отзывов */
    let btnReviewAdd = document.querySelectorAll('.reviews__feedback-add');
    let formReview = document.querySelector('.popup-review');
    btnReviewAdd.forEach(function (btn) {
        return btn.addEventListener("click", formReviewHandler);
    });

    function formReviewHandler(e) {
        e.preventDefault();
        formReview.classList.toggle("open");
        document.body.classList.toggle("noscroll");
    }

    let closeReviewForm = document.querySelector('.popup__close--review');
    if(closeReviewForm) {
        closeReviewForm.addEventListener("click", closeOnClickReviewForm);

        function closeOnClickReviewForm(e) {
            e.preventDefault();
            formReview.classList.remove("open");
            document.body.classList.remove("noscroll");
            $('.success').removeClass('submitted');
        }
    }

    /* Интерактив электронного помощника */
    let popupHelpers = document.querySelector('.popup--helpers');
    let id;

    $(document).on('click', '.helpers__form', function(e){
        e.preventDefault();
        id = $(this).data('id-department');

        $.ajax({
            url: "/doctors/helper/" + id,
            type: "GET",
            success: function (response) {
                $('.popup--helpers').html(response.tmp);

                $(popupHelpers).addClass("open");
                $(document.body).addClass("noscroll");

                let closeHelperForm = document.querySelector('.popup__close--helpers');
                let closeOnClickHelperForm = function closeOnClickHelperForm(e) {
                    e.preventDefault();
                    $(popupHelpers).removeClass("open");
                    $(document.body).removeClass("noscroll");
                    $('.popup--helpers').html("");
                };
                closeHelperForm.addEventListener("click", closeOnClickHelperForm);

                console.log(response.success);
            },
        });
    });

    /* Запись к конкретному врачу */
    let doctorPopup = document.querySelector('.popup--doctor');

    $(document).on('click', '.popup__form-doctor', function(e) {
        e.preventDefault();

        id = $(this).data('id-doctor');

        $.ajax({
            url: "/doctors/doctor/" + id,
            type: "GET",
            success: function (response) {
                $('.popup--doctor').html(response.tmp);

                $(doctorPopup).addClass("open");
                $(popupHelpers).removeClass("open");

                let closeDoctorForm = document.querySelector('.popup__close--doctor');
                let closeOnClickDoctorForm = function closeOnClickDoctorForm(e) {
                    e.preventDefault();
                    $(doctorPopup).removeClass("open");
                    $(document.body).removeClass("noscroll");
                    $('.popup--doctor').html("");
                    $('.popup--helpers').html("");
                    $('.success').removeClass('submitted');
                };
                closeDoctorForm.addEventListener("click", closeOnClickDoctorForm);

                popup_form_tel = document.querySelector('.popup__form-tel');
                $(popup_form_tel).inputmask({"mask": "+7(999)999-99-99"});

                console.log(response.success);
            }
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
});
