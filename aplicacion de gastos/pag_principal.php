<?php
include "./acc/acc.proteccion.php";
include "./tools/conexion.php";
include "./tools/barraprincipal.php"
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Control de Gastos</title>
</head>

<body>
    <div class="container">
        <br>
        <div class="row justify-content-center pt-3 mt-5 m-1">
            <div class="col-4">&nbsp;</div>
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <div class="form-group text-center pt-3">
                    <h3 class="text-light">Resumen Gastos/Ingresos</h3>
                </div>
                <?php
                $sql = "SELECT importe FROM gastos WHERE usuario_id=" . $_SESSION["usuario_id"];
                $res = @mysqli_query($link, $sql);
                $sql2 = "SELECT importe FROM ingresos WHERE usuario_id=" . $_SESSION["usuario_id"];
                $res2 = @mysqli_query($link, $sql2);
                ?>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gastos</th>
                            <th scope="col">Ingresos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $importe_total = 0;
                        $importe_total2 = 0;
                        while ($fila = @mysqli_fetch_array($res)) { ?>
                        <?php $importe_total = $importe_total + $fila["importe"];
                        } ?>
                        <?php
                        while ($fila2 = @mysqli_fetch_array($res2)) { ?>
                        <?php $importe_total2 = $importe_total2 + $fila2["importe"];
                        } ?>
                        <tr>
                            <th scope="row">Total</th>
                            <td>$<?php echo $importe_total ?></td>
                            <td>$<?php echo $importe_total2 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Gastos vs Ingresos</th>
                            <td>$<?php echo $importes = $importe_total2 - $importe_total; ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group-vertical btn-block" role="group" aria-label="Basic example">

                    <a href="frm/principal-gastos.php" class="btn btn-primary btn-lg" role="button">Agregar Gasto</a>
                    <a href="frm/principal-ingresos.php" class="btn btn-primary btn-lg" role="button">Agregar Ingreso</a>
                    <!-- <a href="acc/acc.salir.php" class="btn btn-danger btn-lg" role="button">Salir</a> -->

                </div>
            </div>
            <div class="col-4">&nbsp;</div>
        </div>
    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/sweetAlert.js"></script> -->

</body>

</html>