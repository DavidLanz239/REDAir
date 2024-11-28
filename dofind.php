<?php
	session_start();
	include("webservices/connClass.php");
	include("webservices/dataService.php");
	if ($_POST){
		$dataServ = null;
		$dataServ = new dataService();
		$data = $_POST["data"];
		$response = $dataServ->doFind($data);
		echo $response;
	}
?>