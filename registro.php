<?php include("includes/scripting.php");
	$x = 0;
	$dataServ = null;
	$dataServ = new dataService();
	$json_paises = array();
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
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </script>        
    </head>
    <body>
    	
    	<script>
			function sendFormReg(){
				var formData = new FormData();
				if (document.getElementById("emailreg").value != document.getElementById("emailreg2").value){
					registerMessage("Disculpe, la confirmación del correo electrónico es distinta al correo electrónico que ingreso.");
				}else if (document.getElementById("pwdreg").value != document.getElementById("pwdreg2").value){
					registerMessage("Disculpe, la confirmación de la contrasñea es distinta de la contraseña que ingreso.");
				}else{
					formData.append('firstname', document.getElementById("firstname").value);
					formData.append('lastname', document.getElementById("lastname").value);
					formData.append('birthday', document.getElementById("birthday").value);
					formData.append('birthmonth', document.getElementById("birthmonth").value);
					formData.append('birthyear', document.getElementById("birthyear").value);
					formData.append('country', document.getElementById("country").value);
					formData.append('emailreg', document.getElementById("emailreg").value);
					formData.append('pwdreg', document.getElementById("pwdreg").value);
					formData.append('telefono', document.getElementById("telefono").value);				
					formData.append('celular', document.getElementById("celular").value);
					formData.append('acceptinfo', document.getElementById("acceptinfo").value);
					formData.append('acceptoffers', document.getElementById("acceptoffers").value);
					$.ajax({
					   url : 'doregister.php',
					   type : 'POST',
					   data : formData,
					   processData: false,
					   contentType: false,
					   success : function(datax) {
							var myObj = JSON.parse(datax);
							if (myObj.result){
								registerMessage("Gracias por afiliarse a Laser Airlines.");	
							}else{
								registerMessage("Ha ocurrido un error creando su cuenta Laser, por favor intente de nuevo.");							
							}												  
					   }
					});							
				}
			}
    	</script>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
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
                <div class="row">
                    <div class="blog-lst col-md-12 pl0">
                        <section id="id-100" class="post single">

                            <div class="post-header single">
                              <div style="color: #32be66">
                                    <h3 class="wow fadeInLeft animated">REGISTRO</h3>
                                    <div class="title-line wow fadeInRight animated"></div>
                                </div>
                        
                             <!--   <div class="image wow fadeInRight animated"> 
                                    <img src="assets/img/blog2.jpg" class="img-responsive" alt="Example blog post alt">
                                </div>-->
                            </div> 
					
                            <div id="post-content" class="post-body single wow fadeInLeft animated">
								<p>&nbsp;</p>
								<p><strong>Información de básica</strong></p>
                             	
                           <form id="form1" action="javascript:sendFormReg()" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nombre</label>
                                            <input type="text" class="form-control" id="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Apellido</label><input type="text" class="form-control" id="lastname" required>
                                        </div>
                                    </div>

									<div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="birthday">Dia de nacimiento</label>
                                      
                                          <select id="birthday" class="form-control" >
											<?php for ($x = 1; $x < 31; $x++){ ?>
												<option value="<?php echo $x ?>"><?php echo $x ?></option>
											<?php } ?>
										  </select>
                                        </div>
                                    </div>
									
									<div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="birthmonth">Mes de nacimiento</label>
                                      
                                          <select id="birthmonth" class="form-control" >
											<?php for ($x = 1; $x < 31; $x++){ ?>
												<option value="<?php echo $x ?>"><?php echo $x ?></option>
											<?php } ?>
										  </select>
                                        </div>
                                    </div>
									
									<div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="birthyear">Año de nacimiento</label>
                                      
                                            <select id="birthyear" class="form-control" >
											<?php for ($x = 1900; $x < (date("Y")-10); $x++){ ?>
												<option value="<?php echo $x ?>"><?php echo $x ?></option>
											<?php } ?>
										  </select>
                                        </div>
                                    </div>
									
									
									
									
                               	  <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="country">País de origen</label>                                      
                                            <select id="country" class="form-control" >
											<?php for ($x = 0; $x < sizeof($json_paises->data); $x++) { ?>                                            
                                            	<option value="<?php echo $json_paises->data[$x]->id ?>"><?php echo $json_paises->data[$x]->pais ?></option>
                                             <?php } ?>                                            
										  </select>
                                        </div>
                                  </div>
									
									<p><br>
								  </p>
								  <p><br>
									  
								  </p>
									<p>&nbsp;</p>
									<p><strong>Información de seguridad</strong></p>
									
									
									      <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Correo electrónico</label>
                                          <input type="text" class="form-control" id="emailreg" required>
                                        </div>
                                  </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Confirmación de correo electrónico</label><input type="text" class="form-control" id="emailreg2" required>
                                        </div>
                                    </div>
									
									      <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input type="password" class="form-control" id="pwdreg" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password2">Confirmar contraseña</label><input type="password" class="form-control" id="pwdreg2" required>
                                        </div>
                                    </div>
									
							      <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="telefono">Teléfono local</label>
                                            <input type="number" class="form-control" id="telefono" required>
                                        </div>
                                  </div>
                                  <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="celular">Teléfono celular</label><input type="number" class="form-control" id="celular" required>
                                        </div>
                                  </div>
									
									
								  <p><br>
								  </p>
									<p><br>
								  </p>
								 
									<p>&nbsp;</p>
									<p><strong>Preferencias de subscripción</strong></p>
									<p>&nbsp;</p>
									
									
								 <label>
                                        <input id="acceptinfo" type="checkbox" value="1">&nbsp;&nbsp;&nbsp;Acepto recibir información sobre LASER Airlines.
                                </label>
 							<br><br>

								
								 <label>
                                       <input id="acceptoffers" type="checkbox" value="1">&nbsp;&nbsp;&nbsp;Acepto recibir ofertas y noticias sobre nuestro programa de viajero frecuente.
                                 </label>
									
								<div style="margin-top: 40px"class="col-sm-12 text-center">
                                     
                                  </div>
                                  
                                  <div style="margin-top: 40px"class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary">AFILIARSE</button>
                                  </div>
                             </div>
                                <!-- /.row -->
                            </form>
                           <br>
                      <p>&nbsp;</p></div></section> 


                        

                        
                    </div>                                 
                </div>

            </div>
        </div>
<?php include ("includes/footer.php"); ?>
 
    </body>
</html>
