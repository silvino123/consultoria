<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT * FROM empresas");

                       while($valores = mysqli_fetch_array($rs)){

                          echo '<option value="'.$valores['id_Empresa'].'">'.$valores['Nombre'].'</option>';
                      }

                     
                      mysqli_close($con);

                      

 ?>
 

