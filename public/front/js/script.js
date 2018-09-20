jQuery(function ($) {
    var menuWrap = $('#main-nav');
    var url = window.location.href;

    menuWrap.find('a[href="' + url + '"]').addClass('active').closest('.nav-item.dropdown').addClass('active-trail');

    var submenu = menuWrap.find('a.dropdown-item.active').siblings('a').closest('.dropdown-menu').html();

    $('#submenu-wrap').append(submenu);

    $('#upload-img').on('change',function () {
        previewImage();
    });

    $('#upload-file').on('change',function () {
        previewFile();
    });

    $('form').on('submit',function (e) {
        var form = $(this);
        var pos = $('#content').position().top;
        form.find('.alert.empty').html('').hide();
        form.find('.req').removeClass('err');
        $(this).find('.req').each(function () {
            if($.trim($(this).val()) === '' || ($(this).prop('type') === 'checkbox' && $(this).prop('checked') === false)) {
                $(this).addClass('err');
                var errText = $(this).closest('.form-group').find('.req-text').html();
                form.find('.alert.empty').show().append(errText+'<br>');
            }
        });
        if(form.find('.g-recaptcha').length > 0){
            if(grecaptcha && grecaptcha.getResponse().length < 1) {
                form.find('.alert.empty').show().append('Confirm that you are not a robot.<br>');
            }
        }
        if((form.find('.err').length === 0 && form.find('.g-recaptcha').length < 1) || (form.find('.err').length === 0 && form.find('.g-recaptcha').length > 0 && grecaptcha.getResponse().length > 0)) {
            setTimeout(function () {
                if(form.find('.form-hide').length > 0){
                    form.find('.form-hide').hide();
                    $('body').animate({
                        scrollTop: pos
                    })
                }
                form.find('.alert.not-empty').show();
            },2000);
            //Mail
            if(form.attr('id') === 'contact-us' || form.attr('id') === 'signup' ){
                var form_data = form.serialize();
                $.ajax({
                    type: "POST",
                    url: "post.php",
                    data: form_data,
                    success: function () {

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
    for (var i = 0; i < totalFile; i++) {
        $('#image-preview').append("<div class='col-lg-3 col-sm-3 col-4'><img src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
    }
}
function previewFile() {
    var totalFile = document.getElementById("upload-file").files.length;
    for (var i = 0; i < totalFile; i++) {
        $('#file-preview').append("<div class='col-lg-3 col-sm-3 col-4'><div class='file'><img src='/assets/img/cv.png' alt=''><div class='name'>"+event.target.files[i].name+"</div></div></div>");
    }
}