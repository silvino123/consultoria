<?php

require('conec.php');

if($_POST['rowid']) {
    $id = $_POST['rowid']; 
    

$rs = mysqli_query($con, "SELECT A.id_Area, A.anombre, S.snombre FROM areas A inner join sucursales S  on A.sucursales = S.id_sucursal where A.id_Area ='$id'");
    $row = mysqli_fetch_array($rs);

$ids=$row['id_Area'];
$nombre=$row['anombre'];
$sucursal=$row['snombre'];

    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-6' >
    <label for='sel1'>Id</label>
        <input type='text' class='form-control' readonly=»readonly» id='id' name='id' required='' value='".$ids."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Nombre</label>
        <input type='text' class='form-control' id='Nombre' name='Nombre' required='' value='".$nombre."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Sucursal</label>
        <input type='text' class='form-control' readonly=»readonly» id='Correo' name='Sucursal' required='' value='".$sucursal."'>
    </div>
    
    
    </div>
    
    ";
     
   
 }
 mysqli_close($con);
?>