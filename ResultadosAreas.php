<?php 
require('conec.php');
session_start();
//  if (!isset( $_SESSION["nombre"])){
    
//     header("location:login.html");
  
//   }
 $idsuc= $_SESSION["id_sucursal"];
 $rs = mysqli_query($con, "SELECT A.id_Area, A.anombre from areas A where sucursales='$idsuc'");
 while($row = mysqli_fetch_array($rs)){

  echo "<tr id='delete".$row['id_Area']."'>";
  
  echo "<td colspan='2' class='text-center'><b>" . $row['anombre'] .  "</b></td>";
 echo "<td colspan='1' class='text-center' style='color:#000000'><b><a href='ReporteArea.php' class='text-navy'>Ver Resultados</a></b></td>";
  
  echo "</tr>";   

}
 mysqli_close($con);
 


?>