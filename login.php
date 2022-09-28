<?php

    $usuario = $_POST["user"];
    $contrasena = $_POST["pass"];

    $ckuser = "potrero";
    $ckpass = "1234";

    if ($usuario==$ckuser && $contrasena==$ckpass) {
        header (" sLocation: https://www.potrerodigital.org ");
    } else {
        header ("Location: error.html");
    }


?>