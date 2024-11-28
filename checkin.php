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
<meta name="description"
	content="Somos la aerolínea venezolana con mayor trayectoria en el mercado nacional, ofrecemos el mejor servicio a bordo, acompañado de nuestra puntualidad, eficiencia y pronta respuesta de acuerdo a las necesidades y exigencias de los pasajeros.">
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
	function doValidateDec(){
			if (acceptinfo.checked){
				var formData = new FormData();
				formData.append('nombres', document.getElementById("nombres").value);
				formData.append('edad', document.getElementById("edad").value);
				formData.append('pasaporte', document.getElementById("pasaporte").value);
				formData.append('birthday', document.getElementById("birthday").value);
				formData.append('birthmonth', document.getElementById("birthmonth").value);
				formData.append('birthyear', document.getElementById("birthyear").value);
				formData.append('country', document.getElementById("country").value);
				formData.append('sexo', document.getElementById("sexo").value);
				formData.append('linea', document.getElementById("linea").value);				
				formData.append('vueloday', document.getElementById("vueloday").value);
				formData.append('vuelomonth', document.getElementById("vuelomonth").value);
				formData.append('vueloyear', document.getElementById("vueloyear").value);

				formData.append('numasientos', document.getElementById("numasientos").value);
				formData.append('numvuelo', document.getElementById("numvuelo").value);
				formData.append('destino', document.getElementById("destino").value);
				formData.append('vueloescala', document.getElementById("vueloescala").value);
				formData.append('vueloconexion', document.getElementById("vueloconexion").value);
				formData.append('movil', document.getElementById("movil").value);
				formData.append('fijo', document.getElementById("fijo").value);
				formData.append('country2', document.getElementById("country2").value);

				formData.append('ciudad', document.getElementById("ciudad").value);
				formData.append('direccionx', document.getElementById("direccionx").value);
				formData.append('movilx1', document.getElementById("movilx1").value);
				formData.append('fijox1', document.getElementById("fijox1").value);
				formData.append('country2x1', document.getElementById("country2x1").value);
				formData.append('ciudadx1', document.getElementById("ciudadx1").value);
				formData.append('movilx2', document.getElementById("movilx2").value);
				formData.append('fijox2', document.getElementById("fijox2").value);		

				formData.append('country2x2', document.getElementById("country2x2").value);
				formData.append('ciudadx2', document.getElementById("ciudadx2").value);
				formData.append('direccionx2', document.getElementById("direccionx2").value);
				
				$.ajax({
				   url : 'doformjurada.php',
				   type : 'POST',
				   data : formData,
				   processData: false,
				   contentType: false,
				   success : function(datax) {
						var myObj = JSON.parse(datax);
						if (myObj.result){
							registerMessage("Gracias por completar el formulario de declaración para la localización del pasajero, puede proceder a hacer su check in.");
							checkin.style.display = "block";	
							formdata.style.display = "none";
						}else{
							registerMessage("Ha ocurrido un error almacenando los datos del formulario, por favor intente de nuevo.");							
						}												  
				   }
				});							

			}else{ 
				registerMessage("Usted debe aceptar que toda la información indicada en este formulario es fidedigna y correcta.");
			}	
	}

