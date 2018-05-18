$(document).ready(function () {

    $(".search-friends-right-panel").keyup(function () {
        var value = $(this).val().toLowerCase();
        $(".setting-group").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

})
