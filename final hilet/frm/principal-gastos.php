<?php
include "../acc/acc.proteccion.php";
include "../tools/barra.php";
include "../tools/conexion.php";

?>
<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/estilos.css">

  <title>Gastos</title>
</head>

<body>
  <div class="container">
    <?php
    include "../tools/alertas.php";
    ?>
    <div class="row justify-content-center pt-3 mt-5 m-1">
      <!-- <div class="col-4">&nbsp;</div> -->
      <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
        <br>
        <form method="POST" action="../acc/acc.agrega_gasto.php">
          <div class="form-group text-center">
            <h2 class="text-light">GASTOS</h2>
          </div>
          <div class="form-group">
            <label for="gasto">Gasto</label>
            <input type="text" class="form-control" name="gasto" placeholder="Combustible" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="tipo_gasto">Tipo de gasto</label>
            <select class="form-control" name="tipo_gasto">
              <option value="comida">Comida</option>
              <option value="transporte">Transporte</option>
              <option value="servicios">Servicios</option>
              <option value="impuestos">Impuestos</option>
              <option value="salud">Salud</option>
              <option value="limpieza">Limpieza</option>
              <option value="higiene">Higiene</option>
            </select>
          </div>
          <div class="form-group">
            <label for="importe">Importe</label>
            <input type="text" class="form-control" name="importe" placeholder="125.95" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-lg">Agregar gasto</button>
        </form>
      </div>
    </div>
    <div class="col-4">&nbsp;</div>
  </div>
  </div>
  <?php
  $sql = "SELECT * FROM gastos WHERE usuario_id=" . $_SESSION["usuario_id"];
  $res = @mysqli_query($link, $sql);
  ?>
  <div class="container">
    <div class="row">
      <table class="table table-dark">
        <thead class="thead-dark">
          <tr>
            <th>Gasto</th>
            <th>Tipo de gasto</th>
            <th>Importe</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $importe_total = 0;
          while ($fila = @mysqli_fetch_array($res)) { ?>
            <tr>
              <td><?php echo $fila["gasto"]; ?></td>
              <td><?php echo $fila["tipo_gasto"]; ?></td>
              <td>$<?php echo $fila["importe"]; ?></td>
              <td>
                <?php include "../modales/modal_borra_gasto.php"; ?>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_borra_gasto<?php echo $fila['gasto_id']; ?>">
                  <i class="bi bi-trash"></i>
                </button>
                &nbsp;
                <!-- <a class="btn btn-success" href="frm.editagasto.php?gasto_id=<?php echo $fila['gasto_id']; ?>">
                        <i class="bi bi-pencil-square"></i>
                      </a> -->
                <?php include "../modales/modal_edita_gasto.php"; ?>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_edita_gasto<?php echo $fila['gasto_id']; ?>">
                  <i class="bi bi-pencil-square"></i>
                </button>
              </td>
            </tr>
          <?php
            $importe_total = $importe_total + $fila["importe"];
          }
          ?>
          <tr>
            <td><b>TOTAL:</b>$<?php echo $importe_total; ?></td>
          </tr>
      </table>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      var auxiliar = "primera variable";
      console.log(auxiliar);
      auxiliar = "segundo intento";
      console.log(auxiliar);
    });
  </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>