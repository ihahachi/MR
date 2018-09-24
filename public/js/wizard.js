function ConvertDMSToDD(degrees, minutes, seconds, direction) {
    var dd = degrees +(minutes/60) + (seconds/3600);
    if (direction == "O" || direction == "S") {
        dd = dd * -1;
    } // Don't do anything for N or E
    return dd.toFixed(4);
}

$( ".form-control" ).change(function() {

    var DX = $('#DX').val();
    var MX = $('#MX').val();
    var SX = $('#SX').val();
    var directionX = $('#directionX').val();
    var reX = ConvertDMSToDD(parseFloat(DX), parseFloat(MX), parseFloat(SX),directionX);

    var DY = $('#DY').val();
    var MY = $('#MY').val();
    var SY = $('#SY').val();
    var directionY = $('#directionY').val();
    var reY = ConvertDMSToDD(parseFloat(DY), parseFloat(MY), parseFloat(SY),directionY);

    $('#rex').val(reX);
    $('#rey').val(reY);
    // alert(reX);
    // alert(reY);

});


$(document).ready(function() {

    $("#milieu").change(function () {
        $("#zone")
            .find("option")
            .show()
            .not("option[value*='" + this.value + "']").hide();

        $("#zone").val(
            $("#zone").find("option:visible:first").val());

    }).change();

    $("#wilaya").change(function () {
        $("#commune")
            .find("option")
            .show()
            .not("option[value*='" + this.value + "']").hide();

        $("#commune").val(
            $("#commune").find("option:visible:first").val());

    }).change();

  




});





$(document).ready(function() {
    $('.movH').removeAttr('hidden');
    $('.movH').addClass('animated bounceInDown');  
});


$(document).ready(function() {
    $('.movLogo').removeAttr('hidden');
    $('.movLogo').addClass('animated rollIn delay-2s');  
});


$(document).ready(function() {
    $('.mov').removeAttr('hidden');
    $('.movT').removeAttr('hidden');
    $('.mov').addClass('animated zoomIn delay-3s');  
    $('.movT').addClass('animated bounceInRight delay-3s');  
});


$(document).ready(function() { 
    $('.card-login').removeAttr('hidden');  
    $('.card-login').addClass('animated bounceInDown');  
});



$(document).ready(function() { 
    $('#loading').delay(1000).hide(0);
    $('.core').removeAttr('hidden');  
    $('.core').addClass('animated fadeIn delay-1s');
});



$(document).ready(function() { 

    $("input[value=option1]").on( "change", function() {
        if( $(this).is(':checked') ) {
            $("#DMS").fadeOut();
            $("#DD").fadeIn("slow");
        }
    } );

    $("input[value=option2]").on( "change", function() {
        if( $(this).is(':checked') ) {
            $("#DMS").fadeIn("slow");
            $("#DD").fadeOut();
        }
    } );


});