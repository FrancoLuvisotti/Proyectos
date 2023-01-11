<?php
include "acc.proteccion.php";
include "../tools/conexion.php";


if (isset($_POST["ingreso"]) and isset($_POST["tipo_ingreso"]) and isset($_POST["importe"]) and isset($_POST["ingreso_id"])) {
    $ingreso = $_POST["ingreso"];
    $tipo_ingreso = $_POST["tipo_ingreso"];
    $importe = $_POST["importe"];
    $ingreso_id = $_POST["ingreso_id"];

    $sql = "UPDATE ingresos SET ingreso='" . $ingreso . "', 
                                tipo_ingreso='" . $tipo_ingreso . "', 
                                importe=" . $importe . " 
                                WHERE ingreso_id=" . $ingreso_id;


    $res = mysqli_query($link, $sql);
    if (mysqli_affected_rows($link)) {
        header("location:../frm/principal-ingresos.php?INFORMACION=EDITA_CORRECTO");
    } else {
        header("location:../frm/principal-ingresos.php?INFORMACION=EDITA_INCORRECTO");
    }
} //if isset
else {
    header("location:../frm/principal-ingresos.php?INFORMACION=FORMULARIO");
}
