<?php
$conectar=@mysql_connect('localhost','axaveracruz16','axaveracruz1');
if(!$conectar){
    echo"No se pudo conectar con el servidor";
}else{
    $base=mysql_select_db('comentarios');
    if(!$base){
        echo"No se encontro la base de datos";
    }
}
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$sql="INSERT INTO mensajes VALUES('$nombre','$telefono','$email','$mensaje')";
$ejecutar=mysql_query($sql);
if(!$ejecutar){
    echo"No se ejecuto correctamente";
}else{
    echo"Datos Guardados Correctamente <br> <a href='contacto.html'>Regresar</a>";
}
?>