<?php
session_start();
include ("webservices/connClass.php");
include ("webservices/dataService.php");
$dataServ = null;
$dataServ = new dataService();
$json_tarifasequip = array();
$json_tarifasdesc = array();
$json_paises = array();
$x = 0;
$json_tarifasequip = json_decode($dataServ->getTarifasEquipajeList());
$json_tarifasdesc = json_decode($dataServ->getTarifasDescList());
$json_paises = json_decode($dataServ->getCountriesList());
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Laser Airlines</title>
<meta name="description" content="Somos la aerolínea venezolana con mayor trayectoria en el mercado nacional, ofrecemos el mejor servicio a bordo, acompañado de nuestra puntualidad, eficiencia y pronta respuesta de acuerdo a las necesidades y exigencias de los pasajeros.">
<meta name="author" content="Laser Airlines">
<meta name="keyword" content="Laser, Airlines, aerolinea, avion, viajes">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800'
	rel='stylesheet' type='text/css'>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="assets/img/laser_ico.ico"
	type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/fontello.css">
<link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css"
	rel="stylesheet">
<link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/icheck.min_all.css">
<link rel="stylesheet" href="assets/css/price-range.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.theme.css">
<link rel="stylesheet" href="assets/css/owl.transitions.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	var sapa = "0";
	function doValidateDec(){
			if (sapa == "0"){
				var formData = new FormData();
				// ------
				formData.append('nombrepila', document.getElementById("nombrepila").value);
				formData.append('apellido', document.getElementById("apellido").value);
				if (document.getElementsByName("gender")[0].checked){					
					formData.append('gender', document.getElementsByName("gender")[0].value);
				}
				if (document.getElementsByName("gender")[1].checked){					
					formData.append('gender', document.getElementsByName("gender")[1].value);
				}				
				// ------
				formData.append('fechanacimiento', document.getElementById("fechanacimiento").value);
				formData.append('nacionalidad', document.getElementById("nacionalidad").value);
				formData.append('numeropasaporte', document.getElementById("numeropasaporte").value);
				formData.append('pais', document.getElementById("pais").value);
				formData.append('callenro', document.getElementById("callenro").value);
				// ------				
				formData.append('ciudad', document.getElementById("ciudad").value);
				formData.append('telefonocontacto', document.getElementById("telefonocontacto").value);
				if (document.getElementsByName("medio")[0].checked){					
					formData.append('medio', document.getElementsByName("medio")[0].value);
				}
				if (document.getElementsByName("medio")[1].checked){					
					formData.append('medio', document.getElementsByName("medio")[1].value);
				}		
				if (document.getElementsByName("medio")[2].checked){					
					formData.append('medio', document.getElementsByName("medio")[2].value);
				}	
				formData.append('lineaaerea', document.getElementById("lineaaerea").value);
				formData.append('fechavuelo', document.getElementById("fechavuelo").value);
				formData.append('numvuelo', document.getElementById("numvuelo").value);
				// ------				
				formData.append('nombrelugar', document.getElementById("nombrelugar").value);
				formData.append('fechallegadapais', document.getElementById("fechallegadapais").value);
				formData.append('fechasalidapais', document.getElementById("fechasalidapais").value);
				formData.append('companiatransporte', document.getElementById("companiatransporte").value);
				formData.append('primerpaisembarque', document.getElementById("primerpaisembarque").value);
				formData.append('paistransitoantes', document.getElementById("paistransitoantes").value);
				formData.append('paisesvisitados30', document.getElementById("paisesvisitados30").value);
				// ------
				formData.append('fiebre', document.getElementById("fiebre").checked);
				formData.append('respiratoria', document.getElementById("respiratoria").checked);
				formData.append('tos', document.getElementById("tos").checked);
				formData.append('cabeza', document.getElementById("cabeza").checked);
				formData.append('garganta', document.getElementById("garganta").checked);
				formData.append('fatiga', document.getElementById("fatiga").checked);
				formData.append('secrecionnasal', document.getElementById("secrecionnasal").checked);
				formData.append('escalofrios', document.getElementById("escalofrios").checked);
				formData.append('dolormuscular', document.getElementById("dolormuscular").checked);
				formData.append('ninguno', document.getElementById("ninguno").checked);
				formData.append('otrossintomas', document.getElementById("otrossintomas").value);
				formData.append('fechainiciosintomas', document.getElementById("fechainiciosintomas").value);
				formData.append('direccionestadia', document.getElementById("direccionestadia").value);
				formData.append('firmauser', $("#firma").contents().find("#codigoimagen").val());
				// ------
				
				$.ajax({
				   url : 'doformjuradanew.php',
				   type : 'POST',
				   data : formData,
				   processData: false,
				   contentType: false,
				   success : function(datax) {
						var myObj = JSON.parse(datax);
						if (myObj.result){
							registerMessage("Gracias por completar el formulario de declaración de salud del viajero");
							frmdeclaracion.reset();
							firma.location.reload();
						}else{
							registerMessage("Usted lleno previamente el formulario de declaración de salud del viajero!");							
						}												  
				   }
				});							
		}else{
			fechainiciosintomas.focus();
			sintomastxt.style.display = "block";
		}
	}

	$(document).ready(function() {
		nombrepila.focus();
	});
	function botonsubmit(){
            frmdeclaracion.action = "javascript:doValidateDec();";
            firmacontainer.value = $("#firma").contents().find("#codigoimagen").val();
            frmdeclaracion.target = "_self";
	    setTimeout(function(){
	        $('html, body').animate({scrollTop: document.documentElement.scrollTop - 150 }, 0);
	    }, 0);
	}
