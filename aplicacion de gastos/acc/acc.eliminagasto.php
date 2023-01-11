<?php
if (isset($_GET["gasto_id"])) {
    include "../tools/conexion.php";
    include "../tools/alertas.php";
    $gasto_id = $_GET["gasto_id"];

    $sql = "DELETE FROM gastos WHERE gasto_id=" . $gasto_id;
    $res = mysqli_query($link, $sql);

    if (mysqli_affected_rows($link)) {
        header("location:../frm/principal-gastos.php?INFORMACION=BORRADO");
    } else {
        header("location:../frm/principal-gastos.php?INFORMACION=ERROR_DB");
    }
}
