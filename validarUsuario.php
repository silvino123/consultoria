<?php
require('conec.php');

$correo = $_POST['correo'];
$password = $_POST['password'];

$rs  = "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password'";

$qs = mysqli_query($con, $rs);
$row    = mysqli_fetch_assoc($qs);
// if (!isset($row)) {
//     header("location: login.html");
// }
         $id  = $row['id_usuario'];
         $nombre= $row['correo'];
         $password = $row['password'];
         $tipo = $row['tipo'];

        session_start();
    if ($row["correo"] == $correo && $row["password"] == $password) {
       
        
        $_SESSION['nombre'] = $nombre;
        $_SESSION['tipo'] = $tipo;
        $_SESSION['id'] = $id;

         

        echo "
                <script language='JavaScript'>
                var mensaje='Sesion iniciada';
                alert(mensaje);

                </script>";

        if ($tipo == "Administrador"){
                echo "
                        <script>
                        document.location.href = 'admin.php';
                        </script> ";

        }elseif($tipo == "Consultor"){
                echo "
                        <script>
                        document.location.href = 'consultor.php';
                        </script> ";
        }else{
                echo "
                        <script>
                        document.location.href = 'cliente.php';
                        </script> ";
        }
        

    } 
    else {
        echo "
                <script language='JavaScript'>
                var mensaje='Usuario o contraseña incorrecto';
                alert(mensaje);

                </script>";
       echo "
                <script>
                 document.location.href = 'login.html';
                </script> ";
        

        
    }

?>
 <!-- <script language='JavaScript'>
         function Sesion(){
                alertify
               .alert('Sesion iniciada', function(){
                  alertify.message('OK');
                  });
         }
 </script> -->