<?php
include "acc.proteccion.php";
include "../tools/conexion.php";


if (isset($_POST["usuario"]) and isset($_POST["passA"]) and isset($_POST["passN"])) {

    $usuario = $_POST["usuario"];
    $passA = $_POST["passA"];
    $passN = $_POST["passN"];

    $sql2 = "SELECT * FROM usuarios WHERE pass=" . $passA . ", 
                                                usuario= " . $usuario;
    $verif = mysqli_query($link, $sql2);
    if (mysqli_num_rows($verif) == 0) {
        echo '
        <script>
            alert("La contraseña anterior es incorrecta");
            window.location = "../frm/frm.edita_usuario.php";
        </script>
    ';
        exit();
    } else {

        $sql = "UPDATE usuarios SET pass=" . $passN;


        $res = mysqli_query($link, $sql);
        if (mysqli_affected_rows($link)) {
            header("location:../pag_principal.php?INFORMACION=EDITA_CORRECTO");
        } else {
            header("location:../frm/frm.edita_usuario.php?INFORMACION=EDITA_INCORRECTO");
        }
    }
} //if isset
else {
    header("location:../frm/frm.edita_usuario.php?INFORMACION=FORMULARIO");
}
