$(document).ready(function () {
    var inputClicker = $(".input-clicker");
    var inputFooter = $(".input-footer");
    
    inputClicker.click(function () {
        inputFooter.slideDown();
        inputClicker.css({
            borderRadius: "5px 5px 0 0",
            height: "70px"
        }).slideDown();
    })
})