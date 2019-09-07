<?php 

require('conec.php');
$id=$_POST['id'];

$nombre=$_POST['Nombre'];
$empresa=$_POST['Empresa'];
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
$status=$_POST['EstadoE'];
$doc=$_POST['documento'];

$qss ="UPDATE sucursales set snombre='$nombre',rfc = '$rfc',correo='$correo', giro = '$giro', direccion = '$calle', ndireccion = '$Numero', Colonia = '$colonia', estado = '$estado', ciudad = '$ciudad', cp = '$cp', telefono = '$telefono', nempleados = '$nempleados', EstadoE = '$status', documento = '$doc' WHERE id_sucursal='$id'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: Sucursales.php');


 ?>