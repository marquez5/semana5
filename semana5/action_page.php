<?php
$miObjeto= new stdClass();
$miObjeto->nombre=$_GET ['nombre'];
$miObjeto->apellido=$_GET ['apellido'];

$archivo = fopen('usuario.txt', 'a');
fwrite($archivo, json_encode($miObjeto)."\n");
fclose($archivo);
?>