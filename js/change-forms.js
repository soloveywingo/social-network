$(document).ready(function () {
    var firstForm = $("#firstForm");
    var secondForm = $("#secondForm");
    var logIn = $(".first-form");
    var signIn = $(".second-form");

    firstForm.click(function () {
        logIn.show();
        signIn.hide();
    });

    secondForm.click(function () {
        logIn.hide();
        signIn.show();
    })
});