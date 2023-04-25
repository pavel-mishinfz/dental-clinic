$(document).on('click', '#b-captcha__reload', function (e) {
    e.preventDefault();

    $.ajax({
        type: 'GET',
        url: '/reload',
        success: function (response) {
            $('#b-captcha__img').html(response.captcha);
        }
    });

});
