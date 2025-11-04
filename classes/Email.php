<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $numero;
    public $mensaje;
    
    public function __construct($contacto = [])
    {
        $this->email = $contacto->email ?? "";
        $this->nombre = $contacto->nombre ?? "";
        $this->numero = $contacto->numero ?? "";
        $this->mensaje = $contacto->mensaje ?? "";
    }

    public function enviar_mail_de_contacto() {

         // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];
    
        $mail->setFrom($this->email, $this->nombre);
        $mail->addAddress('juansanmartinprogramador@gmail.com', 'Juan Sanmartín');
        $mail->Subject = 'Mail de Contacto';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p>Hola, soy <strong>" . $this->nombre .  "</strong>, Me comunico contigo por este medio</p>";
        $contenido .= "<p>Este es mi mensaje</p>";       
        $contenido .= "<p>" . $this->mensaje . "</p>";
        $contenido .= "<p>Y este es mi numero</p>";       
        $contenido .= "<p>" . $this->numero . "</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();

    }
}