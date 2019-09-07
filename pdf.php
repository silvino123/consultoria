<?php 

require('conec.php');
$id=$_POST['Cod'];

$img=$_POST['im'];
$destino="Documentos/";
$imagens=$_FILES['im']['tmp_name'];
$nomimagen=$_FILES['im']['name'];
$ext= pathinfo($nomimagen);

//move_uploaded_file($imagens, $destino."/".$pastel.".".$ext['extension']);
$nom=$nomimagen.".".$ext['extension'];

$rs = mysqli_query($con,"SELECT documento FROM sucursales WHERE id_sucursal='$id'");
	$foto = mysqli_fetch_array($rs);
    $destino2="Documentos/".$foto['documento'];
   
    
if (!file_exists($destino.$nom)) {
    move_uploaded_file($imagens, $destino."/".$nom);
}
if($_FILES['im']['name']!=null){
     if(file_exists($destino2)){
        unlink($destino.$foto['documento']);
    }
    $qss ="UPDATE sucursales set documento='$nomimagen' WHERE id_sucursal=$id"; 


}else{
    //$qss ="UPDATE imagenes set nombre='$nombre',descripcion='$des',categoria='$cat' WHERE id=$id"; 
   
}
$ejecuta_qss= mysqli_query($con,$qss) or die("error al subir archivo pdf");

mysqli_close($con);
header('Location: Sucursales.php');


 ?>