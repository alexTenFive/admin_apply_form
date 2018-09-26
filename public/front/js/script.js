jQuery(function ($) {

    var menuWrap = $('#main-nav');
    var url = window.location.href;
    menuWrap.find('a[href="' + url + '"]').addClass('active').closest('.nav-item.dropdown').addClass('active-trail');
    var submenu = menuWrap.find('a.dropdown-item.active').siblings('a').closest('.dropdown-menu').html();
    $('.phone').mask('(000) 000-0000');
    $('.zip, input[name="zip"]').mask('00000');

    $('#submenu-wrap').append(submenu);

    $('form').on('submit', function (e) {
        var form = $(this);
        var pos = $('#content').position().top;
        form.find('.alert.empty').html('').hide();
        form.find('.req').removeClass('err');
        $(this).find('.req').each(function () {
            if ($.trim($(this).val()) === '' || ($(this).hasClass('phone') && $(this).val().length !== 14) || ($(this).hasClass('zip') && $(this).val().length !== 5) || ($(this).prop('type') === 'checkbox' && $(this).prop('checked') === false)) {
                $(this).addClass('err');
                var errText = $(this).siblings('.req-text').html();
                form.find('.alert.empty').show().append(errText + '<br>');
            }
        });
        if (form.find('.g-recaptcha').length > 0) {
            if (grecaptcha && grecaptcha.getResponse().length < 1) {
                form.find('.alert.empty').show().append('Confirm that you are not a robot.<br>');
            }
        }
        if ((form.find('.err').length === 0 && form.find('.g-recaptcha').length < 1) || (form.find('.err').length === 0 && form.find('.g-recaptcha').length > 0 && grecaptcha.getResponse().length > 0)) {
            setTimeout(function () {
                // return false;
                if (form.find('.form-hide').length > 0) {
                    form.find('.form-hide').hide();
                    $('body').animate({
                        scrollTop: pos
                    })
                }
                form.find('.alert.not-empty').show();
            }, 2000);
            //Mail
            if (form.attr('id') === 'contact-us' || form.attr('id') === 'signup') {
                var form_data = form.serialize();
                $.ajax({
                    type: "POST",
                    url: "post.php",
                    data: form_data,
                    success: function () {

                    }
                });
            }
            if (form.attr('id') === 'form-apply') {
                var action = $(this).attr('action');
                var form_data = new FormData(form[0]);

                $.ajax({
                    type: "POST",
                    url: action,
                    data: form_data,
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function (data) {
                        console.log(data);
                    },
                    error(xhr, desc, err){

                    }
                });
            }
        } else {
            form.find('.alert.not-empty').hide();
        }

        e.preventDefault();
        return false;
    });

}, jQuery);


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function escapeTags( str ) {
    return String( str )
        .replace( /&/g, '&amp;' )
        .replace( /"/g, '&quot;' )
        .replace( /'/g, '&#39;' )
        .replace( /</g, '&lt;' )
        .replace( />/g, '&gt;' );
}
window.onload = function() {
    var btn = document.getElementById('uploadBtn'),
        btnImg = document.getElementById('uploadBtnImg'),
        progressBar = document.getElementById('progressBar'),
        progressBarImg = document.getElementById('progressBarImg'),
        progressOuter = document.getElementById('progressOuter'),
        progressOuterImg = document.getElementById('progressOuterImg'),
        msgBox = document.getElementById('msgBox'),
        msgBoxImg = document.getElementById('msgBoxImg');
    var uploader = new ss.SimpleUpload({
        button: btn,
        url: '/upload-file',
        name: 'uploadfile',
        multipart: true,
        hoverClass: 'hover',
        focusClass: 'focus',
        responseType: 'json',
        startXHR: function() {
            progressOuter.style.display = 'block'; // make progress bar visible
            this.setProgressBar( progressBar );
        },
        onSubmit: function() {
            msgBox.innerHTML = ''; // empty the message box
            btn.innerHTML = 'Uploading...'; // change button text to "Uploading..."
        },
        onComplete: function( filename, response ) {
            $('#files').val(filename + ', ' + $('#files').val());
            btn.innerHTML = '<span class="inner">Drop files to upload or</span>';
            progressOuter.style.display = 'none'; // hide progress bar when upload is completed
            if ( !response ) {
                msgBox.innerHTML = 'Unable to upload file';
                return;
            }
            if ( response.success === true ) {
                msgBox.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';
            } else {
                if ( response.msg )  {
                    msgBox.innerHTML = escapeTags( response.msg );
                } else {
                    msgBox.innerHTML = 'An error occurred and the upload failed.';
                }
            }
        },
        onError: function() {
            progressOuter.style.display = 'none';
            msgBox.innerHTML = 'Unable to upload file';
        }
    });

    var uploaderImg = new ss.SimpleUpload({
        button: btnImg,
        url: '/upload-img',
        name: 'uploadfile',
        multipart: true,
        hoverClass: 'hover',
        focusClass: 'focus',
        responseType: 'json',
        startXHR: function() {
            progressOuterImg.style.display = 'block'; // make progress bar visible
            this.setProgressBar( progressBarImg );
        },
        onSubmit: function() {
            msgBoxImg.innerHTML = ''; // empty the message box
            btnImg.innerHTML = 'Uploading...'; // change button text to "Uploading..."
        },
        onComplete: function( filename, response ) {
            $('#photos').val(filename + ', ' + $('#photos').val());
            btnImg.innerHTML = '<span class="inner">Drop files to upload or</span>';
            progressOuterImg.style.display = 'none'; // hide progress bar when upload is completed
            if ( !response ) {
                msgBoxImg.innerHTML = 'Unable to upload file';
                return;
            }
            if ( response.success === true ) {
                msgBoxImg.innerHTML = '<img src="/uploads/tmp/photos/'+ escapeTags( filename ) +'">';
            } else {
                if ( response.msg )  {
                    msgBoxImg.innerHTML = escapeTags( response.msg );
                } else {
                    msgBoxImg.innerHTML = 'An error occurred and the upload failed.';
                }
            }
        },
        onError: function() {
            progressOuterImg.style.display = 'none';
            msgBoxImg.innerHTML = 'Unable to upload file';
        }
    });
};