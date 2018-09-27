jQuery(function ($) {
    //Nav
    var menuWrap = $('#main-nav');
    var url = window.location.href;
    menuWrap.find('a[href="' + url + '"]').addClass('active').closest('.nav-item.dropdown').addClass('active-trail');

    //Subnav
    var submenu = menuWrap.find('a.dropdown-item.active').siblings('a').closest('.dropdown-menu').html();
    $('#submenu-wrap').append(submenu);

    //Mask
    $('.phone').mask('(000) 000-0000');
    $('.zip, input[name="zip"]').mask('00000');

    //Forms
    $('form').on('submit', function (e) {
        var form = $(this);
        var pos = $('#content').position().top;
        var req = $(this).find('.req');
        req.removeClass('err');
        form.find('.alert.empty').html('').hide();

        req.each(function () {
            if (($.trim($(this).val()) === '' || ($(this).hasClass('phone') && $(this).val().length !== 14)) ||
                ($(this).hasClass('zip') && $(this).val().length !== 5) ||
                ($(this).attr('type') === 'checkbox' && $(this).prop('checked') === false)) {

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

            //Success
            setTimeout(function () {
                var formHide = form.find('.form-hide');
                if (formHide.length > 0) {
                    formHide.hide();
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

            //Apply
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

if($('#form-apply').length > 0) {
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
                $('#files_docs').val(filename + ', ' + $('#files_docs').val());
                btn.innerHTML = '<span class="inner">Drop files to upload or</span>';
                progressOuter.style.display = 'none'; // hide progress bar when upload is completed
                if ( !response ) {
                    $('#files_docs').addClass('err');
                    msgBox.innerHTML = 'Unable to upload file';
                    return;
                }
                if ( response.success === true ) {
                    $('#uploadBtn').removeClass('err');
                    msgBox.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';
                } else {
                    if ( response.msg )  {
                        msgBox.innerHTML = escapeTags( response.msg );
                    } else {
                        $('#files_docs').addClass('err');
                        msgBox.innerHTML = 'An error occurred and the upload failed.';
                    }
                }
            },
            onError: function() {
                $('#files_docs').addClass('err');
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
}
