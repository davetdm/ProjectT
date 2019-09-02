
$('#frmCatalog').submit(function() {

    var url = $('#frmCatalog').attr("action");
    var method = $('#frmCatalog').attr("method");
    var data = $('#frmCatalog').serialize();

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
