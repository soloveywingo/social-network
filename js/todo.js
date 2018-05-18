$(function () {

    var $noteList = $(".grid-content");
    var $noteInput = $("#noteInput");


    $("#addNote").click(function () {

        if (!$noteInput.val()) {
            return false;
        }

        $noteList.append("<div class='todo'><p>" + $noteInput.val() + "</p><button class='delete-note-btn'>Delete</button></div>");

        $noteInput.val("");


        $(".delete-note-btn").click(function () {

            var $parent = $(this).parent();

            setTimeout(function () {
                $parent.remove();
            }, 295)

        })
    })

})