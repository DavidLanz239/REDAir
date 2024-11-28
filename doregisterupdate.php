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
	$telefono = @$_POST["telefono"];
	$celular = @$_POST["celular"];
	$acceptinfo = @$_POST["acceptinfo"];
	if ($acceptinfo == "false"){
	    $acceptinfo = "0";
	}else{
	    $acceptinfo = "1";
    }
	$acceptoffers = @$_POST["acceptoffers"];
	if ($acceptoffers == "false"){
	    $acceptoffers = "0";
	}else{
	    $acceptoffers = "1";
	}	
	$id = @$_POST["id"];	
	echo $dataServ->updateLaserUser($firstname, $lastname, $birthday, $birthmonth, $birthyear, $country, $emailreg, $telefono, $celular, $acceptinfo, $acceptoffers, $id);
}
?>