<?php 

require('conec.php');

$nombre=$_POST['Nombre'];
$giro=$_POST['Giro'];


	$insert= "INSERT INTO empresas (id_Empresa,Nombre) 
				  values ('','$nombre')";

$ejecuta_q= mysqli_query($con,$insert) or die("Error al insertar empresa");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="Sucursales.php";
    </script>';

 ?>