<?php
require('conec.php');
    //Lo obtiene del formulario.
    $email = $_POST['correo'];
    //Suponiendo que esta la base de datos.
   
    $sql="select * from usuarios WHERE correo = '$email'"; //Va obtener los datos y si no tiene nada pues no hace nada el programa.
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $password=$row['password'];
    $useremail=$row['correo'];
    $user=$row['nombre'];
    $error = '';
    $rows = $result->num_rows;
   
    use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;
        
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        $to = "promissconsultoria@gmail.com";
        $subject = htmlspecialchars("Recuperacion de Contrasena.");
    if($rows > 0) {
       
        
        $message="Hola ".$user."<br> "."tu contraseña de acceso a Promiss es: ".$password;
       
        
        
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
        
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = "promissconsultoria@gmail.com";                 // SMTP username
            $mail->Password = "PlattGil";                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
        
            //Recipients
            $mail->setFrom($to, 'Promiss Consultoria');
            $mail->addAddress($useremail,$user);
            // $mail->addAddress('lindaruedaflores@gmail.com', 'Linda Ruedaflores'); 
            // $mail->addAddress('alexmillanes30@gmail.com', 'Alejandro Millanes');
            // $mail->addAddress('alberto9406@gmail.com', 'Alberto Rodriguez'); 
            // $mail->addAddress('ameliagpe.partida@gmail.com', 'Amelia Partida');
            // $mail->addAddress('contacto@sycsoft.com.mx', 'Sycsoft Team');
                // Add a recipient
         
        
            
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            //$mail->AddAttachment($Img['tmp_name'], $Img['name']);
            $mail->send();
            echo "
                        <script language='JavaScript'>
                        var mensaje = 'Mensaje Enviado, Espere Respuesta del Equipo de Promiss Consultoria';
                        alert(mensaje);
                        </script>";
                echo "
                        <script>
                         document.location.href = 'login.html';
                        </script> "; 
        
        } catch (Exception $e) {
            echo 'Hubo Un Error Al Enviar Su Mensaje: ', $mail->ErrorInfo;
        }
        
   }
   else{
    echo "
    <script language='JavaScript'>
    var mensaje = 'El Correo ingresado no se encuentra registrado';
    alert(mensaje);
    </script>";
echo "
    <script>
     document.location.href = 'Recuperar.html';
    </script> "; 
   }
   mysqli_close($con);
?>