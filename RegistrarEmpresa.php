<?php 

require('conec.php');

$nombre=$_POST['Nombre'];
$giro=$_POST['Giro'];
$empleados=$_POST['Empleados'];

	$insert= "INSERT INTO empresas (id_Empresa,Nombre,Empleados,Giro) 
				  values ('','$nombre','$empleados','$giro')";

$ejecuta_q= mysqli_query($con,$insert) or die("Error al insertar empresa");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="empresas.php";
    </script>';

 ?>