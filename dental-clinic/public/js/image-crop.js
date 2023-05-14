$(document).ready(function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let photoReview = $('#photo-review').croppie({
        showZoomer: false,
        viewport: {
            width: 100,
            height: 100,
            type: 'circle',
        },
        boundary: {
            width: 300,
            height: 300,
        }
    });

    $('#file').on('change', function () {
        let reader = new FileReader();
        reader.onload = (function (e) {
            $(photoReview).croppie('bind', {
                url: e.target.result
            }).then(function(){
                console.log('Success');
            });
        });
        reader.readAsDataURL(this.files[0]);

        $('#popup-image').arcticmodal({
            closeOnEsc: false,
            closeOnOverlayClick: false,
        });
    });

    $('.btn--resize').on('click', function () {
        $(photoReview).croppie('result', {
            type: 'canvas',
            size: 'original',
        }).then(function (resp) {
            $.ajax({
                url: "/image-resize",
                type: "POST",
                data: {
                    image: resp,
                },
                success: function (data) {
                    $('#user-photo').attr('src', resp);
                    $('#file').attr('value', data.img);
                    $('#popup-image').arcticmodal('close');
                }
            });
        });
    });
});