</script>
<style>
Input:Focus {
     Background-color: yellow;
}
.divinfo{    
    font-size:10px;
    font-weight:bold;
    float:left;
 }
.div2block2{
    width:50%;
    display: inline-block;
}
.div1block2{
    width:49%;
    display: inline-block;
}
#nacionalidad{
    margin-left: -4px;
}
.div4block2 {
    width: 29%;
    display: inline-block;
    vertical-align: top;
}
.div5block2{
    width: 50% !important;
    display: inline-block;
}
.div6block2{
    width: 18%;
    display: inline-block;
}
.div3block1 {
    width: 49%;
    display: inline-block !important;
}
.div3block2{
    width: 20%;
    display: inline-block !important;
}
.div1block4 {
    width: 10% !important;
    display: inline-block;
}
.div2block4 {
    width: 17%;
    display: inline-block;
}
.div3block4 {
    width: 10%;
    display: inline-block;
}
.div4block4 {
    width: 17%;
    display: inline-block;
    margin-left: 10px;
}
.div5block4 {
    width: 15%;
    display: inline-block;
}
.div1block5 {
    width: 10% !important;
    display: inline-block;
}
.div2block5 {
    width: 17% !important;
    display: inline-block;
}
.div3block5 {
    width: 11% !important;
    display: inline-block;
}
.div4block5 {
    width: 16% !important;
    display: inline-block;
}
.div5block5 {
    width: 32% !important;
    display: inline-block;
}
.div1block8 {
    width: 100% !important;
    display: inline-block;
}
@media (max-width: 480px){
    .div1block2{
	width:100% !important;
        display: inline-block;
    }
    .div2block2{
        width:100% !important; 
        display: inline-block; 
    }
    .div3block2 {
        width: 100% !important;
        display: inline-block !important;
    }
    .div4block2 {
        width: 100% !important;
        display: block !important;
    }
    .div3block1 {
        width: 100% !important;
        display: inline-block !important;
        margin-top: 33px;
    }   
    .div1block4 {
        width: 100% !important;
        display: inline-block;
    }  
    .div2block4 {
        width: 100% !important;
        display: inline-block;
    }   
    .div3block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div4block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div5block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div6block2{
        width:49% !important;
        display: inline-block;
    }
}
@media (max-width: 979px) and (min-width: 768px){
    .div6block2{
        width:49% !important;
        display: inline-block;
    }
    .div1block2{
        width:100% !important;
        display: inline-block;
    }
    .div2block2{
        width:100% !important; 
        display: inline-block; 
    }
    .div3block2 {
        width: 100% !important;
        display: block !important;
    }
    .div4block2 {
        width: 100% !important;
        display: block !important;
    }  
    .div3block1 {
        width: 100% !important;
        display: block !important;
        margin-top: 33px;
    }  
    .button.navbar-right {
        padding-top: -35px;
        float: left;
        position: absolute;
        left: 76%;
        top: 18px;
    }     
    .div1block4 {
        width: 100% !important;
        display: inline-block;
    }
    .div2block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div3block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div4block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div5block4 {
        width: 100% !important;
        display: inline-block;
    }     
}
</style>
</head>
<body>

	<!--         <div id="preloader"> -->
	<!--             <div id="status">&nbsp;</div> -->
	<!--         </div> -->
	<!-- Body content -->
