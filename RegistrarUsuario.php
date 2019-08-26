<?php 

require('conec.php');

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$password=$_POST['password'];
$tipo=$_POST['tipo'];
$id_sucursal=$_POST['id_sucursal'];

	$insert= "INSERT INTO usuarios (id_usuario,nombre,correo,password,tipo,id_sucursal) 
				  values ('','$nombre','$correo','$password','$tipo','$id_sucursal')";

$ejecuta_q= mysqli_query($con,$insert) or die("Error al insertar usuario");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="usuarios.php";
    </script>';

 ?>