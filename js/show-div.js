$(document).ready(function () {

    var firstBox = $('.first-box'),
        timeoutIdOne;
    $('.hand-panel').hover(function () {
        clearTimeout(timeoutIdOne);
        firstBox.show("fade");
    }, function () {
        timeoutIdOne = setTimeout($.proxy(firstBox, 'hide'), 100)
    });
    firstBox.mouseenter(function () {
        clearTimeout(timeoutIdOne);
    }).mouseleave(function () {
        firstBox.hide("fade");
    });

    var secondBox = $('.second-box'),
        timeoutIdTwo;
    $('.comments-panel').hover(function () {
        clearTimeout(timeoutIdTwo);
        secondBox.show("fade");
    }, function () {
        timeoutIdTwo = setTimeout($.proxy(secondBox, 'hide'), 100)
    });
    secondBox.mouseenter(function () {
        clearTimeout(timeoutIdTwo);
    }).mouseleave(function () {
        secondBox.hide("fade");
    });

    var thirdBox = $('.third-box'),
        timeoutIdThree;
    $('.idea-panel').hover(function () {
        clearTimeout(timeoutIdThree);
        thirdBox.show("fade");
    }, function () {
        timeoutIdThree = setTimeout($.proxy(thirdBox, 'hide'), 100)
    });
    thirdBox.mouseenter(function () {
        clearTimeout(timeoutIdThree);
    }).mouseleave(function () {
        thirdBox.hide("fade");
    });

    var userBox = $('.user-box'),
        timeoutIdOne;
    $('.profile-view').hover(function () {
        clearTimeout(timeoutIdOne);
        userBox.show("fade");
    }, function () {
        timeoutIdOne = setTimeout($.proxy(userBox, 'hide'), 100)
    });
    userBox.mouseenter(function () {
        clearTimeout(timeoutIdOne);
    }).mouseleave(function () {
        userBox.hide("fade");
    });
});