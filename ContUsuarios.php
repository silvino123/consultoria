<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT * FROM usuarios");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id_usuario']."'>";
                          echo "<td>" . $row['id_usuario'] .  "</td>";  
                          echo "<td>" . $row['nombre'] .  "</td>";
                          echo "<td> ". $row['correo'] . "</td>";
                          echo "<td> ". $row['contraseña'] . "</td>";
                          echo "<td> ". $row['id_sucursal'] . "</td>";
                          echo "<td> ". $row['tipo'] . "</td>";
                          echo "<td>
                         
                           <a href='' class='btn btn-success'><i class='fas fa-pencil-alt' title='Editar'></i></a>
                          <a onclick='deleteAjax(".$row['id_usuario'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
                          
                          </td>";
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>


 