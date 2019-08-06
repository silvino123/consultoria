<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT * FROM Empresas");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id_Empresa']."'>";
                          echo "<td>" . $row['id_Empresa'] .  "</td>";  
                          echo "<td>" . $row['Nombre'] .  "</td>";
                          echo "<td> ". $row['Giro'] . "</td>";
                          echo "<td> ". $row['Empleados'] . "</td>";
                          echo "<td>
                         
                           <a href='' class='btn btn-success'><i class='fas fa-pencil-alt' title='Editar'></i></a>
                          <a onclick='deleteAjax(".$row['id_Empresa'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
                          
                          </td>";
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>


 