<?php include("includes/header.php"); ?>


        <div class="page-head">
		<div class="container">
			<div class="row">
				<div class="page-head-content">
					<!-- <h1 class="page-title">Quienes somos</h1>   -->
				</div>
			</div>
		</div>
	</div>
	<!-- End page header -->

	<div class="content-area blog-page padding-top-40"
		style="background-color: #FCFCFC; padding-bottom: 55px;">
		<div class="container">
			<div class="row" id="formdata" name="formdata"
				style="display: block; width: 100%; margin-left: 0px;">
				<form id="frmdeclaracion" name="frmdeclaracion" method="post"
					action="javascript:doValidateDec();">
					<div style="width: 100%; text-align: center;">
						<h3>DECLARACIÓN DE SALUD DEL VIAJERO</h3>
					</div>
					<hr>
					<div id="block2" name="block2" style="width:100%">
						<div style="width: 100%; text-align: center; color: ; font-size:16px; font-weight:bold;">
							IDENTIFICACIÓN DEL VIAJERO O TRIPULANTE
						</div>
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="div1block2" name="div1block2" class="div1block2">
							<div style="width:100%;">
								Nombres
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="nombrepila" name="nombrepila" style="width:95%" class="form-control" required>
							</div>												
					</div>
					<div id="div2block2" name="div2block2" class="div2block2">
							<div style="width:100%;">
								Apellidos
							</div>	
							<div style="width:100%; text-align:left;">
								<input type="text" id="apellido" name="apellido" style="width:100%" class="form-control" required>
							</div>					
					</div>			
					<div id="div3block2" name="div3block2" class="div3block2">
							<div style="width:100%;">
								Sexo
							</div>		
							<div style="width:100%; text-align:left;">
								<div style="width:100px; display: inline-block">
                                    <label for="genderm">Másculino</label>&nbsp;<input type="radio" name="gender" value="m">                                    
    							</div>
								<div style="width:100px; display: inline-block">
                                    <label for="genderm">Femenino</label>&nbsp;<input type="radio" name="gender" value="f">                                    
    							</div>    							
							</div>						
					</div>
					<div id="div4block2" name="div4block2" class="div4block2">
    						<div style="width:100%;">
    							Fecha de nacimiento (dd/mm/aaaa)
    						</div>
    						<div style="width:100%; text-align:left;">
    							<input type="text" id="fechanacimiento" name="fechanacimiento" style="width:90%" class="form-control" data-provide="datepicker" required readonly>
    						</div>							
					</div>
					<div id="div5block2" name="div5block2" class="div5block2">
    						<div style="width:100%;">
    							Nacionalidad
    						</div>
    						<div style="width:100%; text-align:left;">
    							<input type="text" id="nacionalidad" name="nacionalidad" style="width:100%" class="form-control" required>
    						</div>							
					</div>	
					<div id="div6block2" name="div6block2" class="div6block2">
    						<div style="width:100%;">
    							Nro. de pasaporte
    						</div>
    						<div style="width:100%; text-align:left;">
    							<input type="text" id="numeropasaporte" name="numeropasaporte" style="width:100%" class="form-control" required>
    						</div>							
					</div>
					<div style="width:100%; height:20px"></div>
					<div id="block1" name="block1" style="width:100%">
						<div style="width: 100%; text-align: center; color: ; font-size:14px; font-weight:bold;">
							DIRECCIÓN DE RESIDENCIA PERMANENTE
						</div>
						<div style="width:100%; height:20px"></div>
						<div id="div1block1" name="div1block1" class="div1block1">
							<div style="width:100%;">
								País
							</div>
							<div style="width:100%; text-align:left;">
