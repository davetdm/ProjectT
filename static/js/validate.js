
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

$('#frmCart').submit(function(){

    var url = $('#frmCart').attr("action");
    var method = $('#frmCart').attr("method");
    var data = $('#frmCart').serialize();

    $.ajax({
        type: method,
        url: url,
        data: data,
        success: function(response){
            console.log(response);

            alert(response);
            window.location.reload();
        }

    });

    return false;
});

