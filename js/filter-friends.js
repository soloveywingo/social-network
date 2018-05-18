
$(".input-filter-friends").keyup(function() {
    var value = $(this).val().toLowerCase();
    $(".friend-box .user").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});