<select id="pais" name="pais" class="form-control" style="width:95%">
<option value="	Akrotiri	">	Akrotiri	</option>
<option value="	Albania	">	Albania	</option>
<option value="	Alemania	">	Alemania	</option>
<option value="	Andorra	">	Andorra	</option>
<option value="	Angola	">	Angola	</option>
<option value="	Anguila	">	Anguila	</option>
<option value="	Antartida	">	Antartida	</option>
<option value="	AntiguayBarbuda	">	AntiguayBarbuda	</option>
<option value="	AntillasNeerlandesas	">	AntillasNeerlandesas	</option>
<option value="	ArabiaSaudi	">	ArabiaSaudi	</option>
<option value="	ArcticOcean	">	ArcticOcean	</option>
<option value="	Argelia	">	Argelia	</option>
<option value="	Argentina	">	Argentina	</option>
<option value="	Armenia	">	Armenia	</option>
<option value="	Aruba	">	Aruba	</option>
<option value="	AshmoreandCartierIslands	">	AshmoreandCartierIslands	</option>
<option value="	AtlanticOcean	">	AtlanticOcean	</option>
<option value="	Australia	">	Australia	</option>
<option value="	Austria	">	Austria	</option>
<option value="	Azerbaiyan	">	Azerbaiyan	</option>
<option value="	Bahamas	">	Bahamas	</option>
<option value="	Bahrain	">	Bahrain	</option>
<option value="	Bangladesh	">	Bangladesh	</option>
<option value="	Barbados	">	Barbados	</option>
<option value="	Belgica	">	Belgica	</option>
<option value="	Belice	">	Belice	</option>
<option value="	Benin	">	Benin	</option>
<option value="	Bermudas	">	Bermudas	</option>
<option value="	Bielorrusia	">	Bielorrusia	</option>
<option value="	BirmaniaMyanmar	">	BirmaniaMyanmar	</option>
<option value="	Bolivia	">	Bolivia	</option>
<option value="	BosniayHercegovina	">	BosniayHercegovina	</option>
<option value="	Botsuana	">	Botsuana	</option>
<option value="	Brasil	">	Brasil	</option>
<option value="	Brunei	">	Brunei	</option>
<option value="	Bulgaria	">	Bulgaria	</option>
<option value="	BurkinaFaso	">	BurkinaFaso	</option>
<option value="	Burundi	">	Burundi	</option>
<option value="	Butan	">	Butan	</option>
<option value="	CaboVerde	">	CaboVerde	</option>
<option value="	Camboya	">	Camboya	</option>
<option value="	Camerun	">	Camerun	</option>
<option value="	Canada	">	Canada	</option>
<option value="	Chad	">	Chad	</option>
<option value="	Chile	">	Chile	</option>
<option value="	China	">	China	</option>
<option value="	Chipre	">	Chipre	</option>
<option value="	ClippertonIsland	">	ClippertonIsland	</option>
<option value="	Colombia	">	Colombia	</option>
<option value="	Comoras	">	Comoras	</option>
<option value="	Congo	">	Congo	</option>
<option value="	CoralSeaIslands	">	CoralSeaIslands	</option>
<option value="	CoreadelNorte	">	CoreadelNorte	</option>
<option value="	CoreadelSur	">	CoreadelSur	</option>
<option value="	CostadeMarfil	">	CostadeMarfil	</option>
<option value="	CostaRica	">	CostaRica	</option>
<option value="	Croacia	">	Croacia	</option>
<option value="	Cuba	">	Cuba	</option>
<option value="	Dhekelia	">	Dhekelia	</option>
<option value="	Dinamarca	">	Dinamarca	</option>
<option value="	Dominica	">	Dominica	</option>
<option value="	Ecuador	">	Ecuador	</option>
<option value="	Egipto	">	Egipto	</option>
<option value="	ElSalvador	">	ElSalvador	</option>
<option value="	ElVaticano	">	ElVaticano	</option>
<option value="	EmiratosarabesUnidos	">	EmiratosarabesUnidos	</option>
<option value="	Eritrea	">	Eritrea	</option>
<option value="	Eslovaquia	">	Eslovaquia	</option>
<option value="	Eslovenia	">	Eslovenia	</option>
<option value="	Espana	">	Espana	</option>
<option value="	EstadosUnidos	">	EstadosUnidos	</option>
<option value="	Estonia	">	Estonia	</option>
<option value="	Etiopia	">	Etiopia	</option>
<option value="	Filipinas	">	Filipinas	</option>
<option value="	Finlandia	">	Finlandia	</option>
<option value="	Fiyi	">	Fiyi	</option>
<option value="	Francia	">	Francia	</option>
<option value="	Gabon	">	Gabon	</option>
<option value="	Gambia	">	Gambia	</option>
<option value="	GazaStrip	">	GazaStrip	</option>
<option value="	Georgia	">	Georgia	</option>
<option value="	Ghana	">	Ghana	</option>
<option value="	Gibraltar	">	Gibraltar	</option>
<option value="	Granada	">	Granada	</option>
<option value="	Grecia	">	Grecia	</option>
<option value="	Groenlandia	">	Groenlandia	</option>
<option value="	Guam	">	Guam	</option>
<option value="	Guatemala	">	Guatemala	</option>
<option value="	Guernsey	">	Guernsey	</option>
<option value="	Guinea	">	Guinea	</option>
<option value="	GuineaEcuatorial	">	GuineaEcuatorial	</option>
<option value="	Guinea-Bissau	">	Guinea-Bissau	</option>
<option value="	Guyana	">	Guyana	</option>
<option value="	Haiti	">	Haiti	</option>
<option value="	Honduras	">	Honduras	</option>
<option value="	HongKong	">	HongKong	</option>
<option value="	Hungria	">	Hungria	</option>
<option value="	India	">	India	</option>
<option value="	IndianOcean	">	IndianOcean	</option>
<option value="	Indonesia	">	Indonesia	</option>
<option value="	Iran	">	Iran	</option>
<option value="	Iraq	">	Iraq	</option>
<option value="	Irlanda	">	Irlanda	</option>
<option value="	IslaBouvet	">	IslaBouvet	</option>
<option value="	IslaChristmas	">	IslaChristmas	</option>
<option value="	IslaNorfolk	">	IslaNorfolk	</option>
<option value="	Islandia	">	Islandia	</option>
<option value="	IslasCaiman	">	IslasCaiman	</option>
<option value="	IslasCocos	">	IslasCocos	</option>
<option value="	IslasCook	">	IslasCook	</option>
<option value="	IslasFeroe	">	IslasFeroe	</option>
<option value="	IslasGeorgiadelSurySandwichdelSur	">	IslasGeorgiadelSurySandwichdelSur	</option>
<option value="	IslasHeardyMcDonald	">	IslasHeardyMcDonald	</option>
<option value="	IslasMalvinas	">	IslasMalvinas	</option>
<option value="	IslasMarianasdelNorte	">	IslasMarianasdelNorte	</option>
<option value="	IslasPitcairn	">	IslasPitcairn	</option>
<option value="	IslasSalomon	">	IslasSalomon	</option>
<option value="	IslasTurcasyCaicos	">	IslasTurcasyCaicos	</option>
<option value="	IslasVirgenesAmericanas	">	IslasVirgenesAmericanas	</option>
<option value="	IslasVirgenesBritanicas	">	IslasVirgenesBritanicas	</option>
<option value="	IslasMarshall	">	IslasMarshall	</option>
<option value="	Israel	">	Israel	</option>
<option value="	Italia	">	Italia	</option>
<option value="	Jamaica	">	Jamaica	</option>
<option value="	JanMayen	">	JanMayen	</option>
<option value="	Japon	">	Japon	</option>
<option value="	Jersey	">	Jersey	</option>
<option value="	Jordania	">	Jordania	</option>
<option value="	Kazajistan	">	Kazajistan	</option>
<option value="	Kenia	">	Kenia	</option>
<option value="	Kirguizistan	">	Kirguizistan	</option>
<option value="	Kiribati	">	Kiribati	</option>
<option value="	Kuwait	">	Kuwait	</option>
<option value="	Laos	">	Laos	</option>
<option value="	Lesoto	">	Lesoto	</option>
<option value="	Letonia	">	Letonia	</option>
<option value="	Libano	">	Libano	</option>
<option value="	Liberia	">	Liberia	</option>
<option value="	Libia	">	Libia	</option>
<option value="	Liechtenstein	">	Liechtenstein	</option>
<option value="	Lituania	">	Lituania	</option>
<option value="	Luxemburgo	">	Luxemburgo	</option>
<option value="	Macao	">	Macao	</option>
<option value="	Macedonia	">	Macedonia	</option>
<option value="	Madagascar	">	Madagascar	</option>
<option value="	Malasia	">	Malasia	</option>
<option value="	Malaui	">	Malaui	</option>
<option value="	Maldivas	">	Maldivas	</option>
<option value="	Mali	">	Mali	</option>
<option value="	Malta	">	Malta	</option>
<option value="	Man,Isleof	">	Man,Isleof	</option>
<option value="	Marruecos	">	Marruecos	</option>
<option value="	Mauricio	">	Mauricio	</option>
<option value="	Mauritania	">	Mauritania	</option>
<option value="	Mayotte	">	Mayotte	</option>
<option value="	Mexico	">	Mexico	</option>
<option value="	Micronesia	">	Micronesia	</option>
<option value="	Moldavia	">	Moldavia	</option>
<option value="	Monaco	">	Monaco	</option>
<option value="	Mongolia	">	Mongolia	</option>
<option value="	Montserrat	">	Montserrat	</option>
<option value="	Mozambique	">	Mozambique	</option>
<option value="	Namibia	">	Namibia	</option>
<option value="	Nauru	">	Nauru	</option>
<option value="	NavassaIsland	">	NavassaIsland	</option>
<option value="	Nepal	">	Nepal	</option>
<option value="	Nicaragua	">	Nicaragua	</option>
<option value="	Niger	">	Niger	</option>
<option value="	Nigeria	">	Nigeria	</option>
<option value="	Niue	">	Niue	</option>
<option value="	Noruega	">	Noruega	</option>
<option value="	NuevaCaledonia	">	NuevaCaledonia	</option>
<option value="	NuevaZelanda	">	NuevaZelanda	</option>
<option value="	Oman	">	Oman	</option>
<option value="	PacificOcean	">	PacificOcean	</option>
<option value="	PaisesBajos	">	PaisesBajos	</option>
<option value="	Pakistan	">	Pakistan	</option>
<option value="	Palaos	">	Palaos	</option>
<option value="	Panama	">	Panama	</option>
<option value="	Papua-NuevaGuinea	">	Papua-NuevaGuinea	</option>
<option value="	ParacelIslands	">	ParacelIslands	</option>
<option value="	Paraguay	">	Paraguay	</option>
<option value="	Peru	">	Peru	</option>
<option value="	PolinesiaFrancesa	">	PolinesiaFrancesa	</option>
<option value="	Polonia	">	Polonia	</option>
<option value="	Portugal	">	Portugal	</option>
<option value="	PuertoRico	">	PuertoRico	</option>
<option value="	Qatar	">	Qatar	</option>
<option value="	ReinoUnido	">	ReinoUnido	</option>
<option value="	RepublicaCentroafricana	">	RepublicaCentroafricana	</option>
<option value="	RepublicaCheca	">	RepublicaCheca	</option>
<option value="	RepublicaDemocraticadelCongo	">	RepublicaDemocraticadelCongo	</option>
<option value="	RepublicaDominicana	">	RepublicaDominicana	</option>
<option value="	Ruanda	">	Ruanda	</option>
<option value="	Rumania	">	Rumania	</option>
<option value="	Rusia	">	Rusia	</option>
<option value="	SaharaOccidental	">	SaharaOccidental	</option>
<option value="	Samoa	">	Samoa	</option>
<option value="	SamoaAmericana	">	SamoaAmericana	</option>
<option value="	SanCristobalyNieves	">	SanCristobalyNieves	</option>
<option value="	SanMarino	">	SanMarino	</option>
<option value="	SanPedroyMiquelon	">	SanPedroyMiquelon	</option>
<option value="	SanVicenteylasGranadinas	">	SanVicenteylasGranadinas	</option>
<option value="	SantaHelena	">	SantaHelena	</option>
<option value="	SantaLucia	">	SantaLucia	</option>
<option value="	SantoTomeyPrincipe	">	SantoTomeyPrincipe	</option>
<option value="	Senegal	">	Senegal	</option>
<option value="	Seychelles	">	Seychelles	</option>
<option value="	SierraLeona	">	SierraLeona	</option>
<option value="	Singapur	">	Singapur	</option>
<option value="	Siria	">	Siria	</option>
<option value="	Somalia	">	Somalia	</option>
<option value="	SouthernOcean	">	SouthernOcean	</option>
<option value="	SpratlyIslands	">	SpratlyIslands	</option>
<option value="	SriLanka	">	SriLanka	</option>
<option value="	Suazilandia	">	Suazilandia	</option>
<option value="	Sudafrica	">	Sudafrica	</option>
<option value="	Sudan	">	Sudan	</option>
<option value="	Suecia	">	Suecia	</option>
<option value="	Suiza	">	Suiza	</option>
<option value="	Surinam	">	Surinam	</option>
<option value="	SvalbardyJanMayen	">	SvalbardyJanMayen	</option>
<option value="	Tailandia	">	Tailandia	</option>
<option value="	Taiwan	">	Taiwan	</option>
<option value="	Tanzania	">	Tanzania	</option>
<option value="	Tayikistan	">	Tayikistan	</option>
<option value="	TerritorioBritanicodelOceanoIndico	">	TerritorioBritanicodelOceanoIndico	</option>
<option value="	TerritoriosAustralesFranceses	">	TerritoriosAustralesFranceses	</option>
<option value="	TimorOriental	">	TimorOriental	</option>
<option value="	Togo	">	Togo	</option>
<option value="	Tokelau	">	Tokelau	</option>
<option value="	Tonga	">	Tonga	</option>
<option value="	TrinidadyTobago	">	TrinidadyTobago	</option>
<option value="	Tunez	">	Tunez	</option>
<option value="	Turkmenistan	">	Turkmenistan	</option>
<option value="	Turquia	">	Turquia	</option>
<option value="	Tuvalu	">	Tuvalu	</option>
<option value="	Ucrania	">	Ucrania	</option>
<option value="	Uganda	">	Uganda	</option>
<option value="	UnionEuropea	">	UnionEuropea	</option>
<option value="	Uruguay	">	Uruguay	</option>
<option value="	Uzbekistan	">	Uzbekistan	</option>
<option value="	Vanuatu	">	Vanuatu	</option>
<option value="	Venezuela	">	Venezuela	</option>
<option value="	Vietnam	">	Vietnam	</option>
<option value="	WakeIsland	">	WakeIsland	</option>
<option value="	WallisyFutuna	">	WallisyFutuna	</option>
<option value="	WestBank	">	WestBank	</option>
<option value="	World	">	World	</option>
<option value="	Yemen	">	Yemen	</option>
<option value="	Yibuti	">	Yibuti	</option>
<option value="	Zambia	">	Zambia	</option>
<option value="	Zimbabue	">	Zimbabue	</option>

