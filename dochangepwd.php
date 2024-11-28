<?php
session_start();
include("webservices/connClass.php");
include("webservices/dataService.php");	
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
$mail = new PHPMailer;

if ($_POST){
    $pwdreg = $_POST["pwdreg"];
	$emailreg = $_POST["emailreg"];
    $subjecttext = "";
    $emaildestino = "";
    $mensaje = "";
	$dataServ = null;
	$dataServ = new dataService();
	echo $dataServ->updatePwd($emailreg, $pwdreg);
}
?>