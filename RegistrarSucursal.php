<?php 

require('conec.php');

$nombre=$_POST['Nombre'];
$sucursal=$_POST['Empresa'];
$giro=$_POST['Giro'];
$correo=$_POST['Correo'];
$rfc=$_POST['RFC'];
$calle=$_POST['Calle'];
$Numero=$_POST['Numero'];
$colonia=$_POST['Colonia'];
$cp=$_POST['Cp'];
$telefono=$_POST['Telefono'];
$estado=$_POST['Estado'];
$ciudad=$_POST['Ciudad'];
$nempleados=$_POST['NEmpleados'];
$status=$_POST['Status'];

	$insert= "INSERT INTO sucursales (id_sucursal,snombre,empresa,rfc,giro,correo,telefono,direccion,ndireccion,estado,ciudad,cp,colonia,EstadoE, NEmpleados) 
				  values ('','$nombre','$sucursal','$rfc', '$giro', '$correo','$telefono', '$calle',$Numero,'$estado', '$ciudad','$cp', '$colonia', '$status', '$nempleados')";

$ejecuta_q= mysqli_query($con,$insert) or die("Error al insertar sucursal");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="Sucursales.php";
    </script>';

 ?>