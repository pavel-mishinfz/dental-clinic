/* Обсервер для заголовков */
const observerHeaders = document.querySelectorAll('.obsv-header'); // элементы за которыми будет следить обсервер

const observerHeader = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        /**
         * Если объект виден, добавляем класс с анимацией, иначе убираем
         */
        entry.isIntersecting ? entry.target.classList.add('animate__fadeInUp') : entry.target.classList.remove('animate__fadeInUp');
    });
});

observerHeaders.forEach(obsv => observerHeader.observe(obsv));

/* Обсервер для карточек услуг */
const observerCards = document.querySelectorAll('.obsv-card');

const observerCard = new IntersectionObserver(entries => {
    entries.forEach((entry, index) => {
        (entry.isIntersecting && (index % 2 == 0)) ? entry.target.classList.add('animate__fadeInLeft') : entry.target.classList.remove('animate__fadeInLeft');
        (entry.isIntersecting && (index % 2 != 0)) ? entry.target.classList.add('animate__fadeInRight') : entry.target.classList.remove('animate__fadeInRight');
    });
});

observerCards.forEach(obsv => observerCard.observe(obsv));

/* Обсервер для блоков с этапами гигиены */
const observerHygieneSteps = document.querySelectorAll('.obsv-hygiene-step');

const observerHygieneStep = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        entry.isIntersecting ? entry.target.classList.add('animate__fadeInRight') : entry.target.classList.remove('animate__fadeInRight');
    });
});

observerHygieneSteps.forEach(obsv => observerHygieneStep.observe(obsv));