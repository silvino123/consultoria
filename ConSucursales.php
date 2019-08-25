<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT S.id_sucursal, S.snombre, E.Nombre from sucursales S inner join empresas E on S.empresa = E.id_Empresa");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id_sucursal']."'>";
                          echo "<td>" . $row['id_sucursal'] .  "</td>";  
                          echo "<td> ". $row['snombre'] . "</td>";
                          echo "<td> ". $row['Nombre'] . "</td>";
                         
                          echo "<td>
                         
                           <a href='' class='btn btn-success'><i class='fas fa-pencil-alt' title='Editar'></i></a>
                          <a onclick='deleteAjax(".$row['id_sucursal'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
                          
                          </td>";
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>

