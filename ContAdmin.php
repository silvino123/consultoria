<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT s.EstadoE, s.snombre,s.id_sucursal FROM sucursales s where EstadoE='Encuestando'");


                       while($row = mysqli_fetch_array($rs)){
                        $idsuc=$row['id_sucursal'];
                        echo "<tr>";   
                          echo "<td><span class='label label-warning'>".$row['EstadoE']."</span></td>";  
                          echo "<td>".$row['snombre']."</td>";
                         // echo "<td><span class='fas fa-level-up-alt'>. $row['EstadoE'] .</span></td>";
                        
                       $consultacues = "SELECT * FROM cuestionario where  id_sucursal='$idsuc'";
                      $resultadocues = mysqli_query($con,$consultacues);
                      $totalcues = mysqli_num_rows($resultadocues);
                         echo "<td>".$totalcues."</td>";
                      echo "</tr>";
                      } 
                      
                     

                      mysqli_close($con);


 ?>


