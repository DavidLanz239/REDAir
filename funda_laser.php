<?php
	session_start();
	include("webservices/connClass.php");
	include ("webservices/dataService.php");	
	$dataServ = null;
	$dataServ = new dataService();
	$json_fundalaser = array();
	$x = 0;
	$json_fundalaser = json_decode($dataServ->getFundaLaserList());
	?>
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
                              <div style="color: #32be66">
                                    <h3 class="wow fadeInLeft animated">FundaLASER</h3>
                                    <div class="title-line wow fadeInRight animated"></div>
                                </div>
                        
                             <!--   <div class="image wow fadeInRight animated"> 
                                    <img src="assets/img/blog2.jpg" class="img-responsive" alt="Example blog post alt">
                                </div>-->
                            </div> 

                            <div style="text-align: justify" id="post-content" class="post-body single wow fadeInLeft animated">
								
                                <p>&nbsp;                              </p>
                              <p>FundaLASER contribuye a mejorar la calidad de vida de niños y adolescentes en las áreas de salud, educación, cultura, recreación y otras necesidades atendidas por sus aliados sociales, a través del transporte aéreo de personas y cargas en las rutas servidas por LASER Airlines, con el fundamental apoyo de nuestro voluntariado. <br>
                                 <br>
									
									
									
									Amigos del Niño con Cáncer, Fundación Jacinto Convit, Casa Ronald McDonald, Seno Salud, Fundación Operación Sonrisa, Guerreros Azules, CECODAP, Museo Marino de Margarita Fe y Alegría, Grupo Maloka, Fondos Valores Inmobiliarios S.A.C.A , Fundación Forjando el Futuro Niños, Niñas y Adolescentes, Fundación La Pastillita, Fundación Museo del Mar, Fundación Amigos contra la Diabetes, Internacional Carrocera C.A., son solo algunos de los aliados de FundaLASER para apoyar a la comunidad. Porque juntos, todos ganamos.   <br><br>
									
									Contactos de la fundación: <br>

Teléfono: +58 212 957-41-80
<br>
Correo electrónico: <a href="mailto:fundalaser@laser.com.ve">fundalaser@laser.com.ve</a></p>
                              <p>&nbsp;</p>
                             
								
								<div class="container">
										<div class="row">					
											<?php if (isset($json_fundalaser->data)) { for ($x = 0; $x < sizeof($json_fundalaser->data); $x++){ ?>										
												<div class="col-lg-3 col-md-6">
													<div class="single-post">
														<div class="post-thumbnail">
														  <img src="assets/img/logos/<?php echo $json_fundalaser->data[$x]->img ?>" alt="<?php echo $json_fundalaser->data[$x]->nombre ?>" title="<?php echo $json_fundalaser->data[$x]->nombre ?>" width="1024" height="597">
														</div>
													</div>
												</div>					
											<?php } ?>
										</div>
									<?php } ?>
								</div>
                            </div>
                        </section> 
                    </div>                                 
                </div>

            </div>
        </div>

<?php include ("includes/footer.php"); ?>
    </body>
</html>