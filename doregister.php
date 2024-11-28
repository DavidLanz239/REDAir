<?php
	session_start();
	include("webservices/connClass.php");
	include("webservices/dataService.php");	
if ($_POST){
	$dataServ = null;
	$dataServ = new dataService();	
	$firstname = @$_POST["firstname"];
	$lastname = @$_POST["lastname"];
	$birthday = @$_POST["birthday"];
	$birthmonth = @$_POST["birthmonth"];
	$birthyear = @$_POST["birthyear"];
	$country = @$_POST["country"];
	$emailreg = @$_POST["emailreg"];
	$pwdreg = @$_POST["pwdreg"];
	$telefono = @$_POST["telefono"];
	$celular = @$_POST["celular"];
	$acceptinfo = @$_POST["acceptinfo"];
	$acceptoffers = @$_POST["acceptoffers"];	
	echo $dataServ->saveLaserUser($firstname, $lastname, $birthday, $birthmonth, $birthyear, $country, $emailreg, $pwdreg, $telefono, $celular, $acceptinfo, $acceptoffers);
}
?>