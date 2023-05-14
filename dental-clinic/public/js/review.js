$(document).on('click', '.btn--review-send', function (e) {
    e.preventDefault();
    $('#b-captcha__reload').click();

    let errors_msg = document.querySelectorAll('.error');
    $(errors_msg).each(function () {
        $(this) != null ? $(this).remove() : null;
    });

    let data = $('#popup__form-review').serialize() + '&file=' + $('#file').attr('value');

    $.ajax({
        type: 'POST',
        url: '/review-send',
        data: data,
        success: function (response) {
            $('.success').addClass('submitted');
            $('.success-msg').html(response.success);
            $('#file').attr('value', 'user-photo.png');
            $('#user-photo').attr('src', 'upload/user-photo.png');
            $('#popup__form-review')[0].reset();
        },
        error: function (data) {
            if (data.status == 422) {
                $.each(data.responseJSON.errors, function (name, error) {
                    let input = $('#popup__form-review').find('[name="' + name + '"]');
                    if (name == 'checkbox') {
                        input.parent().after($('<span class="error" style="color: red;">' + error[0] + '</span>'));
                    } else {
                        input.after($('<span class="error" style="color: red;">' + error[0] + '</span>'));
                    }
                });
            }
        }
    });

    $('.success-close').click(function(e) {
        e.preventDefault();
        $('.success').removeClass('submitted');
    });
});
