<?php
$link=mysqli_connect("localhost","root","");
if ($link) {
	mysqli_select_db($link,"data");
}
$checkbox=$_POST['checkbox'];
foreach ($checkbox as $key => $value) {
	$ficha2="INSERT INTO prueba SET nombre='$value'";
	$ejecutar_insertar_ficha2=mysqli_query($link,$ficha2);
}
?>