<?php

include "../tools/conexion.php";

session_start(); ///TIENE QUE ESTAR PORQUE SINO NO FUNCIONAN LAS VARIABLES DE SESION



if (isset($_POST["usuario"]) and isset($_POST["pass"])) {

    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM usuarios WHERE usuario='" . $usuario . "' AND pass='" . $pass . "' LIMIT 1";

    $res = mysqli_query($link, $sql);

    if (mysqli_affected_rows($link)) {

        $datos = mysqli_fetch_array($res);
        $_SESSION["usuario"] = $usuario;
        $_SESSION["usuario_id"] = $datos["usuario_id"];
        header("location:../pag_principal.php");
        exit();
    } else {
        header("location:../index.php?INFORMACION=CREDENCIALES");
        exit();
    }
} //if isset
else {
    header("location:../index.php?INFORMACION=FORMULARIO");
    exit();
}
