<?php
    include "Librerias.php";

    $user = new Usuario(0,$_REQUEST["nombre"],$_REQUEST["clave"]);

    if($user->ValidaLocal()) {
        echo "Todo Bien";
    } else {
        echo "Todo Mal";
    }
?>