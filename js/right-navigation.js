$(document).ready(function () {
    var openBottomMenu = $(".open-bottom-menu");
    var closeBottomMenu = $(".close-bottom-menu");
    var fullPanel = $(".full-right-panel");
    var panel = $(".right-panel");

    closeBottomMenu.click(function () {
        fullPanel.animate({
            right: "-370px"
        });

        panel.animate({
            right: 0
        })

    });

    openBottomMenu.click(function () {
        fullPanel.animate({
            right: 0
        })

        panel.animate({
            right: "-370px"
        });
    })

});