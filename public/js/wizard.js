


$(document).ready(function() {

    $("#milieu").change(function () {
        $("#zone")
            .find("option")
            .show()
            .not("option[value*='" + this.value + "']").hide();

        $("#zone").val(
            $("#zone").find("option:visible:first").val());

    }).change();
});
