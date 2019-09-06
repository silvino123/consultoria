<?php 
require('conec.php');

//  if (!isset( $_SESSION["nombre"])){
    
//     header("location:login.html");
  
//   }
 $idsuc= $_SESSION["id_sucursal"];
 $rs = mysqli_query($con, "SELECT A.id_Area, A.anombre from areas A where sucursales='$idsuc'");
 while($row = mysqli_fetch_array($rs)){

  
  
  echo "<th style='background-color:#d2d2d2;color:#000000' ><b>" . $row['anombre'] .  "</b></th>";
 
  
   

}
 mysqli_close($con);
 


?>