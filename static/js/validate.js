$(document).ready(function() {

    $('.color-choose input').on('click', function() {
        var heelsColor = $(this).attr('data-image');

        $('.active').removeClass('active');
        $('.left-column img[data-image = ' + heelsColor + ']').addClass('active');
        $(this).addClass('active');
    });

});
$('#frmCart').submit(function() {

    var url = $('#frmCart').attr("action");
    var method = $('#frmCart').attr("method");
    var data = $('#frmCart').serialize();

    $.ajax({
        url: url,
        method: method,
        data: data,
        success: function (resp) {
            console.log(resp);
            alert("Added to Cart");
            window.location.reload();
        }
    });
    return false;

});
