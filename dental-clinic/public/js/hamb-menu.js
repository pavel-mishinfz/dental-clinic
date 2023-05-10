$(document).ready(function(){
    var hamb = document.querySelector('#hamb');
    var menu = document.querySelector('#menu');
    var body = document.body;
    var popup = document.querySelector('#popup');
    hamb.addEventListener("click", hambHandler);
    function hambHandler(e) {
        e.preventDefault();
        menu.classList.toggle("open");
        hamb.classList.toggle("active");
        body.classList.toggle("noscroll");
        popup.classList.toggle("popup");
    }
    var close = document.querySelector('.menu__close');
    close.addEventListener("click", closeOnClick);
    function closeOnClick(e) {
        e.preventDefault();
        menu.classList.remove("open");
        hamb.classList.remove("active");
        body.classList.remove("noscroll");
        popup.classList.remove("popup");
    }
    var hambFooter = document.querySelector('#hamb-footer');
    var footerLeft = document.querySelector('.footer__left');
    var footerRight = document.querySelector('.footer__right');
    hambFooter.addEventListener("click", hambHandlerFooter);
    function hambHandlerFooter(e) {
        e.preventDefault();
        hambFooter.classList.toggle("active");
        footerLeft.classList.toggle("hide");
        footerRight.classList.toggle("show");
    }
    document.addEventListener('mouseup', function (e) {
        var container = document.querySelector(".footer__right");
        if (!container.contains(e.target)) {
            hambFooter.classList.remove("active");
            footerLeft.classList.remove("hide");
            footerRight.classList.remove("show");
        }
    });
});
