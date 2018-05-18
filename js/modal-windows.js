//Sign in modal window

var termsClicker = $(".terms-clicker");
var bgModalSignIn = $(".bg-modal-sign-in");
var closeButtonSignIn = $(".close-modal-sign-in");

termsClicker.click(function () {
    bgModalSignIn.show();
})

closeButtonSignIn.click(function () {
    bgModalSignIn.hide();
})

//Video modal window

var uploadVideo = $(".upload-video");
var bgModalVideo = $(".bg-modal-video");
var closeButtonVideo = $(".close-modal-video");

uploadVideo.click(function () {
    bgModalVideo.show();
})

closeButtonVideo.click(function () {
    bgModalVideo.hide();
})

//Video modal window

document.querySelector("#addImageCar").addEventListener('change', function (ev) {

    document.querySelector("[for='addNewImage'Car]").innerHTML = ev.target.files[0].name;

});

var addCar = $(".add-car");
var bgModalCars = $(".bg-modal-cars");
var closeButtonCars = $(".close-modal-car");

addCar.click(function () {
    bgModalCars.show();
})

closeButtonCars.click(function () {
    bgModalCars.hide();
})

//Read more modal window

var readMore = $(".read-more");
var bgModalReadMore = $(".bg-modal-read-more");
var closeButtonReadMore = $(".close-modal-read-more");

readMore.click(function () {
    bgModalReadMore.show();
})

closeButtonReadMore.click(function () {
    bgModalReadMore.hide();
})