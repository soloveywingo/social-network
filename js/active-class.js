$(document).ready(function () {
    $("div.change-buttons").on('click', 'span', function () {
        $("div.change-buttons span").removeClass("active-class");
        $(this).addClass("active-class");
    })
});