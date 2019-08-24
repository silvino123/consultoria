<?php 
require('conec.php');

$id =$_POST['cargar'];

$rs = mysqli_query($con, "SELECT snombre FROM sucursales where empresa = '$id'");



                       while($valores = mysqli_fetch_array($rs)){

                          echo 
                          
                          '<option  value="'.$valores['id_sucursal'].'">'.$valores['snombre'].'</option>';
                      }

                      
                      mysqli_close($con);

                      

 ?>
 

