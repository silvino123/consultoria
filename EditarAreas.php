<?php 

require('conec.php');
$id=$_POST['id'];

$nombre=$_POST['Nombre'];
$sucursal=$_POST['Sucursal'];



$qss ="UPDATE areas set anombre='$nombre',sucursal = '$sucursal' WHERE id_Area='$id'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: areas.php');


 ?>