</select>

							</div>							
						</div>
						<div id="div2block1" name="div2block1" class="div2block1">
							<div style="width:100%;">
								Calle
							</div>	
							<div style="width:100%; text-align:left;">
								<input type="text" id="callenro" name="callenro" min="1" style="width:90%" class="form-control" required>
							</div>
						</div>
						<div id="div3block1" name="div3block1" class="div3block1">
							<div style="width:100%;">
								Ciudad: Sector /Barrio Provincia/Estado/ Departamento
							</div>		
							<div style="width:100%; text-align:left;">
								<input type="text" id="ciudad" name="ciudad" style="width:100%" class="form-control" required>
							</div>
						</div>
						<div id="div4block1" name="div4block1" class="div4block1">
							<div style="width:100%;">
								Teléfono contacto en Lugar de Residencia
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="telefonocontacto" name="telefonocontacto" style="width:100%" class="form-control" required>
							</div>							
						</div>						
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="block3" name="block3" style="width:100%">
						<div style="width: 100%; text-align: center; color: ; font-size:14px; font-weight:bold;">
							DATOS DE VIAJE
						</div>
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="div1block3" name="div1block3" class="div1block3">
							<div style="width:100%;">
								Medio de transporte
							</div>		
							<div style="width:100%; text-align:left;">
								<div style="width:100px; display: inline-block">
                                    <label for="aereo">Aéreo</label>&nbsp;<input type="radio" name="medio" value="aereo">                                    
    							</div>
								<div style="width:100px; display: inline-block">
                                    <label for="maritimo">Marítimo</label>&nbsp;<input type="radio" name="medio" value="maritimo">                                    
    							</div>    	
								<div style="width:100px; display: inline-block">
                                    <label for="terrestre">Terrestre</label>&nbsp;<input type="radio" name="medio" value="terrestre">                                    
    							</div> 
							</div>						
					</div>
					<div id="div2block3" name="div2block3" class="div2block3">
							<div style="width:100%;margin-left: 16px;">
								Línea aérea
							</div>
							<div style="width:100%; text-align:left;margin-left: 16px;">
								<input type="text" id="lineaaerea" name="lineaaerea" style="width:100%" class="form-control" required>
							</div>												
					</div>
					<div id="div3block3" name="div3block3" class="div3block3">
							<div style="width:100%;">
								Fecha del vuelo
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="fechavuelo" name="fechavuelo" style="width:97%" class="form-control" required readonly>
							</div>												
					</div>
					<div id="div4block3" name="div4block3" class="div4block3">
							<div style="width:100%;margin-left: 16px;">
								Nro. del vuelo
							</div>
							<div style="width:100%; text-align:left;margin-left: 16px;">
								<input type="text" id="numvuelo" name="numvuelo" style="width:100%" class="form-control" required>
							</div>												
					</div>	
					<div id="div5block3" name="div5block3" class="div5block3">
							<div style="width:100%;">
								Nombre del lugar de entrada
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="nombrelugar" name="nombrelugar" style="width:100%" class="form-control" required>
							</div>												
					</div>
					<div id="div6block3" name="div6block3" class="div6block3">
							<div style="width:100%;">
								Fecha de llegada al País
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="fechallegadapais" name="fechallegadapais" style="width:100%" class="form-control"  data-provide="datepicker"  required readonly>
							</div>												
					</div>
					<div id="div7block3" name="div7block3" class="div7block3">
							<div style="width:100%;">
								Fecha de salida del País
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="fechasalidapais" name="fechasalidapais" style="width:100%" class="form-control"  data-provide="datepicker"  required readonly>
							</div>												
					</div>
					<div id="div8block3" name="div8block3" class="div8block3">
							<div style="width:100%;">
								Compañia de transporte
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="companiatransporte" name="companiatransporte" style="width:100%" class="form-control" required>
							</div>												
					</div>
					<div id="div9block3" name="div9block3" class="div9block3">
							<div style="width:100%;">
								Primer país de embarque
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="primerpaisembarque" name="primerpaisembarque" style="width:100%" class="form-control" required>
							</div>												
					</div>
					<div id="div10block3" name="div10block3" class="div10block3">
							<div style="width:100%;">
								Países de tránsito antes de llegar a Republica Dominicana
							</div>
							<div style="width:100%; text-align:left;">
								<textarea id="paistransitoantes" name="paistransitoantes" style="width: 100%; height: 80px;"></textarea>
							</div>												
					</div>
					<div id="div11block3" name="div11block3" class="div11block3">
							<div style="width:100%;">
								Países visitados en los últimos 30 días:
							</div>
							<div style="width:100%; text-align:left;">
								<textarea id="paisesvisitados30" name="paisesvisitados30" style="width: 100%; height: 80px;"></textarea>
							</div>												
					</div>					
					<div style="width:100%; height:30px"></div>
					<div id="block4" name="block4" style="width:100%">
						<div style="width: 100%; text-align: center; color: ; font-size:16px; font-weight:bold;">
							DECLARACIÓN DE SIGNOS Y SÍNTOMAS
						</div>
						<div style="width:100%; height:30px"></div>
						<div>
						¿En las últimas 72 horas Usted ha presentado alguno de estos signos y síntomas?
						</div>
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="div1block4" name="div1block4" class="div1block4">
							<div style="width:100%;">
								Fiebre
							</div>
							<div style="width:100%; text-align:left;">
								<input type="checkbox" id="fiebre" name="fiebre" style="width:100%" class="form-control">
							</div>												
					</div>
					<div id="div2block4" name="div2block4" class="div2block4">
							<div style="width:100%;">
								Dificultad Respiratoria
							</div>
							<div style="width:100%; text-align:left;">
								<input type="checkbox" id="respiratoria" name="respiratoria" style="width:100%" class="form-control">
							</div>												
					</div>
					<div id="div3block4" name="div3block4" class="div3block4">
							<div style="width:100%;">
								Tos
							</div>
							<div style="width:100%; text-align:left;">
								<input type="checkbox" id="tos" name="tos" style="width:100%" class="form-control">
							</div>												
					</div>
					<div id="div4block4" name="div4block4" class="div4block4">
							<div style="width:100%;">
								Dolor de Cabeza 
							</div>
							<div style="width:100%; text-align:left;">
								<input type="checkbox" id="cabeza" name="cabeza" style="width:100%" class="form-control">
							</div>												
					</div>
					<div id="div5block4" name="div5block4" class="div5block4">
							<div style="width:100%;">
								Dolor de Garganta 
							</div>
							<div style="width:100%; text-align:left;">
								<input type="checkbox" id="garganta" name="garganta" style="width:100%" class="form-control">
							</div>												
					</div>					
					<div style="width:100%; height:10px"></div>
					<div id="div1block5" name="div1block5" class="div1block5">
							<div style="width:100%;">
								Fatiga
							</div>
							<div style="width:100%; text-align:left;">
								<input type="checkbox" id="fatiga" name="fatiga" style="width:100%" class="form-control">
							</div>												
					</div>
					<div id="div2block5" name="div2block5" class="div2block5">
							<div style="width:100%;">
								Secreción Nasal
							</div>
							<div style="width:100%; text-align:left;">
								<input type="checkbox" id="secrecionnasal" name="secrecionnasal" style="width:100%" class="form-control">
							</div>												
					</div>
					<div id="div3block5" name="div3block5" class="div3block5">
							<div style="width:100%;">
								Escalofríos
							</div>
							<div style="width:100%; text-align:left;">
								<input type="checkbox" id="escalofrios" name="escalofrios" style="width:100%" class="form-control">
							</div>												
					</div>
					<div id="div4block5" name="div4block5" class="div4block5">
							<div style="width:100%;">
								Dolor Muscular 
							</div>
							<div style="width:100%; text-align:left;">
								<input type="checkbox" id="dolormuscular" name="dolormuscular" style="width:100%" class="form-control">
							</div>												
					</div>
					<div id="div5block5" name="div5block5" class="div5block5">
							<div style="width:100%;">
								Ninguno
							</div>
							<div style="width:100%; text-align:left;">
								<input type="checkbox" id="ninguno" name="ninguno" style="width:100%" class="form-control">
							</div>												
					</div>
					<div id="div6block1" name="div6block1" class="div6block1">
							<div style="width:100%;">
								Otros sintomas especifiquen
							</div>
							<div style="width:100%; text-align:left;">
								<textarea id="otrossintomas" name="otrossintomas" style="width: 100%; height: 80px;"></textarea>
							</div>												
					</div>
					<div id="div7block1" name="div7block1" class="div7block1">
							<div style="width:100%;">
								Fecha de inicio de los sintomas
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="fechainiciosintomas" name="fechainiciosintomas" style="width:50%" class="form-control" readonly onchange="javascript:validateDate(this.value);">
							</div>
                                                       	<div id="sintomastxt" name="sintomastxt" style="width:100%; display:none; color:red; font-weight:bold;">
							La fecha de inicio de los sintomas no puede ser mayor a la fecha actual!!
							</div> 											
					</div>
					<div style="width:100%; height:30px"></div>	
					<div id="block8" name="block8" style="width:100%">
						<div style="width: 100%; text-align: center; color: ; font-size:16px; font-weight:bold;">
							LOCALIZACIÓN DEL PASAJERO
						</div>
						<div style="width:100%; height:30px"></div>
					</div>
					<div id="div1block8" name="div1block8" class="div1block8">
							<div style="width:100%;">
								Dirección completa de contacto durante su estadía en República Dominicana, en los próximos 30 días
							</div>
							<div style="width:100%; text-align:left;">
								<textarea id="direccionestadia" name="direccionestadia" style="width: 100%; height: 80px;"></textarea>
							</div>												
					</div>
					<div id="div2block8" name="div1block8" class="div1block8">
							<div style="width:100%;">
								Firma Digital
							</div>
							<div style="width:100%; text-align:left;">
								<iframe name="firma" id="firma" style="width:100%; height:360px; border:0px" frameborder="0" src="http://dev.laserairlines.com/redair/js/jSignature-master/examples/laser.html"></iframe>
							</div>												
					</div>						
					<input type="hidden" name="firmacontainer" id="firmacontainer">
					<div style="width:100%; height:10px"></div>	
                    <div style="margin-top: 10px"class="col-sm-12 text-center">
                    	<button type="submit" class="btn btn-primary" onclick="javascript:botonsubmit();">ACEPTAR</button>
			<button type="button" class="btn btn-primary" onclick="doPrint();">IMPRIMIR</button>
			<div id="fechaacepto" style="font-size:12px; color:black; font-weigth:bold;"><?php echo date("d-m-Y"); ?></div>
                    </div>					
				</form>
			</div>
		</div>
	</div>
