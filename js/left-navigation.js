$(document).ready(function () {
    var closeMenu = $("#closeMenu");
    var openMenu = $("#openMenu");
    var fullPanel = $(".full-left-panel");
    var panel = $(".left-panel");


    openMenu.click(function () {
        fullPanel.animate({
            left: 0
        });

        panel.animate({
            left: "-370px"
        })
    });

    closeMenu.click(function () {
        fullPanel.animate({
            left: "-370px"
        });

        panel.animate({
            left: 0
        })

    })
});