<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Edicion de Usuario</title>
</head>

<body>
    <div class="container">
        <?php
        include "../tools/alertas.php";
        ?>
        <div class="row justify-content-center pt-3 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form method="POST" action="../acc/acc.edita_usuario.php">
                    <div class="form-group text-center pt-3">
                        <h1 class="text-light">Edicion de usuario</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <label for="usuario">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <label for="passA">Contraseña Anterior:</label>
                        <input type="password" class="form-control" name="passA" placeholder="Ingrese su contraseña" autocomplete="off">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <label for="passN">Contraseña Nueva:</label>
                        <input type="password" class="form-control" name="passN" placeholder="Ingrese su contraseña" autocomplete="off">
                    </div>
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" class="btn btn-block ingresar" value="GUARDAR" name="registro">
                        <a href="../pag_principal.php">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="../js/sweetAlert.js"></script>  mensaje de bienvenido -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>

</html>