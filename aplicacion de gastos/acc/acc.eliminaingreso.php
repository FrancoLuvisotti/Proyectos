<?php
if (isset($_GET["ingreso_id"])) {
    include "../tools/conexion.php";
    include "../tools/alertas.php";
    $ingreso_id = $_GET["ingreso_id"];

    $sql = "DELETE FROM ingresos WHERE ingreso_id=" . $ingreso_id;
    $res = mysqli_query($link, $sql);

    if (mysqli_affected_rows($link)) {
        header("location:../frm/principal-ingresos.php?INFORMACION=BORRADO");
    } else {
        header("location:../frm/principal-ingresos.php?INFORMACION=ERROR_DB");
    }
}
