/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/popup.js ***!
  \*******************************/
/* Интерактив обратной формы связи */
var buttonsFeedback = document.querySelectorAll('.btn--feedback');
var formFeedback = document.querySelector('.popup-feedback');
buttonsFeedback.forEach(function (btn) {
  return btn.addEventListener("click", formFeedbackHandler);
});
function formFeedbackHandler(e) {
  e.preventDefault();
  formFeedback.classList.toggle("open");
  document.body.classList.toggle("noscroll");
}
var closeFeedbackForm = document.querySelector('.popup__close--feedback');
closeFeedbackForm.addEventListener("click", closeOnClickForm);
function closeOnClickForm(e) {
  e.preventDefault();
  formFeedback.classList.remove("open");
  document.body.classList.remove("noscroll");
}

/* Интерактив электронного помощника */
var helperItems = document.querySelectorAll('.helpers__list-item');
var helperPopup = document.querySelector('.popup');
helperItems.forEach(function (item) {
  return item.addEventListener("click", helperItemsHandler);
});
function helperItemsHandler(e) {
  e.preventDefault();
  helperPopup.classList.toggle("open");
  document.body.classList.toggle("noscroll");
}
var closeHelperForm = document.querySelector('.popup__close--helpers');
if (closeHelperForm) {
  var closeOnClickHelperForm = function closeOnClickHelperForm(e) {
    e.preventDefault();
    helperPopup.classList.remove("open");
    document.body.classList.remove("noscroll");
  };
  closeHelperForm.addEventListener("click", closeOnClickHelperForm);
}

/* Запись к конкретному врачу */
var doctorItems = document.querySelectorAll('.item--click');
var doctorPopup = document.querySelector('.popup--doctor');
doctorItems.forEach(function (item) {
  return item.addEventListener("click", doctorItemsHandler);
});
function doctorItemsHandler(e) {
  e.preventDefault();
  doctorPopup.classList.toggle("open");
  helperPopup.classList.remove("open");
}
var closeDoctorForm = document.querySelector('.popup__close--doctor');
if (closeDoctorForm) {
  var closeOnClickDoctorForm = function closeOnClickDoctorForm(e) {
    e.preventDefault();
    doctorPopup.classList.remove("open");
    document.body.classList.remove("noscroll");
  };
  closeDoctorForm.addEventListener("click", closeOnClickDoctorForm);
}

/* Узнать цены */
var priceButtons = document.querySelectorAll('.btn--price');
var pricePopup = document.querySelector('.popup--price-list');
priceButtons.forEach(function (btn) {
  return btn.addEventListener("click", pricePopupHandler);
});
function pricePopupHandler(e) {
  e.preventDefault();
  pricePopup.classList.toggle("open");
  document.body.classList.toggle("noscroll");
}
var closePricePopup = document.querySelector('.popup__close--price-list');
if (closePricePopup) {
  var closeOnClickPricePopup = function closeOnClickPricePopup(e) {
    e.preventDefault();
    pricePopup.classList.remove("open");
    document.body.classList.remove("noscroll");
  };
  closePricePopup.addEventListener("click", closeOnClickPricePopup);
}
/******/ })()
;
