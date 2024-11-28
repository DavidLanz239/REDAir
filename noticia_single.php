<?php include("includes/scripting.php"); 
	$dataServ = null;
	$dataServ = new dataService();
	$json_noticias = array();
	$x = 0;
	$id = "";
	$id = @$_GET["id"];
	$json_noticias = json_decode($dataServ->getNoticiaById($id));
	function voltear_fecha($fckfecha){
		$dia = substr($fckfecha, 0, 2);
		$mes = substr($fckfecha, 3, 2);
		$ano = substr($fckfecha, 6, 4);
		return $ano."-".$mes."-".$dia;
	}
	function voltear_fecha2($fckfecha){
		$dia = substr($fckfecha, 8, 2);
		$mes = substr($fckfecha, 5, 2);
		$ano = substr($fckfecha, 0, 4);
		return $dia."-".$mes."-".$ano;
	}	
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
		
		<?php
		$titulo = "";
		$fecha = "";
		$imagen = "";
		if (isset($json_noticias->noticiaList)){
			$titulo = $json_noticias->noticiaList[0]->titulo;
			$fecha = voltear_fecha2($json_noticias->noticiaList[0]->fecha);
			$imagen = $json_noticias->noticiaList[0]->img;
			$contenido =  $json_noticias->noticiaList[0]->contenido;
		}	
		?>

        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="blog-lst col-md-12 pl0">
                        <section id="id-100" class="post single">

                            <div class="post-header single">
                              <div style="color: #d02937">
                                    <h3 class="wow fadeInLeft animated"><?php echo $titulo ?></h3>
                                    <div class="title-line wow fadeInRight animated"></div>
                                </div>
                                <div class="row wow fadeInRight animated">
                                    <div class="col-sm-6">
                                         <p class="date-comments">
                                            <i class="fa fa-calendar-o"></i> <?php echo $fecha ?>
                                           
                                        </p>
                                    </div>
                                    <div class="col-sm-6 right" >
                                        
                                    </div>
                                </div>
                                <div class="image wow fadeInRight animated">
                                    <img src="assets/img/noticias/<?php echo $imagen ?>" class="img-responsive noticiaimg" alt="<?php echo $titulo ?>" title="<?php echo $titulo ?>" style="width: 1124px;height: 400px">
                                </div>
                            </div> 

                            <div id="post-content" class="post-body single wow fadeInLeft animated">
                            <?php echo $contenido ?>                              
							</div>
                     

                      </section> 

                        <section class="about-autor"></section>
                        <section id="comment-form" class="add-comments">
                            <h4 class="text-uppercase wow fadeInLeft animated">&nbsp;</h4>
                            <form>
                                <div class="row wow fadeInLeft animated"></div>

                                <div class="row wow fadeInLeft animated"></div>

                                <div class="row wow fadeInLeft animated"></div>

                                <div class="row wow fadeInLeft animated"></div>
                          </form>
                      </section>
                  </div>                                 
                </div>

            </div>
        </div>

<?php include ("includes/footer.php"); ?>    </body>
</html>