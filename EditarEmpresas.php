<?php 

require('conec.php');
$id=$_POST['id'];

$nombre=$_POST['Nombre'];




$qss ="UPDATE empresas set nombre='$nombre' WHERE id_Empresa='$id'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: empresas.php');


 ?>