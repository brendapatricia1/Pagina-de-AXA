<?php
$conectar=mysql_connect("localhost","axaveracruz16","axaveracruz1") or die("No se pudo conectar el servidor");
$base=mysql_select_db("comentarios",$conectar) or die("No se pudo encontrar la base de datos");

$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

mysql_query("INSERT INTO mensajes VALUES('$nombre','$telefono','$email','$mensaje', $conectar)" or die ("Error de datos");
?>
