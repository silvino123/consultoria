<?php

require('conec.php');

if($_POST['rowid']) {
    $id = $_POST['rowid']; 
    

$rs = mysqli_query($con, "SELECT * FROM sucursales where id_sucursal ='$id'");
    $row = mysqli_fetch_array($rs);
    $id=$row['id_sucursal'];

$nombre=$row['snombre'];
$empresa=$row['empresa'];
$giro=$row['giro'];
$correo=$row['correo'];
$rfc=$row['rfc'];
$calle=$row['direccion'];
$Numero=$row['ndireccion'];
$colonia=$row['Colonia'];
$cp=$row['cp'];
$telefono=$row['telefono'];
$estado=$row['estado'];
$ciudad=$row['ciudad'];
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-6' style='display: none'>
    <label for='sel1'>Id</label>
        <input type='text' class='form-control' id='Cod' name='id' required=''   value='".$id."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Nombre</label>
        <input type='text' class='form-control' id='Nombre' name='Nombre' required='' value='".$nombre."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Empresa</label>
        <input type='text' class='form-control'  id='Correo' name='Empresa' required='' value='".$empresa."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Giro</label>
        <input type='text' class='form-control'  id='Correo' name='Giro' required='' value='".$giro."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Correo</label>
        <input type='email' class='form-control'  id='Correo' name='Correo' required='' value='".$correo."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>RFC</label>
        <input type='text' class='form-control'  id='Correo' name='RFC' required='' value='".$rfc."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Calle</label>
        <input type='text' class='form-control'  id='Correo' name='Calle' required='' value='".$calle."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Numero</label>
        <input type='text' class='form-control'  id='Correo' name='Numero' required='' value='".$Numero."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Colonia</label>
        <input type='text' class='form-control'  id='Correo' name='Colonia' required='' value='".$colonia."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Estado</label>
        <input type='text' class='form-control'  id='Correo' name='Estado' required='' value='".$estado."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Ciudad</label>
        <input type='text' class='form-control'  id='Correo' name='Ciudad' required='' value='".$ciudad."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Codigo Postal</label>
        <input type='text' class='form-control'  id='Correo' name='Cp' required='' value='".$cp."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Telefono</label>
        <input type='text' class='form-control'  id='Correo' name='Telefono' required='' value='".$telefono."'>
    </div>

    
    
    </div>
    
    ";
     
   
 }
 mysqli_close($con);
?>