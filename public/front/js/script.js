jQuery(function ($) {
    var menuWrap = $('#main-nav');
    var url = window.location.pathname;
    menuWrap.find('a[href="' + url + '"]').addClass('active').closest('.nav-item.dropdown').addClass('active-trail');
    var submenu = menuWrap.find('a.dropdown-item.active').siblings('a').closest('.dropdown-menu').html();
    $('.phone').mask('(000) 000-0000');
    $('.zip').mask('00000');

    var imgElement = document.getElementById("upload-img");
    var fileElement = document.getElementById("upload-file");
    if ($('#upload-img').length > 0){
        imgElement.addEventListener("change", previewImage, false);
    }
    if ($('#upload-file').length > 0){
        fileElement.addEventListener("change", previewFile, false);
    }

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
                        // console.log(data);
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

function previewImage() {
    var totalFile = document.getElementById("upload-img").files.length;

    $('#image-preview').html('');
    for (var i = 0; i < totalFile; i++) {

        var numb = event.target.files[i].size/1024/1024;
        numb = numb.toFixed(2);

        if(numb > 1){
            if($('#upload-img + .error').length > 0) {
                $('#upload-img + .error').fadeIn();
                setTimeout(function () {
                    $('#upload-img + div').fadeOut();
                },2000);
                $('#upload-img').val('');
            } else {
                $('#upload-img').after('<div class="error" style="color: red;padding: 20px 0 5px;position: relative;z-index: 2;text-align: center;">Files, bigger than 1.00 MB is not allowed</div>');
                setTimeout(function () {
                    $('#upload-img + div').fadeOut();
                },2000)
            }
        } else {
            $('#image-preview').append("<div class='col-lg-3 col-sm-3 col-4'><img src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
        }
    }
}

function previewFile(event) {
    var totalFile = document.getElementById("upload-file").files.length;

    $('#file-preview').html('');

    for (var i = 0; i < totalFile; i++) {

        var numb = event.target.files[i].size/1024/1024;
        numb = numb.toFixed(2);

        if(numb > 5){
            if($('#upload-file + .error').length > 0) {
                $('#upload-file + .error').fadeIn();
                setTimeout(function () {
                    $('#upload-file + div').fadeOut();
                },2000);
                $('#upload-file').val('');
            } else {
                $('#upload-file').after('<div class="error" style="color: red;padding: 20px 0 5px;position: relative;z-index: 2;text-align: center;">Files, bigger than 5.00 MB is not allowed</div>');
                setTimeout(function () {
                    $('#upload-file + div').fadeOut();
                },2000)
            }
        } else {
            $('#file-preview').append("<div class='col-lg-3 col-sm-3 col-4'><div class='file'><img src='/front/img/cv.png' alt=''><div class='name'>" + event.target.files[i].name + "</div></div></div>");
        }
    }
}