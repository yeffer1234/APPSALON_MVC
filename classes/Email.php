<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {
public $nombre;
public $email;
public $token;

    public function __construct( $nombre, $email  , $token)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;
    }

   

    public function enviarConfirmacion(){
        // Crear el objecto de email
        $mail = new PHPMailer();
        $mail->isSMTP();

        $mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = '1c85d0116be987';
$mail->Password = 'be4fa23a984522';
  
$mail->setFrom("cuentas@appsalon.com");
$mail->addAddress("cuentas@appsalon.com", "AppSalon.com");
$mail->Subject = "Confirma tu cuenta";

//Set  HTML 
$mail->isHTML(TRUE);
$mail->CharSet = "UTF-8";

$contenido = "<html>";

$contenido .= "<p><strong>Hola " . $this->nombre ." </strong> Has creado tu cuenta en Venus Estudios,
 solo debes confirmarla presionando el siguiente enlace</p>";

 $contenido.= "<p>Presiona Aqui:<a href='http://localhost:3000/confirmar-cuenta?token=".
 
 $this->token   ."' > Confirmar Cuenta </a>  </p>";
 $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
 $contenido .="</html>";

 $mail->Body = $contenido;

//enviar el mail
$mail->send();


    }

    public function enviarInstrucciones(){
             //crear el objecto de email
             $mail = new PHPMailer();
             $mail->isSMTP();
     
     $mail->Host = 'smtp.mailtrap.io';
     $mail->SMTPAuth = true;
     $mail->Port = 2525;
     $mail->Username = '1c85d0116be987';
     $mail->Password = 'be4fa23a984522';
     
     $mail->setFrom("cuentas@appsalon.com");
     $mail->addAddress("cuentas@appsalon.com", "AppSalon.com");
     $mail->Subject = "Reestablece tu password";
     
     //Set  HTML 
     $mail->isHTML(TRUE);
     $mail->CharSet = "UTF-8";
     
     $contenido = "<html>";
     
     $contenido .= "<p><strong>Hola " . $this->nombre ." </strong> Has solicitado reestablecer tu password, 
     sigue el siguiente enlace para reestablecerlo</p>";
     
      $contenido.= "<p>Presiona Aqui:<a href='http://localhost:3000/recuperar?token=".
      
      $this->token   ."' > Reestablecer  Password </a>  </p>";
      $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
      $contenido .="</html>";
     
      $mail->Body = $contenido;
     
     //enviar el mail
     $mail->send();
     
    }
}