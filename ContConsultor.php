<?php


require('conec.php');
$id= $_SESSION["id_usuario"]; 
$rs = mysqli_query($con, "SELECT C.id_cuestionario,C.fecha,S.snombre,C.tipo  from Cuestionario C  inner join sucursales S on C.id_sucursal = S.id_sucursal where C.id_consultor='$id'");

                       while($row = mysqli_fetch_array($rs)){

                        echo "<tr>";   
                        
                          echo "<td>".$row['id_cuestionario']."</td>";
                          echo "<td>".$row['fecha']."</td>";
                          echo "<td>".$row['snombre']."</td>";
                          echo "<td>".$row['tipo']."</td>";
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>