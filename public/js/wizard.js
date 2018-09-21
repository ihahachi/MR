function ParseDMS(input) {
    var parts = input.split(/[^\d\w]+/);
    var lat = ConvertDMSToDD(parts[0], parts[1], parts[2], parts[3]);
    var lng = ConvertDMSToDD(parts[4], parts[5], parts[6], parts[7]);
    return lat;
}

function ConvertDMSToDD(degrees, minutes, seconds, direction) {
    var dd = degrees + minutes/60 + seconds/(60*60);

    if (direction == "O") {
        dd = dd * -1;
    } // Don't do anything for N or E
    return dd;
}


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


$( "#target" ).click(function() {
var bla = $('#DMS').val();
var re = ParseDMS(bla);
console.log(re);

});

});
