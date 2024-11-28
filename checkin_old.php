<?php
	session_start();
	include("webservices/connClass.php");
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
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RED AIR</title>
        <meta name="description" content="Ofrecemos el mejor servicio a bordo, acompañado de nuestra puntualidad, eficiencia y pronta respuesta de acuerdo a las necesidades y exigencias de los pasajeros.">
        <meta name="author" content="RED AIR">
        <meta name="keyword" content="RED AIR, Airlines, aerolinea, avion, viajes">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
         <link rel="shortcut icon" href="assets/img/laser_ico.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
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
        <link id="bsdp-css" href="assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
				formData.append('movilx3', document.getElementById("movilx3").value);
				formData.append('fijox3', document.getElementById("fijox3").value);
				formData.append('country2x3', document.getElementById("country2x3").value);
				formData.append('ciudadx3', document.getElementById("ciudadx3").value);
				formData.append('movilx4', document.getElementById("movilx4").value);
				formData.append('fijox4', document.getElementById("fijox4").value);
				formData.append('country2x4', document.getElementById("country2x4").value);				
				formData.append('ciudadx4', document.getElementById("ciudadx4").value);
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

        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row" id="checkin" name="checkin" style="display:none;">
                    <div class="blog-lst col-md-12 pl0">
                        <section id="id-100" class="post single">
							
							
                            <div class="post-header single">
                              <div style="color: #32be66">
                                    <h3 class="wow fadeInLeft animated">WEB CHECK IN </h3>
                                    <div class="title-line wow fadeInRight animated"></div>
                                </div>
							
							<br>
						<!--	<iframe src="https://wc2-stage-ql.kiusys.net/widget/" style="width:100%; height:400px; border:0px; border-style:none;overflow-y: scroll; overflow-y: hidden"></iframe><br> -->
							<iframe src="https://wc2-stage-ql.kiusys.net/widget/" style="width:100%; height:400px; border:0px; border-style:none;overflow-y: scroll; overflow-y: hidden"></iframe><br>
<br>

								
								<div class="col-sm-12 feat-list">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                         <h4 class="panel-title fqa-title" data-toggle="collapse" data-target="#fqa11" >
                                           CONDICIONES
                                      </h4> 
                                    </div>
                                    <div id="fqa11" class="panel-collapse collapse fqa-body">
                                     
									<div class="container"><br>

									  <!--<h2>Striped Rows</h2>  --> 
									  <p>Para realizar el Web Check-In, deberás ingresar tu localizador y apellidos, tal cual figura en la reserva o boleto electrónico. Recuerda que el localizador está compuesto por seis (6) letras en mayúscula.<br>
<br>

El Web Check-In estará habilitado 48 horas antes de la salida de tu vuelo y hasta 4 horas antes de la salida del mismo. Este servicio solo te garantiza la asignación del asiento. Por ello, deberás presentarte en el aeropuerto 4 horas antes de la salida de tu vuelo internacional y 3 horas antes de la salida de tu vuelo nacional, para cumplir con el proceso de chequeo e impresión de la tarjeta de embarque.<br>
<br>

