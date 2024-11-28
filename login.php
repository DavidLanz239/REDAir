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
			function sendForm(){
				var formData = new FormData();
				formData.append('firstname', document.getElementById("firstname").value);
				formData.append('lastname', document.getElementById("lastname").value);
				formData.append('email', document.getElementById("email").value);
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
						var myObj = JSON.parse(datax);
						if (myObj.response == "ok"){
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

       
<!--        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> +1 234 567 7890</span>
                                <span><i class="pe-7s-mail"></i> your@company.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>  -->           
        <!--End top header -->

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a></div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                  
                    <ul class="main-nav nav navbar-nav navbar-right">
                     <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="200">Experiencia Laser <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="#">Quienes somos</a>
                                </li>
								
								<li>
                                    <a href="#">Historia</a>
                                </li>
								<li>
                                    <a href="#">Misión y Visión</a>
                                </li>
								
								<li>
                                    <a href="#">Valores corporativos</a>
                                </li>
                               
                                
                                <li>
                                    <a href="#">Funda Laser</a>
                                </li>

                            </ul>
                        </li>

                     
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="#">Check In </a></li>
						
						
					<li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="200">Antes de viajar <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="franquicia.html">Franquicia de equipaje</a>
                                </li>
								
								<li>
                                    <a href="#">Servicios especiales</a>
                                </li>
								<li>
                                    <a href="#">Itinerarios</a>
                                </li>
								
								<li>
                                    <a href="#">Disposiciones migratorias</a>
                                </li>
                               
                                
                                <li>
                                    <a href="#">Viajes de menores sin acompañantes</a>
                                </li>
								<li>
                                    <a href="#">Reservas internacionales</a>
                                </li>
								
								<li>
                                    <a href="#">Traslados de Mascotas</a>
                                </li>
								
									<li>
                                    <a href="#">Servicio de Carga</a>
                                </li>

                            </ul>
                        </li>
                        

                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="#">Atención al Cliente  </a></li>
						  <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="#">Viajero Frecuente </a></li>
						
						  <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('#')" data-wow-delay="0.4s">Login</button>
                        <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('#')" data-wow-delay="0.5s">Registro</button>
					<!--	<button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>-->
						
				 <button  type="submit"><i class="fa fa-search"></i></button>
						<button type="submit"><img src="assets/img/reino-unido.svg" width="18px" height="18px" alt="inglés"></button>

                    </div>
 
                  </ul>
					
					
					
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

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
                    <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Login : </h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default"> Log in</button>
                                </div>
                            </form>
                            <br>
                            
                        
                        </div>
                        
                    </div>
                </div>                                 
                </div>

            </div>
        </div>

          <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

             <!--           <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>

                                <img src="assets/img/logo.png" alt="" class="wow pulse" data-wow-delay="1s">
                                <p>Lorem ipsum dolor cum necessitatibus su quisquam molestias. Vel unde, blanditiis.</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i> 9089 your adress her</li>
                                    <li><i class="pe-7s-mail strong"> </i> email@yourcompany.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                </ul>
                            </div>
                        </div>-->
						
						
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Experiencia Laser </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="#">Quienes somos</a>  </li> 
                                    <li><a href="#">Historia</a>  </li> 
                                    <li><a href="#">misión y visión</a></li> 
                                    <li><a href="#">Valores Corporativos</a></li> 
                                    <li><a href="#">Funda Laser</a>  </li> 
                                    
                                </ul>
                            </div>
                        </div>
						
						
						
						
						      <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Antes de viajar</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="#">Franquicia de equipaje</a>  </li> 
                                    <li><a href="#">Servicios especiales</a</li> 
                                    <li><a href="#">Itinerarios </a></li> 
                                    <li><a href="#">Disposiciones Migratorias</a></li> 
                                    <li><a href="#">Viajes de menores sin acompañantes</a>  </li> 
                                    <li><a href="#">Reservas internacionales</a>  </li> 
										 <li><a href="#">Traslados de Mascotas</a>  </li> 
										 <li><a href="#">Servicio de Carga</a>  </li> 
                                </ul>
                            </div>
                        </div>
								  
								  	      <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Atención al Cliente</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="#">Formulario</a>  </li> 
                                    <li><a href="#">Definir</a</li> 
                                    <li><a href="#">definir </a></li> 
                                
                                </ul>
                            </div>
                        </div>
								  
								  
						
							      <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Viajero Frecuente</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="#">Tipo de membrecias</a>  </li> 
                                    <li><a href="#">Beneficios</a>  </li> 
                                    <li><a href="#">Detalles del beneficio </a></li> 
                                  
                                </ul>
                            </div>
                        </div>
								
								  
						 
						
			
					 <!--<div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Contacto</h4>
                                <div class="footer-title-line"></div>

                             <img src="assets/img/logo.png" alt="" class="wow pulse" data-wow-delay="1s">
							
                                <p>Call center Venezuela</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-call strong"> </i>58 0501 LASER00</li>
									 <li><i class="pe-7s-call strong"> </i>58 0501 5273700</li>
									
                                 <li><i class="pe-7s-mail strong"> </i> email@yourcompany.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                </ul>	
								
								   <p>Call center Panamá</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-call strong"> </i>58 0501 LASER00</li>
								
                                </ul>
								
								<p>Call center Rep Dominicana</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-call strong"> </i>58 0501 LASER00</li>
							
                                </ul>
								
									<p>Call center Estados Unidos</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-call strong"> </i>1 786 785 2737</li>
									   <li><i class="pe-7s-call strong"> </i>1 305 602 4617</li>
							
                                </ul>
							
                            </div>
                        </div>-->
						 
						 
						  <div class="col-md-12 col-sm-12 wow fadeInRight animated">
                            <div class="single-footer">
								
								    <div class="social"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/laserairlines?lang=es"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://es-la.facebook.com/LaserAirlines/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                      
                                        <li><a class="wow fadeInUp animated" href="https://www.instagram.com/laserairlinesoficial/" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                      
                                    </ul> 
                                </div>
                            </div>
                        </div>
						
                        
                        <!--<div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
                                <p>Lorem ipsum dolor sit amet, nulla  suscipit similique quisquam molestias. Vel unde, blanditiis.</p>

                                <form>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="E-mail ... ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                        </span>
                                    </div>
                                    
                                </form> 

                           
                            </div>
                        </div>-->

                    </div>
                </div>
            </div>

				
				
				
				
				
            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> <strong> Laser Airlines</strong>| Rif: J-00364445-5. Copyright © 2014. </span> 
                        </div> 
                        <div class="bottom-menu pull-right"> 
                            <ul> 
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.2s">Términos y condiciones de uso |</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.3s">Políticas de privacidad	|</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.4s">Contrato de Transporte	|</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s"> Intralaser	</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="successmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        
        <div class="modal fade" id="errormodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        
             

        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>

        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>

        <script src="assets/js/main.js"></script>
       
    </body>
</html>