<?php 

require('conec.php');

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$tipo=$_POST['tipo'];
$sucursal=$_POST['sucursal'];




	$insert= "INSERT INTO usuarios (id_usuario,nombre,correo,contraseña,tipo,id_sucursal) 
				  values ('','$nombre','$correo','$contraseña','$tipo','$sucursal')";

$ejecuta_q= mysqli_query($con,$insert) or die("Error al insertar usuario");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="usuarios.php";
    </script>';

 ?>