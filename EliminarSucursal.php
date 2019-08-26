<?php 
require('conec.php');


$id = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM sucursales WHERE id_sucursal ='$id'");



 ?>