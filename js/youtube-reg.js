function getId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        return match[2];
    } else {
        return 'error';
    }
}

var myId;

$('#myBtn').click(function (e) {
    e.preventDefault();
    var myUrl = $('#myUrl').val();
    myId = getId(myUrl);

    $('#myId').html(myId);

    $('#myCode').html('<iframe width="100%" height="315" src="//www.youtube.com/embed/' + myId + '" frameborder="0" allowfullscreen></iframe>');

});
