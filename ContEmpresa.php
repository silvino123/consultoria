<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT * FROM Empresas");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id_Empresa']."'>";
                          echo "<td>" . $row['id_Empresa'] .  "</td>";  
                          echo "<td>" . $row['Nombre'] .  "</td>";
                          echo "<td> ". $row['Giro'] . "</td>";
                          
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>


 