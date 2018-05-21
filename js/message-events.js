$(document).ready(function () {

    var message = $(".message ");
    var copyText = $(".copy-text");
    var eventsPanel = $(".events-panel");
    var buttonCancel = $(".cancel");

    message.click(function () {
        $(this).addClass("active-message");
        eventsPanel.show();
    })

    buttonCancel.click(function () {
        message.removeClass("active-message");
        eventsPanel.hide();
    })
})