<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT S.id_sucursal, S.snombre, E.Nombre, S.giro, S.rfc, S.direccion, S.ndireccion, S.Colonia, S.estado, S.ciudad, S.cp, S.correo, S.telefono, S.nempleados, S.EstadoE,S.documento from sucursales S inner join empresas E on S.empresa = E.id_Empresa");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id_sucursal']."'>";
                          echo "<td>" . $row['id_sucursal'] .  "</td>";  
                          echo "<td> ". $row['snombre'] . "</td>";
                          echo "<td> ". $row['Nombre'] . "</td>";
                          echo "<td> ". $row['giro'] . "</td>";
                          echo "<td> ". $row['nempleados'] . "</td>";
                          echo "<td> ". $row['rfc'] . "</td>";
                          echo "<td> ". $row['direccion'] . "</td>";
                          echo "<td> ". $row['ndireccion'] . "</td>";
                          echo "<td> ". $row['Colonia'] . "</td>";
                          echo "<td> ". $row['estado'] . "</td>";
                          echo "<td> ". $row['ciudad'] . "</td>";
                          echo "<td> ". $row['cp'] . "</td>";
                          echo "<td> ". $row['correo'] . "</td>";
                          echo "<td> ". $row['telefono'] . "</td>";
                          
                          echo "<td> ". $row['EstadoE'] . "</td>";
                          echo "<td><a> ". $row['documento'] ."</a></td>";
                          echo "<td>
                         
                           <a class='btn btn-success' data-toggle='modal' data-target='#Sucursales' data-id=".$row['id_sucursal']."><i class='fas fa-pencil-alt' title='Editar' ></i></a> 
                          <a onclick='deleteAjax(".$row['id_sucursal'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
                          <a class='btn btn-info' data-toggle='modal' data-target='#pdf' data-id=".$row['id_sucursal']."><i class='fas fa-file-pdf' title='Agregar PDF' ></i></a> 
                          </td>";
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>
 <script type="text/javascript">
   
   function deleteAjax(id_sucursal) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar esta sucursal?','El elemento se eliminara permanentemente', function(){
       //alertify.success('Pastel Elininado'),
       $.ajax({
           type: 'post',
           url: 'EliminarSucursal.php',
           data:{delete_id:id_sucursal},
           success:function(data){
             
           location.href ="Sucursales.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>

