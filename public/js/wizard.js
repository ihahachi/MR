function ConvertDMSToDD(degrees, minutes, seconds, direction) {
    var dd = degrees +(minutes/60) + (seconds/3600);
    if (direction == "O") {
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
