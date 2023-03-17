const hamb = document.querySelector('#hamb');
const menu = document.querySelector('#menu');
const body = document.body;
const popup = document.querySelector('#popup');

hamb.addEventListener("click", hambHandler);

function hambHandler(e) {
    e.preventDefault();
    menu.classList.toggle("open");
    hamb.classList.toggle("active");
    body.classList.toggle("noscroll");
    popup.classList.toggle("popup");
}

const close = document.querySelector('.menu__close');

close.addEventListener("click", closeOnClick);

function closeOnClick(e) {
    e.preventDefault();
    menu.classList.remove("open");
    hamb.classList.remove("active");
    body.classList.remove("noscroll");
    popup.classList.remove("popup");
}

const hambFooter = document.querySelector('#hamb-footer');
const footerLeft = document.querySelector('.footer__left');
const footerRight = document.querySelector('.footer__right');


hambFooter.addEventListener("click", hambHandlerFooter);

function hambHandlerFooter(e) {
    e.preventDefault();
    hambFooter.classList.toggle("active");
    footerLeft.classList.toggle("hide");
    footerRight.classList.toggle("show");
}

document.addEventListener('mouseup', function (e) {
    let container = document.querySelector(".footer__right");
    if (!container.contains(e.target)) {
        hambFooter.classList.remove("active");
        footerLeft.classList.remove("hide");
        footerRight.classList.remove("show");
    }
});
