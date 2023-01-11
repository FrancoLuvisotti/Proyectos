<?php
session_start(); ///TIENE QUE ESTAR EN TODOS LOS ARCHIVOS
if (!isset($_SESSION["usuario"])) {

  header("location:../index.php?INFORMACION=INICIO_SESION");
  exit();
}
