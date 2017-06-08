$(document).ready(function () {
    $("#enviar").click(function (e) { 
        if($("#nombre").val() != "" && $("#clave").val() != "") {
            $("form").submit();
        } else {
            alert("Debe ingresar usuario y clave");
        }
    });
});