<?php
$nombre = $_POST['nombres'];
$narch = $_POST['narch'];
$archivo = fopen($narch,'w');
fwrite($archivo, $nombres);
fclose($archivo);
?>
