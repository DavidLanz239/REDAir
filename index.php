<?php
	include("includes/scripting.php");
	header('Content-type: text/html; charset=utf-8');
	$dataServ = null;
	$dataServ = new dataService();
	$json_vitrinas = array();
	$json_tarifas = array();
	$json_noticias = array();
	$x = 0;
	$json_vitrinas = json_decode($dataServ->getActiveVitrinas());
	$json_tarifas = json_decode($dataServ->getTarifaList());
	$json_noticias = json_decode($dataServ->getNewsList());
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
		<link rel="stylesheet" href="assets/css/jquery.slitslider.css">
    </head>
    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>    
		<?php include("includes/header.php"); ?>
        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
					<?php for ($x = 0; $x < sizeof($json_vitrinas->data); $x++){ ?>
                    <div class="item" style="height:760px;"><img src="assets/img/slides/<?php echo $json_vitrinas->data[$x]->img ?>" alt="Laser Slideshow item" style="height:760px;"  class="img-responsive itempic"></div> 
					<?php } ?>
                </div>
            </div>			
        </div>
        <div id="searchdiv" class="search-toggle" style="z-index:999;position:absolute;float:left;top: 120px; width:100%;">
            <div class="containersearch"> 
            	<!-- produccion: https://kibe-ql.kiusys.net/widget/ -->  
				<iframe class="kiuiframe" src="https://kibe-stage-l5.kiusys.net/widget/" style="display: block; -ms-overflow-style: none; overflow: hidden; overflow-y: hidden; margin-left: 20%; width: 446px; background-color: white; height: 615px;border-radius: 15px;padding: 21px;border-color:transparent;" scrolling="no"></iframe>
            </div>  
        </div>                                
        <div id="sep" style="height:100px;"></div>
        <div class="content-area recent-property" style=" background-color: rgb(252, 252, 252); ">
            <div class="container">   
                <div class="row">
                    <div class="col-md-12 hidden-xs  properties-page">
						
						    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Tarifas especiales</h2>
                        <p>Escoge tu destino favorito  </p>
                    </div>
                        <div class="col-md-12 "> 
                        <?php for ($x = 0; $x < sizeof($json_tarifas->data); $x++){ ?>
                            <div id="list-type" class="proerty-th">
                                <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="#" ><img src="assets/img/tarifas/<?php echo $json_tarifas->data[$x]->img ?>"></a>
                                        </div>
                                        <div class="item-entry overflow">
                                            <h5><a href="#"><?php echo $json_tarifas->data[$x]->destino ?></a></h5>
                                            <div class="dot-hr"></div>
                                             <span class="pull-left"><b>Desde </b></span><span class="proerty-price pull-right"><?php echo $json_tarifas->data[$x]->monto ?></span>                                          
                                        </div>
                                    </div>
                                </div>                                  
                             </div>
                        <?php } ?>
                      </div>                        
                    </div>  
                </div>
            </div>
        </div>
		<div style="height:50px; width:90%"></div>	
		<div class="slide-2 ">
            <div id="slider" class="sl-slider-wrapper">
                <div class="sl-slider">
                    <?php 
                    	$cantidad = 0;
                    	for ($x = 0; $x < sizeof($json_noticias->data); $x++){
                    		$resumen = "";
                    		$resumen = $json_noticias->data[$x]->contenido;
                    		if (strlen($resumen) > 200){
                    			$resumen = strip_tags(substr($json_noticias->data[$x]->contenido, 0, 200))."...";
                    		}
                    		$cantidad++;
                    	?>                  
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner ">
                            <div class="bg-img bg-img-1" style="background-image: url(assets/img/noticias/<?php echo $json_noticias->data[$x]->img ?>);"></div>                             
                            <blockquote><cite><a href="#"><?php echo $json_noticias->data[$x]->titulo ?></a></cite>
                                <p><?php echo $resumen ?></p>
                                     <p> <a href="noticia_single.php?id=<?php echo $json_noticias->data[$x]->id ?>" ><p>
								     <p><a class="btn btn-primary btn-lg" style="background-color:#AF181F; color:white; border: white" href="noticia_single.php?id=<?php echo $json_noticias->data[$x]->id ?>" role="button">Ver más</a></p>
                            </blockquote>
                        </div>
                    </div> 
                    <?php } ?>
                </div><!-- /sl-slider -->

                <nav id="nav-dots" class="nav-dots">
                	<?php for ($y = 0; $y < $cantidad; $y++){ 
                		if ($y == 0){ ?>
                    		<span class="nav-dot-current"></span>
                    	<?php }else{ ?>
                    		<span></span>
                    	<?php } ?>
                    <?php } ?>
                </nav>
            </div><!-- /slider-wrapper -->
        </div>
		<br>
		<br>
		<?php include ("includes/footer.php"); ?>
    </body>
</html>

