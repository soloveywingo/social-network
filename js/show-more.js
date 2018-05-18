$(function () {

    $(".post").slice(0, 3).show();
    $("#showMore").click(function (e) {
        e.preventDefault()
        $(".post:hidden").slice(0, 10).slideDown();
    })
})