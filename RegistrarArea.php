<?php 

require('conec.php');

$nombre=$_POST['nombre'];
$sucursal=$_POST['sucursal'];

	$insert= "INSERT INTO areas (id_Area,anombre,sucursales) 
				  values ('','$nombre','$sucursal')";

$ejecuta_q= mysqli_query($con,$insert) or die("Error al insertar empresa");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="areas.php";
    </script>';

 ?>