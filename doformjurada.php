<?php 
session_start();
include("webservices/connClass.php");
include("webservices/dataService.php");	
if ($_POST){
    $dataServ = null;
    $dataServ = new dataService();
    $nombrepila = $_POST["nombrepila"];
    $apellido = $_POST["apellido"];
    $gender = $_POST["gender"];
    $fechanacimiento = $_POST["fechanacimiento"];
    $nacionalidad = $_POST["nacionalidad"];
    $numeropasaporte = $_POST["numeropasaporte"];
    $pais = $_POST["pais"];
    $callenro = $_POST["callenro"];
    $ciudad = $_POST["ciudad"];
    $telefonocontacto = $_POST["telefonocontacto"];
    $lineaaerea = $_POST["lineaaerea"];
    $fechavuelo = $_POST["fechavuelo"];
    $numvuelo = $_POST["numvuelo"];
    $nombrelugar = $_POST["nombrelugar"];
    $fechallegadapais = $_POST["fechallegadapais"];
    $fechasalidapais = $_POST["fechasalidapais"];
    $companiatransporte = $_POST["companiatransporte"];
    $primerpaisembarque = $_POST["primerpaisembarque"];
    $paistransitoantes = $_POST["paistransitoantes"];
    $paisesvisitados30 = $_POST["paisesvisitados30"];
    $fiebre = $_POST["fiebre"];
    $respiratoria = $_POST["respiratoria"];
    $tos = $_POST["tos"];
    $cabeza = $_POST["cabeza"];
    $garganta = $_POST["garganta"];
    $fatiga = $_POST["fatiga"];
    $secrecionnasal = $_POST["secrecionnasal"];
    $escalofrios = $_POST["escalofrios"];
    $dolormuscular = $_POST["dolormuscular"];
    $ninguno = $_POST["ninguno"];
    $otrossintomas = $_POST["otrossintomas"];
    $fechainiciosintomas = $_POST["fechainiciosintomas"];
    $direccionestadia = $_POST["direccionestadia"];
    
    $paramtosend = "";
    $paramtosend = $nombrepila.";".$apellido.";".$gender.";".$fechanacimiento.";".$nacionalidad.";".$numeropasaporte.";".$pais.";".$callenro.";".$ciudad.";".$telefonocontacto.";".$lineaaerea.";".$fechavuelo.";".$numvuelo.";".$nombrelugar.";".$fechallegadapais.";".$fechasalidapais.";".$companiatransporte.";".$primerpaisembarque.";".$paistransitoantes.";".$paisesvisitados30.";".$fiebre.";".$respiratoria.";".$tos.";".$cabeza.";".$garganta.";".$fatiga.";".$secrecionnasal.";".$escalofrios.";".$dolormuscular.";".$ninguno.";".$otrossintomas.";".$fechainiciosintomas.";".$direccionestadia;
    echo $dataServ->saveJurada($paramtosend);
}
?>