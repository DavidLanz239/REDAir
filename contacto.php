<?php include("includes/scripting.php"); ?>
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
    </head>
    <body>
    	
    	<script>
			function sendFormEmail(){
				var formData = new FormData();
				formData.append('firstname', document.getElementById("firstname").value);
				formData.append('lastname', document.getElementById("lastname").value);
				formData.append('email', document.getElementById("email2").value);
				formData.append('telefono', document.getElementById("telefono").value);
				formData.append('subject', document.getElementById("subject").value);
				formData.append('message', document.getElementById("message").value);
				$.ajax({
				   url : 'contactformemail.php',
				   type : 'POST',
				   data : formData,
				   processData: false,
				   contentType: false,
				   success : function(datax) {
						//var myObj = JSON.parse(datax);
						//console.log(myObj);
						if (datax != ""){
							$('#successmodal').modal("show");
						}else{
							$('#errormodal').modal("show");							
						}												  
				   }
				});				
			}
    	</script>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
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
                <div class="row">
                    <div class="blog-lst col-md-12 pl0">
                        <section id="id-100" class="post single">

                            <div class="post-header single">
                              <div style="color: #f42535">
                                    <h3 class="wow fadeInLeft animated">CONTÁCTENOS</h3>
                                    <div class="title-line wow fadeInRight animated"></div>
                                </div>
                        
                             <!--   <div class="image wow fadeInRight animated"> 
                                    <img src="assets/img/blog2.jpg" class="img-responsive" alt="Example blog post alt">
                                </div>-->
                            </div> 

                            <div id="post-content" class="post-body single wow fadeInLeft animated">
								
                              <p>&nbsp;</p>
                           <form id="form1" action="javascript:sendFormEmail()" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nombre y Apellido</label>
                                            <input type="text" class="form-control" id="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Localizador</label>
                                            <input type="text" class="form-control" id="lastname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="emaillbl">Correo electrónico</label>
                                            <input type="email2" class="form-control" id="email2" required>
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
															  <option value="1">Atención a bordo</option>
															  <option value="2">Atención en aeropuerto</option>
															  <option value="3">Atención en Call Center</option>
															  <option value="4">Atención en oficinas de venta</option>
															  <option value="5">Servicios especiales: silla de ruedas, persona con discapacidad, traslado de mascotas, mujeres en estado de gravidez</option>															  
															  <option value="6">Equipaje</option>
															  <option value="7">Penalidades</option>
															  <option value="8">Página Web</option>
															  <option value="9">Reembolsos</option>
												</select>
                                        </div>
                                    </div>									
									
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Mensaje</label>
                                            <textarea id="message" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> ENVIAR</button>
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
		
        <!-- Modal -->
        <div class="modal fade" id="successmodal" tabindex="999" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <b>Se ha enviado exitosamente su solicitud de comunicación, le responderemos a la brevedad posible.</b>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>   
        
        <div class="modal fade" id="errormodal" tabindex="999" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <b>Se ha presentado un error en el envio de su comunicación, por favor intente nuevamente.</b>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
		<script src="https://www.google.com/recaptcha/api.js?render=6LcRUcYUAAAAADnzjpix6g_a3yIFdl-tkazCEzyO"></script>
		<script>
            grecaptcha.ready(function() {
            	grecaptcha.execute('6LcRUcYUAAAAADnzjpix6g_a3yIFdl-tkazCEzyO', {action: 'homepage'});
            });
		</script>
    </body>
</html>