<script>
function validateDate(data){
   const date = new Date();
   const day = parseInt(date.getDate());
   const month = parseInt(date.getMonth() + 1);
   const year = parseInt(date.getFullYear());
   var dia = parseInt(data.substr(0, 2));
   var mes = parseInt(data.substr(3, 2));
   var ano = parseInt(data.substr(6, 4));

   console.log("dia " + dia + " dia actual " + day);
   console.log("mes " + mes + " mes actual " + month);
   console.log("ano " + ano + " year actual " + year);
   if (dia > day && mes >= month && ano >= year){
           fechainiciosintomas.focus;
           sintomastxt.style.display ="block";
   }else{
           sintomastxt.style.display ="none";
	   sapa = "0";
   }
}
function doPrint(){
    frmdeclaracion.action = "declaraciones_print.php";
    firmacontainer.value = $("#firma").contents().find("#codigoimagen").val();
    frmdeclaracion.target = "_blank";
    frmdeclaracion.submit();
}
$.fn.datepicker.dates['es'] = {
    days: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    daysShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    daysMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
    months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthsShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    today: "Today",
    clear: "Clear",
    format: "dd/mm/yyyy",
    titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
    weekStart: 0
};
$('#fechanacimiento').datepicker({
    language: 'es', format: 'dd-mm-yyyy'
});
$('#fechallegadapais').datepicker({
    language: 'es', format: 'dd-mm-yyyy'
});
$('#fechasalidapais').datepicker({
    language: 'es', format: 'dd-mm-yyyy'
});
$('#fechavuelo').datepicker({
    language: 'es', format: 'dd-mm-yyyy'
});
$('#fechainiciosintomas').datepicker({
    language: 'es', format: 'dd-mm-yyyy'
});
	</script>
<?php include ("includes/footer.php"); ?>
    </body>
</html>
