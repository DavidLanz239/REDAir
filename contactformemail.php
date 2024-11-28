<?php
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
$mail = new PHPMailer;

if ($_POST){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $telefono = $_POST["telefono"];
    $message = $_POST["message"];
    $subjecttext = "";
    $emaildestino = "";
    $mensaje = "";
    try {
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 2; 
        $mail->Username = 'noresponse@laser.com.ve';
        $mail->Password = 'S0p0rt3.';
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";
        $mail->CharSet = "UTF-8";
        $mail->isHTML(true);
        $mail->setFrom("noresponse@laser.com.ve", "nonresponse");   
        $mail->AddReplyTo("noresponse@laser.com.ve", "nonresponse");
        if ($subject == "1"){
            $subjecttext = "Atención a bordo";
        }else if ($subject == "2"){
            $subjecttext = "Atención en aeropuerto";
        }else if ($subject == "3"){
            $subjecttext = "Atención en Call Center";
        }else if ($subject == "4"){
            $subjecttext = "Atención en oficinas de venta";
        }else if ($subject == "5"){
            $subjecttext = "Servicios especiales: silla de ruedas, persona con discapacidad, traslado de mascotas, mujeres en estado de gravidez";
        }else if ($subject == "6"){
            $subjecttext = "Equipaje";
        }else if ($subject == "7"){
            $subjecttext = "Penalidades";
        }else if ($subject == "8"){
            $subjecttext = "Página Web";
        }else if ($subject == "9"){                        
            $subjecttext = "Reembolsos";      
        }  
          $mail->addAddress("postventa@laser.com.ve", ''); 
//            $mail->AddBCC("jpaulino@laser.com.ve", '');        
//            $mail->AddCC("hsuarezx@gmail.com", '');
//            $mail->AddCC("desarsan@gmail.com", "");
//            $mail->AddCC("miguel@bookmediapublicidad.com", "");
//            $mail->AddCC("dramirezeg@hotmail.com", "");
// 	   $mail->AddBCC("lcamero@laser.com.ve", "");
//            $mail->AddBCC("rdugarte@laser.com.ve", "");
//            $mail->AddBCC("jpereira@laser.com.ve", "");

        $mensaje = "Se ha recibido la siguiente solicitud de contacto:<br>Nombres y Apellidos: ".$firstname."<br>Localizador: ".$lastname."<br>Email: ".$email."<br>Telefono: ".$telefono."<br>Caso: ".$subjecttext."<br>Mensaje: ".$message;
        $mail->Subject = "Solicitud de contacto del cliente ".$firstname." localizador [".$lastname."]";
        $mail->Body    = $mensaje;
        $mail->AltBody = $mensaje;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $return = $mail->Send();
        if ($return){
            $result = array("response"=>"ok");
        }else{
            $result = array("response"=>"error [".$mail->ErrorInfo."]");
        }        
        echo json_encode($result, true);        
    } catch (phpmailerException $e) {
        $result = array("response"=>"error [".$e->errorMessage()."]");
        echo json_encode($result, false);        
    } catch (Exception $e) {
        $result = array("response"=>"error [".$e->errorMessage()."]");
        echo json_encode($result, false);        
    }	
}
?>
