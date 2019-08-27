<?php

require('conec.php');

if($_POST['rowid']) {
    $id_usuario = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT u.id_usuario, u.nombre, u.correo, u.password, u.tipo, S.snombre, FROM usuarios u inner join sucursales S on u.id_sucursal = S.id_sucursal where u.id_usuario ='$id_usuario'");
    $row = mysqli_fetch_array($rs);

    $ids=$row['id_usuario'];
    $nombre=$row['nombre'];
    $correo=$row['correo'];
    $password=$row['password'];
    $tipo=$row['tipo'];
    $sucursal=$row['snombre'];

    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_usuario' name='id_usuario' required=''   value='".$ids."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Nombre</label>
                <input type='text' class='form-control' id='nombre' name='nombre' required='' value='".$nombre."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Correo</label>
                <input type='email' class='form-control' id='correo' name='correo' required='' value='".$correo."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Password</label>
                <input type='text' class='form-control' id='password' name='password' required='' value='".$password."'>
            </div>
            <div class='form-group'>
                <label>Tipo de Usuario</label>
                <select class='form-control' id='tipo' name='tipo' required=''>
                    <option value='".$tipo."' selected=''>".$tipo."</option>
                    <option value='Administrador'>Administrador</option>
                    <option value='Consultor'>Consultor</option>
                    <option value='Empresa'>Empresa</option>
                </select>
            </div>                                                                                                                
            <div class='form-group'><label>Sucursal</label> 
                <select  placeholder='' class='form-control' id='id_sucursal' name='id_sucursal' required='>
                    <?php 
                        require('ConSelectSucursal.php');
                    ?>
                </select>
            </div>
    
        </div>
    
    ";
     
   
 }
 mysqli_close($con);
?>