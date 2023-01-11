<?php
if (isset($_GET["INFORMACION"])) {
  $informacion = $_GET["INFORMACION"];

  switch ($informacion) {
    case "CORRECTO": ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>¡FELICIDADES!</strong> El gasto se agregó correctamente
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php break;

    case "INCORRECTO": ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>¡ERROR!</strong> No se pudo agregar el gasto
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php break;

    case "FORMULARIO": ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>¡ADVERTENCIA!</strong> Debe completar los datos en el formulario primero
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php break;

    case "INICIO_SESION": ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>¡ADVERTENCIA!</strong> Debe iniciar sesion antes de ingresar.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php break;

    case "CREDENCIALES": ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>¡ADVERTENCIA!</strong> El usuario y/o la Contraseña son incorrectas.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php break;

    case "FORMULARIO_VACIO": ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>¡ADVERTENCIA!</strong> Debe completar todos los campos.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php break;

    case "USUARIO": ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>¡FELICIDADES!</strong> El usuario se agrego con exito.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php break;

    case "USUARIO_ERROR": ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>¡ADVERTENCIA!</strong> Error al registrarse.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php break;

    case "BORRADO": ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>¡ADVERTENCIA!</strong> Se borro con exito.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php break;

    case "ERROR_DB": ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>¡ADVERTENCIA!</strong> Error al borrar.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<?php break;
  } //switch
} //if isset


?>