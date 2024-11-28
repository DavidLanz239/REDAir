<?php
	session_start();
	session_destroy();
	echo json_encode(array("result"=>true, "response"=>"OK", "message"=>"sesion de usuario finalizada exitosamente"));			
?>