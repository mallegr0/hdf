<?php

if(isset($_POST['email'])) {
    
    $email_to = "esgrimaherederosdefierro@gmail.com";
    $email_subject = "Contacto desde web";

    function died($error) {

      // mensajes de error
      echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
      echo "Detalle de los errores.<br /><br />";
      echo $error."<br /><br />";
      echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
      die();
    }
    // Se valida que los campos del formulairo estén llenos

 

    if(!isset($_POST['nombre']) ||
       !isset($_POST['email']) ||
       !isset($_POST['asunto']) ||
       !isset($_POST['mensaje'])) {
       die('Lo sentimos pero parece haber un problema con los datos enviados.');
    }

    //En esta parte el valor "name"  sirve para crear las variables que recolectaran la información de cada campo
    $nombre = $_POST['nombre']; // requerido
    $email_from = $_POST['email']; // requerido
    $asunto = $_POST['asunto']; // no requerido 
    $mensaje = $_POST['mensaje']; // requerido

    //Este es el cuerpo del mensaje tal y como llegará al correo
    $email_message = "Contenido del Mensaje.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Nombre: ".clean_string($nombre)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Asunto: ".clean_string($asunto)."\n";
    $email_message .= "Mensaje: ".clean_string($mensaje)."\n";


    //Se crean los encabezados del correo

     

    $headers = 'From: '.$email_from."\r\n". 
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
     }

     echo "mail enviado";

?>