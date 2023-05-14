$(document).on('click', '.btn--popup-form', function (e) {
    e.preventDefault();

    let errors_msg = document.querySelectorAll('.error');
    $(errors_msg).each(function () {
        $(this) != null ? $(this).remove() : null;
    });

    let feedbackForm;
    $(this).hasClass('btn--form-free') ? feedbackForm = $('.free__form') : feedbackForm = $('#popup__form-feedback');

    let captcha = feedbackForm.find('#b-captcha__reload');
    $(captcha).click();

    let doctor_id = document.querySelector('.dm-modal--doctor');
    doctor_id ? doctor_id = doctor_id.dataset.doctorId : doctor_id = '';
    let data = feedbackForm.serialize() + '&doctorId=' + doctor_id;

    $.ajax({
        type: 'POST',
        url: '/feedback-form',
        data: data,
        success: function (response) {
            $('.success').addClass('submitted');
            $('.success-msg').html(response.success);
            feedbackForm[0].reset();
        },
        error: function (data) {
            if (data.status == 422) {
                $.each(data.responseJSON.errors, function (name, error) {
                    let input = feedbackForm.find('[name="' + name + '"]');
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
