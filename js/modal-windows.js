//Sign in modal window
$(document).ready(function () {

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

    var changeAvatar = $(".change-avatar");
    var bgModalAvatar = $(".upload-photo-modal-bg");
    var closeAvatarModal = $(".close-avatar-user-modal");

    changeAvatar.click(function () {
        bgModalAvatar.show();
        console.log("clicked")
    })

    closeAvatarModal.click(function () {
        bgModalAvatar.hide();
    })

    var changeBg = $(".change-bg");
    var modalBg = $(".bg-modal-background");
    var closeBackground = $(".close-background");

    changeBg.click(function () {
        modalBg.show();
    })

    closeBackground.click(function () {
        modalBg.hide();
    })

    var openAvatar = $(".open-avatar");
    var modalAvatar = $(".bg-modal-open-photo");

    openAvatar.click(function () {
        modalAvatar.fadeIn("fast");

        modalAvatar.click(function () {
            modalAvatar.fadeOut("fast");
        })
    })

    var openAddNewPhoto = $(".open-add-new-photo");
    var bgModalNewPhotos = $(".bg-modal-add-new-photo");
    var closeModalNewPhotos = $(".close-modal-add-photo");

    openAddNewPhoto.click(function () {
        bgModalNewPhotos.fadeIn('fast');
    });

    closeModalNewPhotos.click(function () {
        bgModalNewPhotos.fadeOut("fast");
    });

});