<?php 

require('conec.php');
$id_usuario=$_POST['id_usuario'];

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$password=$_POST['password'];
$tipo=$_POST['tipo'];
$id_sucursal=$_POST['id_sucursal'];

//$rs = mysqli_query($con,"SELECT * FROM usuarios WHERE id_usuarios='$id_usuario'");

$qss ="UPDATE usuarios set nombre='$nombre',correo='$correo',password = '$password', tipo = '$tipo', id_sucursal = '$id_sucursal' WHERE id_usuario='$id_usuario'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: usuarios.php');


 ?>