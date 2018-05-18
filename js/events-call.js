$(function () {

    var callReport = $(".call-report");
    var bgReportModal = $(".bg-report-modal");
    var closeReportModal = $(".close-modal-report");

    callReport.click(function (e) {
        e.preventDefault();

        bgReportModal.show();
    });

    closeReportModal.click(function () {
        bgReportModal.hide();
    });


    var eventsCall = $(".events-call");
    var usersButtons = $(".users-buttons");

    eventsCall.click(function () {
        usersButtons.toggle("fast");
        return false;
    });

    function hideBlock() {
        usersButtons.hide("fast");
    };

    $(function () {
        $(document).click(function (event) {
            if ($(event.target).closest(usersButtons).length) return;
            hideBlock();
            event.stopPropagation();
        });
    });
})