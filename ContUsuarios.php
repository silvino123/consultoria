<?php 
require('conec.php');

//$rs = mysqli_query($con, "SELECT A.id_Area, A.anombre, S.snombre, E.Nombre from areas A inner join sucursales S on A.sucursales = S.id_sucursal inner join empresas E on S.empresa = E.id_Empresa");

$rs = mysqli_query($con, "SELECT u.id_usuario, u.nombre, u.correo, u.password, u.tipo, S.snombre FROM usuarios u inner join sucursales S on u.id_sucursal = S.id_sucursal");


                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id_usuario']."'>";
                          echo "<td>" . $row['id_usuario'] .  "</td>";  
                          echo "<td>" . $row['nombre'] .  "</td>";
                          echo "<td> ". $row['correo'] . "</td>";
                          echo "<td> ". $row['password'] . "</td>";
                          echo "<td> ". $row['snombre'] . "</td>";
                          echo "<td> ". $row['tipo'] . "</td>";
                          echo "<td>
                         
                          <a data-toggle='modal' data-target='#usuarios' data-id=".$row['id_usuario']." class='btn btn-success'><i class='fas fa-pencil-alt' title='Editar'></i></a>                        
                          <a onclick='deleteAjax(".$row['id_usuario'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
                                                  
                          </td>";
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>


<script type="text/javascript">
   
   function deleteAjax(id_usuario) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este usuario?','El elemento se eliminara permanentemente', function(){
       //alertify.success('Pastel Elininado'),
       $.ajax({
           type: 'post',
           url: 'EliminarUsuario.php',
           data:{delete_id:id_usuario},
           success:function(data){
             
           location.href ="usuarios.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>