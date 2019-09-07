<?php


require('conec.php');

$rs = mysqli_query($con, "SELECT C.id_cuestionario,C.fecha,S.snombre,C.tipo,u.nombre  from Cuestionario C  inner join sucursales S on C.id_sucursal = S.id_sucursal inner join usuarios u on C.id_consultor=u.id_usuario order by C.id_cuestionario");

                       while($row = mysqli_fetch_array($rs)){

                        echo "<tr id='delete".$row['id_cuestionario']."'>";   
                        
                          echo "<td>".$row['id_cuestionario']."</td>";
                          echo "<td>".$row['fecha']."</td>";
                          echo "<td>".$row['snombre']."</td>";
                          echo "<td>".$row['tipo']."</td>";
                          echo "<td>".$row['nombre']."</td>";
                          echo "<td>
                         
                           
                          <a onclick='deleteAjax(".$row['id_cuestionario'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
                          
                          </td>";
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>
 <script type="text/javascript">
   
   function deleteAjax(id_cuestionario) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este cuestionrio?','El elemento se eliminara permanentemente', function(){
       //alertify.success('Pastel Elininado'),
       $.ajax({
           type: 'post',
           url: 'EliminarCuestionario.php',
           data:{delete_id:id_cuestionario},
           success:function(data){
             
           location.href ="Encuesta.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>

