$(document).ready(function () {

    var inputSearchPanel = $(".input-search-panel");
    var searchPanel = $(".search-panel");

    inputSearchPanel.click(function () {
        searchPanel.slideDown("fast");
        return false;
    });

    function hideBlock() {
        searchPanel.slideUp("fast");
    };

    $(function () {
        $(document).click(function (event) {
            if ($(event.target).closest(searchPanel).length) return;
            hideBlock();
            event.stopPropagation();
        });
    });

    inputSearchPanel.keyup(function() {
        var value = $(this).val().toLowerCase();
        $(".search-panel .user").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

});