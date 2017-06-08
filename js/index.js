$(document).ready(function () {
    $("#enviar").click(function (e) { 
        if($("#nombre").val() != "" && $("#clave").val() != "") {
            $.ajax({
                type: "POST",
                data:{
                    nombre:$("#nombre").val(), 
                    clave:$("#clave").val()
                },
                url: "src/ValidaUsuario.php",
                success: function (response) {
                    $("#mensaje").html(response);
                }
            });
        } else {
            alert("Debe ingresar usuario y clave");
        }
    });
});