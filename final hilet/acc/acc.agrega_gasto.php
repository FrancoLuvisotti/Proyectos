<?php
include "acc.proteccion.php";
include "../tools/conexion.php";

if (isset($_POST["gasto"]) and isset($_POST["tipo_gasto"]) and isset($_POST["importe"])) {

    $gasto = $_POST["gasto"];
    $tipo_gasto = $_POST["tipo_gasto"];
    $importe = $_POST["importe"];


    $sql = "INSERT INTO   `gastos` 
                                (gasto, 
                                tipo_gasto, 
                                importe,
                                usuario_id) 
                            VALUES(
                                '" . $gasto . "', 
                                '" . $tipo_gasto . "', 
                                " . $importe . ",
                                " . $_SESSION["usuario_id"] . ")";

    $res = mysqli_query($link, $sql);
    if ($res != "") {
        if (mysqli_affected_rows($link)) {
            header("location:../frm/principal-gastos.php?INFORMACION=CORRECTO");
            exit();
        } else {
            header("location:../frm/principal-gastos.php?INFORMACION=INCORRECTO");
            exit();
        }
    } else {
        header("location:../frm/principal-gastos.php?INFORMACION=FORMULARIO_VACIO");
        exit();
    }
} //if isset
else {
    header("location:../frm/principal-gastos.php?INFORMACION=FORMULARIO");
    exit();
}
