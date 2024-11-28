<?php
	session_start();
	include("webservices/connClass.php");
	include ("webservices/dataService.php");	
	if ($_POST){
		$dataServ = null;
		$dataServ = new dataService();
		$email = $_POST["email"];
		$password = $_POST["password"];
		$response = $dataServ->doLogin($email, $password);
		$array_response = json_decode($response);
		if ($array_response->result){
			$_SESSION["uid"] = $array_response->uid;
			$_SESSION["nombres"] = $array_response->nombres;
			$_SESSION["apellidos"] = $array_response->apellidos;
			$_SESSION["qkey"] = base64_encode($email);
		}
		echo $response;
	}
?>