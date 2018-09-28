$(function()
{
    $("#preloaders").fadeOut(700);
});

function form_filter(form_id, type, search_phrase) {
    window.location.href = "/apply-form-88/dashboard/profiles/" + type + "/?search_phrase=" + search_phrase + "&form_id=" + form_id;
}