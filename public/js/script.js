jQuery(function ($) {
    var menuWrap = $('#main-nav');
    var url = window.location.pathname;

    menuWrap.find('a[href="' + url + '"]').addClass('active');

    var submenu = menuWrap.find('a.active').siblings('a').closest('.dropdown-menu').html();

    $('#submenu-wrap').append(submenu);

    $('#upload-img').on('change',function () {
        previewImage();
    });
    $('#upload-file').on('change',function () {
        previewFile();
    });
}, jQuery);

function previewImage() {
    var totalFile = document.getElementById("upload-img").files.length;
    for (var i = 0; i < totalFile; i++) {
        $('#image-preview').append("<div class='col-lg-3 col-sm-3'><img src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
    }
}
function previewFile() {
    var totalFile = document.getElementById("upload-file").files.length;
    for (var i = 0; i < totalFile; i++) {
        $('#file-preview').append("<div class='col-lg-3 col-sm-3'><div class='file'><div class='name'>"+event.target.files[i].name+"</div></div></div>");
    }
}