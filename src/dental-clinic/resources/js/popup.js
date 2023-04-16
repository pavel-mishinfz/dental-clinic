/* Интерактив обратной формы связи */
const buttonsFeedback = document.querySelectorAll('.btn--feedback');
const formFeedback = document.querySelector('.popup-feedback');

buttonsFeedback.forEach((btn) => btn.addEventListener("click", formFeedbackHandler));

function formFeedbackHandler(e) {
    e.preventDefault();
    formFeedback.classList.toggle("open");
    body.classList.toggle("noscroll");
}

const closeFeedbackForm = document.querySelector('.popup__close--feedback');

closeFeedbackForm.addEventListener("click", closeOnClickForm);

function closeOnClickForm(e) {
    e.preventDefault();
    formFeedback.classList.remove("open");
    body.classList.remove("noscroll");
}

/* Интерактив электронного помощника */
const helperItems = document.querySelectorAll('.helpers__list-item');
const helperPopup = document.querySelector('.popup');

helperItems.forEach((item) => item.addEventListener("click", helperItemsHandler));

function helperItemsHandler(e) {
    e.preventDefault();
    helperPopup.classList.toggle("open");
    body.classList.toggle("noscroll");
}

const closeHelperForm = document.querySelector('.popup__close--helpers');
if (closeHelperForm) {

    closeHelperForm.addEventListener("click", closeOnClickHelperForm);

    function closeOnClickHelperForm(e) {
        e.preventDefault();
        helperPopup.classList.remove("open");
        body.classList.remove("noscroll");
    }
}

/* Запись к конкретному врачу */
const doctorItems = document.querySelectorAll('.item--click');
const doctorPopup = document.querySelector('.popup--doctor');

doctorItems.forEach((item) => item.addEventListener("click", doctorItemsHandler));

function doctorItemsHandler(e) {
    e.preventDefault();
    doctorPopup.classList.toggle("open");
    helperPopup.classList.remove("open");
}

const closeDoctorForm = document.querySelector('.popup__close--doctor');
if (closeDoctorForm) {
    closeDoctorForm.addEventListener("click", closeOnClickDoctorForm);

    function closeOnClickDoctorForm(e) {
        e.preventDefault();
        doctorPopup.classList.remove("open");
        body.classList.remove("noscroll");
    }
}

/* Узнать цены */
const priceButtons = document.querySelectorAll('.btn--price');
const pricePopup = document.querySelector('.popup--price-list');

priceButtons.forEach((btn) => btn.addEventListener("click", pricePopupHandler));

function pricePopupHandler(e) {
    e.preventDefault();
    pricePopup.classList.toggle("open");
    body.classList.toggle("noscroll");
}

const closePricePopup = document.querySelector('.popup__close--price-list');
if (closePricePopup) {
    closePricePopup.addEventListener("click", closeOnClickPricePopup);

    function closeOnClickPricePopup(e) {
        e.preventDefault();
        pricePopup.classList.remove("open");
        body.classList.remove("noscroll");
    }
}