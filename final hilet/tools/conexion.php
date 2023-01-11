<?php
// conexion con el servidor de base de datos
//varible_credencial=mysqli_connect("dirección del servidor", "usuario", "contraseña");
$link = @mysqli_connect("localhost", "root", "");

//mysqli_select_db(varible_credencial, "nombre de la base de datos");
@mysqli_select_db($link, "clase23");
