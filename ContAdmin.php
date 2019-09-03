<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT s.EstadoE, s.snombre FROM sucursales s");


                       while($row = mysqli_fetch_array($rs)){

                        echo "<tr>";   
                          echo "<td><span class='label label-warning'>".$row['EstadoE']."</span></td>";  
                          echo "<td>".$row['snombre']."</td>";
                         // echo "<td><span class='fas fa-level-up-alt'>. $row['EstadoE'] .</span></td>";
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>


