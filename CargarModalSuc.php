<?php

require('conec.php');

if($_POST['rowid']) {
    $id = $_POST['rowid']; 
    

$rs = mysqli_query($con, "SELECT S.id_sucursal, S.snombre, S.giro, S.correo, S.rfc, S.direccion, S.ndireccion, S.Colonia, S.cp, S.telefono, S.estado, S.ciudad, S.nempleados, S.EstadoE, E.nombre FROM sucursales S inner join Empresas E on S.empresa = E.id_empresa where id_sucursal ='$id'");
    $row = mysqli_fetch_array($rs);
    $id=$row['id_sucursal'];

$nombre=$row['snombre'];
$empresa=$row['nombre'];
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
$nempleados=$row['nempleados'];
$status=$row['EstadoE'];
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
    
    <input type='text' class='form-control' readonly=»readonly» id='Empresa' name='Empresa' required='' value='".$empresa."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Giro</label>
        <input type='text' class='form-control'  id='Giro' name='Giro' required='' value='".$giro."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Numero de Empleados</label>
    <input type='text' class='form-control'  id='NEmpleados' name='NEmpleados' required='' value='".$nempleados."'>
</div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Correo</label>
        <input type='email' class='form-control'  id='Correo' name='Correo' required='' value='".$correo."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>RFC</label>
        <input type='text' class='form-control'  id='RFC' name='RFC' required='' value='".$rfc."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Calle</label>
        <input type='text' class='form-control'  id='Calle' name='Calle' required='' value='".$calle."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Numero</label>
        <input type='text' class='form-control'  id='Numero' name='Numero' required='' value='".$Numero."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Colonia</label>
        <input type='text' class='form-control'  id='Colonia' name='Colonia' required='' value='".$colonia."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Estado</label>
        <input type='text' class='form-control'  id='Estado' name='Estado' required='' value='".$estado."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Ciudad</label>
        <input type='text' class='form-control'  id='Ciudad' name='Ciudad' required='' value='".$ciudad."'>
    </div>
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Codigo Postal</label>
        <input type='text' class='form-control'  id='Cp' name='Cp' required='' value='".$cp."'>
    </div>
    
    <div class='col-12 col-lg-6'>
    <label for='sel1'>Telefono</label>
        <input type='text' class='form-control'  id='Telefono' name='Telefono' required='' value='".$telefono."'>
    </div>

    <div class='col-12 col-lg-6'>
    <label for='sel1'>Status</label>
        <input type='text' class='form-control'  id='EstadoE' name='EstadoE' required='' value='".$status."'>
    </div>
    
    
    </div>
    
    ";
     
   
 }
 mysqli_close($con);
?>