</script>
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
			<div class="row" id="checkin" name="checkin" style="display: none;">
				<div class="blog-lst col-md-12 pl0">
					<section id="id-100" class="post single">


						<div class="post-header single">
							<div style="color: #32be66">
								<h3 class="wow fadeInLeft animated">WEB CHECK IN</h3>
								<div class="title-line wow fadeInRight animated"></div>
							</div>

							<br>
							<!--	<iframe src="https://wc2-stage-ql.kiusys.net/widget/" style="width:100%; height:400px; border:0px; border-style:none;overflow-y: scroll; overflow-y: hidden"></iframe><br> -->
							<iframe src="https://wc2-stage-ql.kiusys.net/widget/"
								style="width: 100%; height: 400px; border: 0px; border-style: none; overflow-y: scroll; overflow-y: hidden"></iframe>
							<br> <br>


							<div class="col-sm-12 feat-list">
								<div class="panel-group">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title fqa-title" data-toggle="collapse"
												data-target="#fqa11">CONDICIONES</h4>
										</div>
										<div id="fqa11" class="panel-collapse collapse fqa-body">

											<div class="container">
												<br>

												<!--<h2>Striped Rows</h2>  -->
												<p>
													Para realizar el Web Check-In, deberás ingresar tu
													localizador y apellidos, tal cual figura en la reserva o
													boleto electrónico. Recuerda que el localizador está
													compuesto por seis (6) letras en mayúscula.<br> <br> El Web
													Check-In estará habilitado 48 horas antes de la salida de
													tu vuelo y hasta 4 horas antes de la salida del mismo. Este
													servicio solo te garantiza la asignación del asiento. Por
													ello, deberás presentarte en el aeropuerto 4 horas antes de
													la salida de tu vuelo internacional y 3 horas antes de la
													salida de tu vuelo nacional, para cumplir con el proceso de
													chequeo e impresión de la tarjeta de embarque.<br> <br>

													Pueden hacer uso de este servicio, los pasajeros mayores de
													12 años, teniendo como máximo 8 pasajeros por reservación.
												</p>

											</div>





										</div>
									</div>
								</div>




							</div>
					
					</section>
				</div>
			</div>

			<div class="row" id="formdata" name="formdata"
				style="display: block; width: 100%; margin-left: 0px;">
				<form id="frmdeclaracion" name="frmdeclaracion" method="post"
					action="javascript:doValidateDec();">
					<div style="width: 100%; text-align: center; color: #32be66">
						<h3>FORMULARIO DE SALUD PÚBLICA PARA LOCALIZAR A LOS PASAJEROS</h3>
					</div>
					<hr>
					<div style="width:100%; text-align: justify">Para proteger su salud, los funcionarios de salud pública necesitan que
					usted conteste este formulario cuando sospechen la existencia de
					una enfermedad contagiosa a bordo de un vuelo. La información que
					proporcione ayudará a los funcionarios de salud pública a ponerse
					en contacto con usted en caso de que haya estado expuesto a una
					enfermedad contagiosa. Es importante que conteste este formulario
					en forma completa y exacta. <b>La información solicitada se conservará
					de conformidad con la legislación aplicable y se utilizará
					exclusivamente para fines de salud pública</b></div>
					
					<div style="width:100%; text-align: right">
					 <b>“Gracias por ayudarnos a proteger su salud”.</b>
					</div>		
					<hr>
					<div id="block1" name="block1" style="width:100%">
						<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
							INFORMACIÓN DE VUELO
						</div>
						<div id="div1block1" name="div1block1" class="div1block1">
							<div style="width:100%;">
								1. Línea aérea
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="linea" name="linea" style="width:95%" class="form-control" required>
							</div>							
						</div>
						<div id="div2block1" name="div2block1" class="div2block1">
							<div style="width:100%;">
								2. Núm. de vuelo
							</div>	
							<div style="width:100%; text-align:left;">
								<input type="number" id="numvuelo" name="numvuelo" min="1" style="width:90%" class="form-control" required>
							</div>
						</div>	
						<div id="div3block1" name="div3block1" class="div3block1">
							<div style="width:100%;">
								3. Núm. de asiento
							</div>		
							<div style="width:100%; text-align:left;">
								<input type="number" id="numasiento" name="numasiento" min="1"  style="width:90%" class="form-control" required>
							</div>
						</div>
						<div id="div4block1" name="div4block1" class="div4block1">
							<div style="width:100%;">
								4. Fecha de llegada (aaaa/mm/dd)
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="fechallegada" name="fechallegada" style="width:100%" class="form-control" required>
							</div>							
						</div>						
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="block2" name="block2" style="width:100%">
						<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
							INFORMACIÓN PERSONAL
						</div>
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="div1block2" name="div1block2" class="div1block2">
							<div style="width:100%;">
								5. Apellido
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="apellido" name="apellido" style="width:95%" class="form-control" required>
							</div>												
					</div>
					<div id="div2block2" name="div2block2" class="div2block2">
							<div style="width:100%;">
								6. Nombre de pila
							</div>	
							<div style="width:100%; text-align:left;">
								<input type="text" id="nombrepila" name="nombrepila" style="width:95%" class="form-control" required>
							</div>					
					</div>			
					<div id="div3block2" name="div3block2" class="div3block2">
							<div style="width:100%;">
								7. Inicial
							</div>		
							<div style="width:100%; text-align:left;">
								<input type="text" id="inicial" name="inicial" style="width:70%" class="form-control" required>
							</div>					
					</div>
					<div id="div4block2" name="div4block2" class="div4block2">
							<div style="width:100%;">
								8. Sexo
							</div>		
							<div style="width:100%; text-align:left;">
								<div style="width:100px; display: inline-block">
                                    <label for="genderm">Másculino</label>&nbsp;<input type="radio" id="genderm" name="gender" value="genderm">                                    
    							</div>
								<div style="width:100px; display: inline-block">
                                    <label for="genderm">Femenino</label>&nbsp;<input type="radio" id="genderf" name="gender" value="genderf">                                    
    							</div>    							
							</div>						
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="block3" name="block3" style="width:100%">
						<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
							NÚMERO(S) DE TELÉFONO donde se le puede encontrar, de ser necesario. Incluir el código del país y de la ciudad.
						</div>
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="div1block3" name="div1block3" class="div1block3">
							<div style="width:100%;">
								9. Móvil
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="movil" name="movil" style="width:97%" class="form-control" required>
							</div>												
					</div>
					<div id="div2block3" name="div2block3" class="div2block3">
							<div style="width:100%;margin-left: 16px;">
								10. Trabajo
							</div>
							<div style="width:100%; text-align:left;margin-left: 16px;">
								<input type="text" id="trabajo" name="trabajo" style="width:100%" class="form-control" required>
							</div>												
					</div>	
					<div id="div3block3" name="div3block3" class="div3block3">
							<div style="width:100%;">
								11. Domicilio
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="domicilio" name="domicilio" style="width:97%" class="form-control" required>
							</div>												
					</div>
					<div id="div4block3" name="div4block3" class="div4block3">
							<div style="width:100%;margin-left: 16px;">
								12. Otro
							</div>
							<div style="width:100%; text-align:left;margin-left: 16px;">
								<input type="text" id="otrotelf" name="otrotelf" style="width:100%" class="form-control" required>
							</div>												
					</div>	
					<div id="div5block3" name="div5block3" class="div5block3">
							<div style="width:100%;">
								13. Correo electrónico
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="emailx" name="emailx" style="width:100%" class="form-control" required>
							</div>												
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="block4" name="block4" style="width:100%">
						<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
							DIRECCIÓN PERMANENTE
						</div>
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="div1block4" name="div1block4" class="div1block4">
							<div style="width:100%;">
								14. Número y calle
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="numcalle" name="numcalle" style="width:97%" class="form-control" required>
							</div>												
					</div>
					<div id="div2block4" name="div2block4" class="div2block4">
							<div style="width:100%;">
								15. Núm. de apto.
							</div>
							<div style="width:100%; text-align:left;">
								<input type="number" id="numaptox" name="numaptox" min="1" style="width:100%" class="form-control" required>
							</div>												
					</div>		
					<div id="div3block4" name="div3block4" class="div3block4">
							<div style="width:100%;">
								16. Ciudad
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="ciudaddir" name="ciudaddir" style="width:97%" class="form-control" required>
							</div>												
					</div>
					<div id="div4block4" name="div4block4" class="div4block4">
							<div style="width:100%;">
								17. Estado/Provincia
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="estadodir" name="estadodir" style="width:100%" class="form-control" required>
							</div>												
					</div>		
					<div id="div5block4" name="div5block4" class="div5block4">
							<div style="width:100%;">
								18. País
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="paisdir" name="paisdir" style="width:97%" class="form-control" required>
							</div>												
					</div>
					<div id="div6block4" name="div6block4" class="div6block4">
							<div style="width:100%;">
								19. Código postal
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="codpostaldir" name="codpostaldir" style="width:100%" class="form-control" required>
							</div>												
					</div>
					<div style="width:100%; height:30px"></div>
					<div id="block5" name="block5" style="width:100%">
						<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
							DIRECCIÓN TEMPORAL: Si es visitante, sólo escriba el lugar que visitará primero.
						</div>
					</div>	
					<div style="width:100%; height:30px"></div>
					<div id="div1block5" name="div1block5" class="div1block5">
							<div style="width:100%;">
								20. Nombre del hotel (si es el caso)
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="nomhotel" name="nomhotel" style="width:97%" class="form-control" required>
							</div>												
					</div>
					<div id="div2block5" name="div2block5" class="div2block5">
							<div style="width:100%;">
								21. Número y nombre de la calle
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="numnomcalle" name="numnomcalle" style="width:97%" class="form-control" required>
							</div>												
					</div>		
					<div id="div3block5" name="div3block5" class="div3block5">
							<div style="width:100%;">
								22. Núm. de apto.
							</div>
							<div style="width:100%; text-align:left;">
								<input type="number" id="numapto" name="numapto" style="width:97%" class="form-control" required>
							</div>												
					</div>
					<div id="div4block5" name="div4block5" class="div4block5">
							<div style="width:100%;">
								23. Ciudad
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="ciudadtemp" name="ciudadtemp" style="width:97%" class="form-control" required>
							</div>												
					</div>		
					<div id="div5block5" name="div5block5" class="div5block5">
							<div style="width:100%;">
								24. Estado/Provincia
							</div>
							<div style="width:100%; text-align:left;">
								<input type="number" id="estadoprovtemp" name="estadoprovtemp" style="width:100%" class="form-control" required>
							</div>												
					</div>
					<div id="div6block5" name="div6block5" class="div6block5">
							<div style="width:100%;">
								25. País
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="paistemp" name="paistemp" style="width:97%" class="form-control" required>
							</div>												
					</div>		
					<div id="div7block5" name="div7block5" class="div7block5">
							<div style="width:100%;">
								26. Código postal
							</div>
							<div style="width:100%; text-align:left;">
								<input type="number" id="codpostaltemp" name=""codpostaltemp"" style="width:100%" class="form-control" required>
							</div>												
					</div>	
					<div style="width:100%; height:30px"></div>
					<div id="block6" name="block6" style="width:100%">
						<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
							INFORMACIÓN DE CONTACTO PARA CASOS DE URGENCIA
						</div>
					</div>	
					<div style="width:100%; height:30px"></div>
					<div id="div1block6" name="div1block6" class="div1block6">
							<div style="width:100%;">
								27. Apellido
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="apellidour" name="apellidour" style="width:97%" class="form-control" required>
							</div>												
					</div>
					<div id="div2block6" name="div2block6" class="div2block6">
							<div style="width:100%;">
								28. Nombre de pila
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="pilaur" name="pilaur" style="width:97%" class="form-control" required>
							</div>												
					</div>		
					<div id="div3block6" name="div3block6" class="div3block6">
							<div style="width:100%;">
								29. Ciudad
							</div>
							<div style="width:100%; text-align:left;">
								<input type="number" id="ciudadur" name="ciudadur" style="width:97%" class="form-control" required>
							</div>												
					</div>
					<div id="div4block6" name="div4block6" class="div4block6">
							<div style="width:100%;">
								30. País
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="paisur" name="paisur" style="width:97%" class="form-control" required>
							</div>												
					</div>		
					<div id="div5block6" name="div5block6" class="div5block6">
							<div style="width:100%;">
								31. Correo electrónico
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="emailur" name="emailur" style="width:100%" class="form-control" required>
							</div>												
					</div>
					<div id="div6block6" name="div6block6" class="div6block6">
							<div style="width:100%;">
								32. Número de teléfono móvil
							</div>
							<div style="width:100%; text-align:left;">
								<input type="number" id="movilur" name="movilur" style="width:97%" class="form-control" required>
							</div>												
					</div>		
					<div id="div7block6" name="div7block6" class="div7block6">
							<div style="width:100%;">
								33. Otro número de teléfono
							</div>
							<div style="width:100%; text-align:left;">
								<input type="text" id="movilauxur" name="movilauxur" style="width:100%" class="form-control" required>
							</div>												
					</div>					
				</form>
			</div>
		</div>
	</div>

<?php include ("includes/footer.php"); ?>
    </body>
</html>