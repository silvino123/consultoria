<?php 

require('conec.php');

$nombre=$_POST['nombre'];
$sucursal=$_POST['Empresa'];

	$insert= "INSERT INTO sucursales (id_sucursal,snombre,empresa) 
				  values ('','$nombre','$sucursal')";

$ejecuta_q= mysqli_query($con,$insert) or die("Error al insertar sucursal");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="Sucursales.php";
    </script>';

 ?>