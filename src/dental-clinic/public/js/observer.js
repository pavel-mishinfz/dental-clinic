/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/observer.js ***!
  \**********************************/
/* Обсервер для заголовков */
var observerHeaders = document.querySelectorAll('.obsv-header'); // элементы за которыми будет следить обсервер

var observerHeader = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    /**
     * Если объект виден, добавляем класс с анимацией, иначе убираем
     */
    entry.isIntersecting ? entry.target.classList.add('animate__fadeInUp') : entry.target.classList.remove('animate__fadeInUp');
  });
});
observerHeaders.forEach(function (obsv) {
  return observerHeader.observe(obsv);
});

/* Обсервер для карточек услуг */
var observerCards = document.querySelectorAll('.obsv-card');
var observerCard = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry, index) {
    entry.isIntersecting && index % 2 == 0 ? entry.target.classList.add('animate__fadeInLeft') : entry.target.classList.remove('animate__fadeInLeft');
    entry.isIntersecting && index % 2 != 0 ? entry.target.classList.add('animate__fadeInRight') : entry.target.classList.remove('animate__fadeInRight');
  });
});
observerCards.forEach(function (obsv) {
  return observerCard.observe(obsv);
});

/* Обсервер для блоков с этапами гигиены */
var observerHygieneSteps = document.querySelectorAll('.obsv-hygiene-step');
var observerHygieneStep = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    entry.isIntersecting ? entry.target.classList.add('animate__fadeInRight') : entry.target.classList.remove('animate__fadeInRight');
  });
});
observerHygieneSteps.forEach(function (obsv) {
  return observerHygieneStep.observe(obsv);
});
/******/ })()
;