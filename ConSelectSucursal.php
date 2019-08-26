<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT * FROM sucursales");

                       while($valores = mysqli_fetch_array($rs)){

                          echo '<option value="'.$valores['id_sucursal'].'">'.$valores['snombre'].'</option>';
                      }

                     
                      mysqli_close($con);

                      

 ?>
 

