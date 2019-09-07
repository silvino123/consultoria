<?php

require('conec.php');

if($_POST['rowid']) {
    $id = $_POST['rowid']; 
    

$rs = mysqli_query($con, "SELECT * FROM sucursales where id_sucursal ='$id'");
    $row = mysqli_fetch_array($rs);
    $idm =$row['id_sucursal'];
    
    $ima=$row['documento'];
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-6' style='display: none'>
    <label for='sel1'>Id</label>
        <input type='text' class='form-control' id='Cod' name='Cod' required=''   value='".$idm."'>
    </div>
  
    <div class='col-12 col-lg-6'>
            <label for='sel1'>Archivo PDF:</label>
            <span class='fileinput-filename'></span>
        <input type='file' class='form-control' id='im' name='im'/>
    </div>
    
   </div>";
     
   mysqli_close($con);
 }
?>
  