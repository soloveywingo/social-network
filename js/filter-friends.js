$(".input-filter-friends").keyup(function () {
    var value = $(this).val().toLowerCase();
    $(".left-box-body .user").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});

$('.user ul li a').click(function () {
    $('.user li a').removeClass("active");
    $(this).addClass("active");
});