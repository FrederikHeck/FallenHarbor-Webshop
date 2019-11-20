$(document).on('click', '.btnDec', function (e) {
    e.preventDefault();
    updateValue = -1;
    updateCart(this, updateValue);
});

$(document).on('click', '.btnRmv', function(e){
    e.preventDefault();
    updateValue = -1000;
    updateCart(this, updateValue);
});

$(document).on('click', '.btnInc', function(e){
    e.preventDefault();
    updateValue = +1;
    updateCart(this, updateValue);
});

function updateCart(activeButton, updateValue) {
    itemID = $(activeButton).parent().children("input.item").val();
    format = $(activeButton).parent().children("input.format").val();
    lng = $(".hiddenLng").val();
    $.ajax({
        url: "assets/php/func/cart_ajax.php?itemID="+itemID+"&format="+format+"&updateNum="+updateValue+"&lng="+lng,
        type: "GET",
        dataType: "text",
        success: function(data){
            $("#cartContainer").empty().html(data);
        },
        error: function(jqXHR, status, msg){
            $("#time").html("Error! " + msg);
        }
    });
}