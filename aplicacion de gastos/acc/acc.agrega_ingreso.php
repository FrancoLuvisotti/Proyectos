<?php
include "acc.proteccion.php";
include "../tools/conexion.php";


if (isset($_POST["ingreso"]) and isset($_POST["tipo_ingreso"]) and isset($_POST["importe"])) {

    $ingreso = $_POST["ingreso"];
    $tipo_ingreso = $_POST["tipo_ingreso"];
    $importe = $_POST["importe"];


    $sql = "INSERT INTO   `ingresos` 
                                (ingreso, 
                                tipo_ingreso, 
                                importe,
                                usuario_id) 
                            VALUES(
                                '" . $ingreso . "', 
                                '" . $tipo_ingreso . "', 
                                " . $importe . ",
                                " . $_SESSION["usuario_id"] . ")";

    $res = mysqli_query($link, $sql);
    if ($res != "") {
        if (mysqli_affected_rows($link)) {
            header("location:../frm/principal-ingresos.php?INFORMACION=CORRECTO");
            exit();
        } else {
            header("location:../frm/principal-ingresos.php?INFORMACION=INCORRECTO");
            exit();
        }
    } else {
        header("location:../frm/principal-ingresos.php?INFORMACION=FORMULARIO_VACIO");
        exit();
    }
} //if isset
else {
    header("location:../frm/principal-ingresos.php?INFORMACION=FORMULARIO");
    exit();
}
