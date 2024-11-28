<?php
session_start();
include("webservices/connClass.php");
include("webservices/dataService.php");	
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
$mail = new PHPMailer;

if ($_POST){
    $email = $_POST["emailreg"];
    $subjecttext = "";
    $emaildestino = "";
    $mensaje = "";
	$dataServ = null;
	$dataServ = new dataService();
	$json_checkemail = array();
	$json_checkemail = json_decode($dataServ->checkEmailAddress($email));
	if (isset($json_checkemail) && $json_checkemail->result){
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
			$emaildestino = $email;
			$mail->setFrom("noresponse@laser.com.ve", "nonresponse");
			$mail->AddReplyTo("noresponse@laser.com.ve", "nonresponse");			
 			$mail->addAddress($emaildestino, '');
//  			$mail->AddCC("laserpym@gmail.com", '');
//  			$mail->AddCC("hsuarezx@gmail.com", '');
//  			$mail->AddCC("desarsan@gmail.com", "");
//  			$mail->AddCC("miguel@bookmediapublicidad.com", "");
//  			$mail->AddCC("dramirezeg@hotmail.com", "");			
// 			$mail->AddCC("lcamero@laser.com.ve", "");						
			$mensaje = "Para recuperar su clave, por favor haga click en el <a href='http://www.laserairlines.com/changepwd.php?qkey=".base64_encode($email)."'>siguiente link</a>";
			$mail->Subject = "Cambiar la clave de tu cuenta en Laser Airlines.";
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
			$result = array("response"=>"ok");
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
	}else{
		$result = array("response"=>"error");
		echo json_encode($result, false);   
	}	
}
?>
