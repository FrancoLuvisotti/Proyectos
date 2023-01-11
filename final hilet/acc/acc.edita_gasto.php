<?php
include "acc.proteccion.php";
include "../tools/conexion.php";


if (isset($_POST["gasto"]) and isset($_POST["tipo_gasto"]) and isset($_POST["importe"]) and isset($_POST["gasto_id"])) {
    $gasto = $_POST["gasto"];
    $tipo_gasto = $_POST["tipo_gasto"];
    $importe = $_POST["importe"];
    $gasto_id = $_POST["gasto_id"];

    $sql = "UPDATE gastos SET gasto='" . $gasto . "', 
                                tipo_gasto='" . $tipo_gasto . "', 
                                importe=" . $importe . " 
                                WHERE gasto_id=" . $gasto_id;


    $res = mysqli_query($link, $sql);
    if (mysqli_affected_rows($link)) {
        header("location:../frm/principal-gastos.php?INFORMACION=EDITA_CORRECTO");
    } else {
        header("location:../frm/principal-gastos.php?INFORMACION=EDITA_INCORRECTO");
    }
} //if isset
else {
    header("location:../frm/principal-gastos.php?INFORMACION=FORMULARIO");
}
