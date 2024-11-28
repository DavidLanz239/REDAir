<?php
	include("includes/scripting.php");
	$dataServ = null;
	$dataServ = new dataService();
	$json_noticias = array();
	$x = 0;
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
        

        <link href='http://fonts.googleapis.com/css?family=yOpen+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

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

        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container"> 
				
		
				
				
                <div class="row  pr0 padding-top-40 properties-page">
					
					 <div style="color: #d02937">
                                    <h3 class="wow fadeInLeft animated">NOTICIAS</h3>
                                    <div class="title-line wow fadeInRight animated"></div>
            		</div>
                    

                <!--    <div class="col-md-12  clear"> 
                        

                        <div class="col-xs-12 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                        </div>
                    </div>-->
                
                    <div class="col-md-12 clear "> 
                        <div id="list-type" class="proerty-th">
                    <?php 
                    	$cantidad = 0;
                    	for ($x = 0; $x < sizeof($json_noticias->data); $x++){
                    		$resumen = "";
							$resumenamplio = "";
							$tituloresumen = "";
                    		$resumen = strip_tags($json_noticias->data[$x]->contenido);
                    		if (strlen($resumen) > 35){
                    			$resumen = substr($resumen, 0, 35)."...";
								$resumenamplio = substr(strip_tags($json_noticias->data[$x]->contenido), 0, 150)."...";
                    		}							
							$tituloresumen = strip_tags($json_noticias->data[$x]->titulo);
                    		if (strlen($tituloresumen) > 15){
                    			$tituloresumen = substr($tituloresumen, 0, 15)."...";
                    		}	
                    		$cantidad++;
                   	?>  						
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="noticia_single.php?id=<?php echo $json_noticias->data[$x]->id ?>" ><img src="assets/img/noticias/<?php echo $json_noticias->data[$x]->img2 ?>" width="265px" height="225px"></a>
                                    </div>

                                    <div class="item-entry overflow" style="height: auto;">
                                        <h5 style="height:50px;width: 100%;"><a href="noticia_single.php?id=<?php echo $json_noticias->data[$x]->id ?>" alt="<?php echo strip_tags($json_noticias->data[$x]->titulo) ?>" title="<?php echo strip_tags($json_noticias->data[$x]->titulo) ?>"><?php echo strip_tags($json_noticias->data[$x]->titulo) ?></a></h5>
										 
                                        <div class="dot-hr"></div>
										<span class=""><?php echo $resumen ?></span> 
                                                                           
                                        <p style="display: none;"><?php echo $resumenamplio ?></p>
                                     
                                    </div>


                                </div>
                            </div> 
							<?php } ?>
                        </div>
                    </div>
<!--					
                    <div class="col-md-12 clear"> 
                        <div class="pull-right">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>                
                    </div>
-->					
                </div>                
            </div>
        </div>
<br>
<?php include ("includes/footer.php"); ?>

       
    </body>
</html>