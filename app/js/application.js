$(function () {
    $('#slides').superslides({

        hashchange: false,
        play: 3000,
        pagination: true,
        inherit_height_from: $('#stuffTest')
    });


});

$('#slides').on('animated.slides', function () {
    var current_index = $(this).superslides('current');

    if (current_index == 2) { // third slide


        var disp = function test1() {

            setTimeout(function ()

            {
                $('#slides').superslides('start')
            }, 20000);

        }
        disp();

    }

});