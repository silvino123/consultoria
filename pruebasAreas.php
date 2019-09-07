<?php 
require('conec.php');
  
//  if (!isset( $_SESSION["nombre"])){
    
//     header("location:login.html");
  
//   }
 $idsuc= $_SESSION["id_sucursal"];
 $rs = mysqli_query($con, "SELECT A.id_Area, A.anombre from areas A where sucursales='$idsuc'");
 while($row = mysqli_fetch_array($rs)){
   $idArea= $row['id_Area'];
  echo "<tr id='delete".$row['id_Area']."'>";
  
  echo "<td class='text-center'><b>" . $row['anombre'] .  "</b></td>";
  $consultacues = "SELECT * FROM cuestionario where  area='$idArea'";
                      $resultadocues = mysqli_query($con,$consultacues);
                      $total = mysqli_num_rows($resultadocues);
                         echo "<td class='text-center'>".$total."</td>";
  
  echo "</tr>";   

}
 mysqli_close($con);
 


?>
 