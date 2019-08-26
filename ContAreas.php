<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT A.id_Area, A.anombre, S.snombre, E.Nombre from areas A inner join sucursales S on A.sucursales = S.id_sucursal inner join empresas E on S.empresa = E.id_Empresa");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id_Area']."'>";
                          echo "<td>" . $row['id_Area'] .  "</td>";  
                          echo "<td>" . $row['anombre'] .  "</td>";
                          echo "<td> ". $row['Nombre'] . "</td>";
                          echo "<td> ". $row['snombre'] . "</td>";
                          echo "<td>
                         
                           <a data-toggle='modal' data-target='#Areas' class='btn btn-success'><i class='fas fa-pencil-alt' title='Editar'></i></a>
                          <a onclick='deleteAjax(".$row['id_Area'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
                          
                          </td>";
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>

<script type="text/javascript">
   
   function deleteAjax(id_Area) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar esta area?','El elemento se eliminara permanentemente', function(){
       //alertify.success('Pastel Elininado'),
       $.ajax({
           type: 'post',
           url: 'EliminarArea.php',
           data:{delete_id:id_Area},
           success:function(data){
             
           location.href ="areas.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>


