<?php
$nombre = $_POST['nombre'];
$narch = $_POST['narch'];
$archivo = fopen($narch,'w');
fwrite($archivo, $nombre);
fclose($archivo);
?>
