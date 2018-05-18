document.querySelector("#addImgToPost").addEventListener('change', function (ev) {

    document.querySelector("[for='addImgTo']").innerHTML = ev.target.files[0].name;

});

document.querySelector("#addMusicToPost").addEventListener('change', function (ev) {

    document.querySelector("[for='addMusicTo']").innerHTML = ev.target.files[0].name;

});

document.querySelector("#addVideoToPost").addEventListener('change', function (ev) {

    document.querySelector("[for='addVideoTo']").innerHTML = ev.target.files[0].name;

});