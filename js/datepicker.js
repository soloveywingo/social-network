$(document).ready(function () {
   $("#datepicker").datepicker({
       changeMonth: true,
       changeYear: true,
       yearRange: '-100: +0'
   });

    $("#datepickerSettings").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '-100: +0',
        beforeShow: function(input, inst) {
            // Handle calendar position before showing it.
            // It's not supported by Datepicker itself (for now) so we need to use its internal variables.
            var calendar = inst.dpDiv;

            // Dirty hack, but we can't do anything without it (for now, in jQuery UI 1.8.20)
            setTimeout(function() {
                calendar.position({
                    my: 'left bottom',
                    at: 'left top',
                    collision: 'none',
                    of: input
                });
            }, 1);
        }
    });
});