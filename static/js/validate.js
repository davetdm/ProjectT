

function displayRed() {
    document.getElementById("div-red").style.display = "block";
    document.getElementById("div-blue").style.display = "none";
    document.getElementById("div-maroon").style.display = "none";
}

function displayBlue() {
    document.getElementById("div-red").style.display = "none";
    document.getElementById("div-blue").style.display = "block";
    document.getElementById("div-maroon").style.display = "none";

}

function displayMaroon() {
    document.getElementById("div-red").style.display = "none";
    document.getElementById("div-blue").style.display = "none";
    document.getElementById("div-maroon").style.display = "block";
}

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