Pueden hacer uso de este servicio, los pasajeros mayores de 12 años, teniendo como máximo 8 pasajeros por reservación.
</p>         
									  
									</div>
										
										
										
										
										
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
								
								
                        </section> 
                    </div>                                 
                </div>
				<div class="row" id="formdata" name="formdata" style="display:block; width:100%; margin-left: 0px;">
    				<form id="frmdeclaracion" name="frmdeclaracion" method="post" action="javascript:doValidateDec();">
    					<div style="width:100%; text-align:center"><h2>DECLARACIÓN PARA LA LOCALIZACIÓN DEL PASAJERO</h2></div>
    					<br>
    					<hr>
    					<div style="width:100%; text-align:right">Fecha: <?php echo date("d-m-Y"); ?></div>
    					<hr>
    					<div style="width:100%; text-align:center"><span class="titulo_planilla">Información del pasajero</span></div>
    					<hr>
    					<br>
    					<div style="width:100%;">
    						<div style="width:23%; display: inline-block;">
    							<span class="titulo_campo">Nombre y Apellido</span>
    						</div>
    						<div style="width:6%; display: inline-block;">
    							<span class="titulo_campo">Edad</span>
    						</div>
    						<div style="width:15%; display: inline-block;">
    							<span class="titulo_campo">Pasaporte</span>
    						</div>
    						<div style="width:19%; display: inline-block;">
    							<span class="titulo_campo">Fecha de nacimiento</span>
    						</div>						
    						<div style="width:20%; display: inline-block;">
    							<span class="titulo_campo">Nacionalidad</span>
    						</div>						
    						<div style="width:15%; display: inline-block;">
    							<span class="titulo_campo">Sexo</span>
    						</div>																	
    					</div>
    					<br>
						
						
						
						<div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group form-control">
                                            <label for="firstname">Nombre y Apellido</label>
                                            <input type="text" class="form-control" id="firstname" required>
                                        </div>
                                    </div>
							
							<div style="width:23%; display: inline-block;">
    							<input type="text" id="nombres" name="nombres" class="form-control" required >
    						</div>
							
							
							
							
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Localizador</label>
                                            <input type="text" class="form-control" id="lastname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Correo electrónico</label>
                                            <input type="email" class="form-control" id="email" required>
                                        </div>
                                    </div>
									
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Teléfono</label>
                                      
                                            <input type="number" class="form-control" id="telefono" required>
                                        </div>
                                    </div>
									
									   <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="subject">Casos</label>
                                      
                                            <select id="subject" class="form-control" >
																<option value="Atención a bordo">Atención a bordo</option>
																<option value="Call Center">Call Center</option>
															  <option value="Servicio en aeropuerto">Servicio en aeropuerto</option>
															  <option value="Servicios especiales">Servicios especiales</option>
															  <option value="Penalidades">Penalidades</option>
												</select>
                                        </div>
                                    </div>
									
									
								
									
									
									
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> ENVIAR</button>
                                    </div>
                                </div>
						
						
						
    					<div style="width:100%;">
    						<div style="width:23%; display: inline-block;">
    							<input type="text" id="nombres" name="nombres" class="form-control" required >
    						</div>
    						<div style="width:6%; display: inline-block;">
    							<input type="number" id="edad" name="edad"  class="form-control" required >
    						</div>
    						<div style="width:15%; display: inline-block;">
    							<input type="text" id="pasaporte" name="pasaporte" class="form-control" required >						
    						</div>
    						<div style="width:19%; display: inline-block;">
        						<div style="width:auto; display: inline-block";>
            						 <select id="birthday" class="form-control" required  >
            							<?php for ($x = 1; $x < 31; $x++){ ?>
            								<option value="<?php echo $x ?>"><?php echo $x ?></option>
            							<?php } ?>
            						 </select>
        						</div>
        						<div style="width:auto; display: inline-block";>						 
                                  <select id="birthmonth" class="form-control" required  >
            						<?php for ($x = 1; $x < 31; $x++){ ?>
            							<option value="<?php echo $x ?>"><?php echo $x ?></option>
            						<?php } ?>
            					  </select>
            					</div>
            					<div style="width:auto; display: inline-block";>
                                  <select id="birthyear" class="form-control" required  >
        							<?php for ($x = 1900; $x < (date("Y")-10); $x++){ ?>
        								<option value="<?php echo $x ?>"><?php echo $x ?></option>
        							<?php } ?>
        						  </select>
        						</div>
    						</div>						
    						<div style="width:20%; display: inline-block;">
                                <select id="country" class="form-control" required  >
            						 <?php for ($x = 0; $x < sizeof($json_paises->data); $x++) { ?>                                            
                                    	<option value="<?php echo $json_paises->data[$x]->id ?>"><?php echo $json_paises->data[$x]->pais ?></option>
                                     <?php } ?>                                            
        					    </select>						
    						</div>						
    						<div style="width:15%; display: inline-block;">
                                <select id="sexo" class="form-control" required  style="width:174px;" >
                               	    <option value="-1">Seleccione...</option>
                                   	<option value="M">Masculino</option>
                                   	<option value="F">Femenino</option>
        					    </select>	
    						</div>																	
    					</div>
						
						
    					<br>
    					<hr>
    					<div style="width:100%; text-align:center"><span class="titulo_planilla">Información del vuelo</span></div>
    					<hr>
    					<br>
    					<div style="width:100%;">
    						<div style="width:25%; display: inline-block;">
    							<span class="titulo_campo">Línea Aérea</span>
    						</div>
    						<div style="width:19%; display: inline-block;">
    							<span class="titulo_campo">Fecha del Vuelo</span>
    						</div>
    						<div style="width:25%; display: inline-block;">
    							<span class="titulo_campo">N. de Asiento</span>
    						</div>
    						<div style="width:30%; display: inline-block;">
    							<span class="titulo_campo">Número del Vuelo</span>
    						</div>						
    					</div>
    					<div style="width:100%;">
    						<div style="width:25%; display: inline-block;">
    							<input type="text" id="linea" name="linea" class="form-control" required >
    						</div>
    						<div style="width:19%; display: inline-block;">
        						<div style="width:auto; display: inline-block";>
            						 <select id="vueloday" class="form-control" required  >
            							<?php for ($x = 1; $x < 31; $x++){ ?>
            								<option value="<?php echo $x ?>" <?php if (date("d") == $x){ ?>selected<?php } ?>><?php echo $x ?></option>
            							<?php } ?>
            						 </select>
        						</div>
        						<div style="width:auto; display: inline-block";>						 
                                  <select id="vuelomonth" class="form-control" required  >
            						<?php for ($x = 1; $x < 31; $x++){ ?>
            							<option value="<?php echo $x ?>" <?php if (date("m") == $x){ ?>selected<?php } ?>><?php echo $x ?></option>
            						<?php } ?>
            					  </select>
            					</div>
            					<div style="width:auto; display: inline-block";>
                                  <select id="vueloyear" class="form-control" required  >
        							<?php for ($x = 1900; $x < (date("Y")+100); $x++){ ?>
        								<option value="<?php echo $x ?>" <?php if (date("Y") == $x){ ?>selected<?php } ?>><?php echo $x ?></option>
        							<?php } ?>
        						  </select>
        						</div>
    						</div>
    						<div style="width:25%; display: inline-block;">
    							<input type="text" id="numasientos" name="numasientos" class="form-control" required >
    						</div>
    						<div style="width:30%; display: inline-block;">
    							<input type="text" id="numvuelo" name="numvuelo" class="form-control" required >
    						</div>						
    					</div>	
    					<p></p>
    					<div style="width:100%;">
    						<div style="width:33%; display: inline-block;">
    							<span class="titulo_campo">Destino del vuelo</span>
    						</div>
    						<div style="width:33%; display: inline-block;">
    							<span class="titulo_campo">Vuelo con Escala</span>
    						</div>
    						<div style="width:33%; display: inline-block;">
    							<span class="titulo_campo">Vuelo en Conexión</span>
    						</div>
    					</div>
    					<div style="width:100%;">
    						<div style="width:33%; display: inline-block;">
    							<input type="text" id="destino" name="destino" class="form-control" required >
    						</div>
    						<div style="width:33%; display: inline-block;">
                                <select id="vueloescala" class="form-control" required >
                                	<option value="-1">Seleccione...</option>
                                   	<option value="SI">SI</option>
                                   	<option value="NO">NO</option>
        					    </select>							
    						</div>
    						<div style="width:33%; display: inline-block;">
                                <select id="vueloconexion" class="form-control" required >
                                	<option value="-1">Seleccione...</option>
                                   	<option value="SI">SI</option>
                                   	<option value="NO">NO</option>
        					    </select>	
    						</div>
    					</div>					
        				<br>
        				<hr>
        				<div style="width:100%; text-align:center"><span class="titulo_planilla">Números teléfonicos y Dirección Permanente</span></div>
        				<hr>
        				<br>
        				<div style="width:100%;">
        					<div style="width:25%; display: inline-block;">
        						<span class="titulo_campo">Teléfono Movil</span>
        					</div>
        					<div style="width:25%; display: inline-block;">
        						<span class="titulo_campo">Teléfono Fijo</span>
        					</div>
        					<div style="width:25%; display: inline-block;">
        						<span class="titulo_campo">País</span>
        					</div>
        					<div style="width:23%; display: inline-block;">
        						<span class="titulo_campo">Ciudad</span>
        					</div>						
        				</div>	
        				<div style="width:100%;">
        					<div style="width:25%; display: inline-block;">
        						<input type="number" id="movil" name="movil" class="form-control" required >
        					</div>
        					<div style="width:25%; display: inline-block;">
        						<input type="number" id="fijo" name="fijo" class="form-control" required >
        					</div>
        					<div style="width:25%; display: inline-block;">
                                <select id="country2" class="form-control" required  >
            						 <?php for ($x = 0; $x < sizeof($json_paises->data); $x++) { ?>                                            
                                    	<option value="<?php echo $json_paises->data[$x]->id ?>"><?php echo $json_paises->data[$x]->pais ?></option>
                                     <?php } ?>                                            
        					    </select>
        					</div>
        					<div style="width:23%; display: inline-block;">
        						<input type="text" id="ciudad" name="ciudad" class="form-control" required >
        					</div>						
        				</div>
        				<br>
        				<div style="width:100%;">
        					<div style="width:25%; display: inline-block;">
        						<span class="titulo_campo">Dirección</span>
        					</div>
        				</div>
        				<div style="width:100%;">
        					<div style="width:99%; display: inline-block;">
        						<textarea id="direccionx" name="direccionx" style="width:100%; height:200px;"></textarea>
        					</div>
        				</div>
        				<br>
        				<hr>
        				<div style="width:100%; text-align:center"><span class="titulo_planilla">Números teléfonicos y Dirección Persona Contacto en caso de emergencia en los proximos 14 días</span></div>
        				<hr>
        				<br>
        				<div style="width:100%;">
        					<div style="width:25%; display: inline-block;">
        						<span class="titulo_campo">Teléfono Movil</span>
        					</div>
        					<div style="width:25%; display: inline-block;">
        						<span class="titulo_campo">Teléfono Fijo</span>
        					</div>
        					<div style="width:25%; display: inline-block;">
        						<span class="titulo_campo">País</span>
        					</div>
        					<div style="width:23%; display: inline-block;">
        						<span class="titulo_campo">Ciudad</span>
        					</div>						
        				</div>	
        				<div style="width:100%;">
        					<div style="width:25%; display: inline-block;">
        						<input type="number" id="movilx1" name="movilx1" class="form-control"  required>
        					</div>
        					<div style="width:25%; display: inline-block;">
        						<input type="number" id="fijox1" name="fijox1" class="form-control" required >
        					</div>
        					<div style="width:25%; display: inline-block;">
                                <select id="country2x1" class="form-control"  required >
            						 <?php for ($x = 0; $x < sizeof($json_paises->data); $x++) { ?>                                            
                                    	<option value="<?php echo $json_paises->data[$x]->id ?>"><?php echo $json_paises->data[$x]->pais ?></option>
                                     <?php } ?>                                            
        					    </select>
        					</div>
        					<div style="width:23%; display: inline-block;">
        						<input type="text" id="ciudadx1" name="ciudax1" class="form-control" required >
        					</div>						
        				</div>
        				<div style="width:100%;">
        					<div style="width:25%; display: inline-block;">
        						<input type="number" id="movilx2" name="movilx2" class="form-control"  >
        					</div>
        					<div style="width:25%; display: inline-block;">
        						<input type="number" id="fijox2" name="fijox2" class="form-control"  >
        					</div>
        					<div style="width:25%; display: inline-block;">
                                <select id="country2x2" class="form-control" required  >
            						 <?php for ($x = 0; $x < sizeof($json_paises->data); $x++) { ?>                                            
                                    	<option value="<?php echo $json_paises->data[$x]->id ?>"><?php echo $json_paises->data[$x]->pais ?></option>
                                     <?php } ?>                                            
        					    </select>
        					</div>
        					<div style="width:23%; display: inline-block;">
        						<input type="text" id="ciudadx2" name="ciudax2" class="form-control"  >
        					</div>						
        				</div>
        				<div style="width:100%;">
        					<div style="width:25%; display: inline-block;">
        						<input type="number" id="movilx3" name="movilx3" class="form-control"  >
        					</div>
        					<div style="width:25%; display: inline-block;">
        						<input type="number" id="fijox3" name="fijox3" class="form-control"  >
        					</div>
        					<div style="width:25%; display: inline-block;">
                                <select id="country2x3" class="form-control"   >
            						 <?php for ($x = 0; $x < sizeof($json_paises->data); $x++) { ?>                                            
                                    	<option value="<?php echo $json_paises->data[$x]->id ?>"><?php echo $json_paises->data[$x]->pais ?></option>
                                     <?php } ?>                                            
        					    </select>
        					</div>
        					<div style="width:23%; display: inline-block;">
        						<input type="text" id="ciudadx3" name="ciudax3" class="form-control"  >
        					</div>						
        				</div>		
        				<div style="width:100%;">
        					<div style="width:25%; display: inline-block;">
        						<input type="number" id="movilx4" name="movilx4" class="form-control"  >
        					</div>
        					<div style="width:25%; display: inline-block;">
        						<input type="number" id="fijox4" name="fijox4" class="form-control"  >
        					</div>
        					<div style="width:25%; display: inline-block;">
                                <select id="country2x4" class="form-control"  >
            						 <?php for ($x = 0; $x < sizeof($json_paises->data); $x++) { ?>                                            
                                    	<option value="<?php echo $json_paises->data[$x]->id ?>"><?php echo $json_paises->data[$x]->pais ?></option>
                                     <?php } ?>                                            
        					    </select>
        					</div>
        					<div style="width:23%; display: inline-block;">
        						<input type="text" id="ciudadx4" name="ciudax4" class="form-control" >
        					</div>						
        				</div>
        				<br>
        				<div style="width:100%;">
        					<div style="width:25%; display: inline-block;">
        						<span class="titulo_campo">Dirección</span>
        					</div>
        				</div>
        				<div style="width:100%;">
        					<div style="width:99%; display: inline-block;">
        						<textarea id="direccionx2" name="direccionx2" style="width:100%; height:200px;"></textarea>
        					</div>
        				</div>	
        				<br>
        				<br>
        				<div style="width:100%;">
        					<div style="width:100%; display: inline-block;">
        						<input id="acceptinfo" type="checkbox" value="1" required>&nbsp;&nbsp;&nbsp;<span class="titulo_campo">Declaro que toda la información indicada en este formulario es fidedigna y correcta.</span>											
        					</div>
        				</div>
        				<br>				
                        <div style="margin-top: 40px"class="col-sm-12 text-center">
                        	<button type="submit" class="btn btn-primary">ACEPTAR</button>
                        </div>	
                        </form>
                  </div>													
            </div>
        </div>

<?php include ("includes/footer.php"); ?>
    </body>
</html>