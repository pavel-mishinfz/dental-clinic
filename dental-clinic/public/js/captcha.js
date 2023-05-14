$(document).on('click', '#b-captcha__reload', function (e) {
    e.preventDefault();

    let captcha_img;
    $(this).hasClass('b-captcha__reload--free') ? captcha_img = $('#b-captcha__img--free') : captcha_img = $('#b-captcha__img');

    $.ajax({
        type: 'GET',
        url: '/reload',
        success: function (response) {
            captcha_img.html(response.captcha);
        }
    });

});
