$(document).ready(function() {

    $('.color-choose input').on('click', function() {
        var heelsColor = $(this).attr('data-image');

        $('.active').removeClass('active');
        $('.left-column img[data-image = ' + heelsColor + ']').addClass('active');
        $(this).addClass('active');
    });

});
