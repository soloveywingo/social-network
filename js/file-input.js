(document).ready(function () {

    document.querySelector("#selectFile").addEventListener('change', function (ev) {

        document.querySelector("[for='selectFile']").innerHTML = ev.target.files[0].name;

    });

    document.querySelector("#addImage").addEventListener('change', function (ev) {

        document.querySelector("[for='addNewImage']").innerHTML = ev.target.files[0].name;

    });

    document.querySelector("#changeUserPhoto").addEventListener('change', function (ev) {

        document.querySelector("[for='changePhoto']").innerHTML = ev.target.files[0].name;

    });

    document.querySelector("#changeUserPhotoBg").addEventListener('change', function (ev) {

        document.querySelector("[for='changePhotoBg']").innerHTML = ev.target.files[0].name;

    });

    document.querySelector("#addPhoto").addEventListener('change', function (ev) {

        document.querySelector("[for='addNewPhoto']").innerHTML = ev.target.files[0].name;

    });

    document.querySelector("#addNewPhotoProfile").addEventListener('change', function (ev) {

        document.querySelector("[for='addPhotoProfile']").innerHTML = ev.target.files[0].name;

    });

});