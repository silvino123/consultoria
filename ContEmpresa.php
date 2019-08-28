<?php 
require('conec.php');

$rs = mysqli_query($con, "SELECT * FROM Empresas");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr id='delete".$row['id_Empresa']."'>";
                          echo "<td>" . $row['id_Empresa'] .  "</td>";  
                          echo "<td>" . $row['Nombre'] .  "</td>";
                         
                         
                          echo "<td>
                         
                           <a data-target='#Empresas' data-toggle='modal' class='btn btn-success' data-id=".$row['id_Empresa']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
                          <a onclick='deleteAjax(".$row['id_Empresa'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
                          
                          </td>";
                          echo "</tr>";   

                      }

                      mysqli_close($con);


 ?>

<script type="text/javascript">
   
   function deleteAjax(id_Empresa) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar esta Empresa?','El elemento se eliminara permanentemente', function(){
       //alertify.success('Pastel Elininado'),
       $.ajax({
           type: 'post',
           url: 'EliminarEmpresa.php',
           data:{delete_id:id_Empresa},
           success:function(data){
             
           location.href ="empresas.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>


 