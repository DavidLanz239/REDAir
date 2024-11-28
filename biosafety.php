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
<title>RED AIR</title>
<meta name="description"
	content="Ofrecemos el mejor servicio a bordo, acompañado de nuestra puntualidad, eficiencia y pronta respuesta de acuerdo a las necesidades y exigencias de los pasajeros.">
<meta name="author" content="RED AIR">
<meta name="keyword" content="RED AIR, aerolinea, avion, viajes">
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
	function doValidateDec(){

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
					formData.append('gender', document.getElementsByName("medio")[0].value);
				}
				if (document.getElementsByName("medio")[1].checked){					
					formData.append('gender', document.getElementsByName("medio")[1].value);
				}		
				if (document.getElementsByName("medio")[2].checked){					
					formData.append('gender', document.getElementsByName("medio")[2].value);
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
				formData.append('fiebre', document.getElementById("fiebre").value);
				formData.append('respiratoria', document.getElementById("respiratoria").value);
				formData.append('tos', document.getElementById("tos").value);
				formData.append('cabeza', document.getElementById("cabeza").value);
				formData.append('garganta', document.getElementById("garganta").value);
				formData.append('fatiga', document.getElementById("fatiga").value);
				formData.append('secrecionnasal', document.getElementById("secrecionnasal").value);
				formData.append('escalofrios', document.getElementById("escalofrios").value);
				formData.append('dolormuscular', document.getElementById("dolormuscular").value);
				formData.append('ninguno', document.getElementById("ninguno").value);
				formData.append('otrossintomas', document.getElementById("otrossintomas").value);
				formData.append('fechainiciosintomas', document.getElementById("fechainiciosintomas").value);
				formData.append('direccionestadia', document.getElementById("direccionestadia").value);
				// ------
				
				$.ajax({
				   url : 'doformjurada.php',
				   type : 'POST',
				   data : formData,
				   processData: false,
				   contentType: false,
				   success : function(datax) {
						var myObj = JSON.parse(datax);
						if (myObj.result){
							registerMessage("Gracias por completar el formulario de declaración de salud del viajero");
						}else{
							registerMessage("Ha ocurrido un error almacenando los datos del formulario, por favor intente de nuevo.");							
						}												  
				   }
				});							
	
	}

	$(document).ready(function() {
		nombrepila.focus();
	});
	function botonsubmit(){
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
					<div style="width: 100%; text-align: center; color: #F42432">
						<h3>DECLARACIÓN DE SALUD DEL VIAJERO</h3>
					</div>
					<hr>
					<div id="block2" name="block2" style="width:100%">
						<div style="width: 100%; text-align: center; color: #F42432; font-size:16px; font-weight:bold;">
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
								<input type="text" id="apellido" name="apellido" style="width:95%" class="form-control" required>
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
					<div style="height:20px">&nbsp;</div>
					<div id="div4block2" name="div4block2" class="div4block2">
    						<div style="width:100%;">
    							Fecha de nacimiento (dd/mm/aaaa)
    						</div>
    						<div style="width:100%; text-align:left;">
    							<input type="text" id="fechanacimiento" name="fechanacimiento" style="width:100%" class="form-control" data-provide="datepicker" required readonly>
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
						<div style="width: 100%; text-align: center; color: #F42432; font-size:14px; font-weight:bold;">
							DIRECCIÓN DE RESIDENCIA PERMANENTE
						</div>
						<div style="width:100%; height:20px"></div>
						<div id="div1block1" name="div1block1" class="div1block1">
							<div style="width:100%;">
								País
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="pais" name="pais" style="width:95%" class="form-control" required>
							</div>							
						</div>
						<div id="div2block1" name="div2block1" class="div2block1">
							<div style="width:100%;">
								Calle Nro.
							</div>	
							<div style="width:100%; text-align:left;">
								<input type="number" id="callenro" name="callenro" min="1" style="width:90%" class="form-control" required>
							</div>
							<div class="divinfo">Solo números, ejemplo:35</div>
						</div><br>	
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
						<div style="width: 100%; text-align: center; color: #F42432; font-size:14px; font-weight:bold;">
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
						<div style="width: 100%; text-align: center; color: #F42432; font-size:16px; font-weight:bold;">
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
								<input type="text" id="fechainiciosintomas" name="fechainiciosintomas" style="width:50%" class="form-control" readonly>
							</div>												
					</div>
					<div style="width:100%; height:30px"></div>	
					<div id="block8" name="block8" style="width:100%">
						<div style="width: 100%; text-align: center; color: #F42432; font-size:16px; font-weight:bold;">
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
					<div style="width:100%; height:10px"></div>	
                    <div style="margin-top: 40px"class="col-sm-12 text-center">
                    	<button type="submit" class="btn btn-primary" style="background-color:#F42432; color:white; border-color:white;" onclick="javascript:botonsubmit();">ACEPTAR</button>
                    </div>					
				</form>
			</div>
		</div>
	</div>
	<script>
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