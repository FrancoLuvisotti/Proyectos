<?php
include "../tools/conexion.php";

if (isset($_POST["usuario"]) and isset($_POST["pass"])) {

    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];

    $sql =  "INSERT INTO usuarios (usuario, pass) VALUES ('" . $usuario . "',$pass)";

    //verifico si hay usuarios repetidos
    $sql2 = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $verif = mysqli_query($link, $sql2);
    if (mysqli_num_rows($verif) > 0) {
        echo '
        <script>
            alert("Este usuario ya se encuentra registrado, intente con otro diferente");
            window.location = "../frm/frm.agrega_usuario.php";
        </script>
    ';
        exit();
    }

    $res = mysqli_query($link, $sql);
    if ($res != "") {
        if (mysqli_affected_rows($link)) {
            header("location:../index.php?INFORMACION=USUARIO");
            exit();
        } else {
            header("location:../frm/frm.agrega_usuario.php?INFORMACION=USUARIO_ERROR");
            exit();
        }
    } else {
        header("location:../frm/frm.agrega_usuario.php?INFORMACION=FORMULARIO_VACIO");
        exit();
    }
} //if isset
else {
    header("location:../frm/pag_principal.php?INFORMACION=FORMULARIO");
    exit();
}
