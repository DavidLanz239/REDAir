<?php
	session_start();
	include("webservices/connClass.php");
	include ("webservices/dataService.php");	
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
		<script src="https://www.google.com/recaptcha/api.js?render=6LeYnbkUAAAAANixwRSnujmYEK5H2sMXC_TGRBNSs"></script>
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
<?php include("includes/header.php"); ?>
<script>
	function checkEmail(){
		var formData = new FormData();
		if (document.getElementById("emailreg").value == ""){
			registerMessage("Disculpe, debe indicar su correo electrónico.");
		}else{
			formData.append('emailreg', document.getElementById("emailreg").value);
			$.ajax({
			   url : 'docheckemail.php',
			   type : 'POST',
			   data : formData,
			   processData: false,
			   contentType: false,
			   success : function(datax) {
					var myObj = JSON.parse(datax);
					if (myObj.response == "ok"){
						registerMessage("Se ha enviado un correo electrónico a la dirección indicada en su cuenta laser con instrucciones para recuperar su contraseña.");	
					}else{
						registerMessage("El correo electrónico indicado pertenece a ninguna cuenta laser, por favor intente de nuevo.");							
					}												  
			   }
			});							
		}
	}
</script>

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
			<form id="form1" action="javascript:checkEmail()" method="post">
                <div class="row">
					
					        <div class="post-header single">
                              <div style="color: #32be66">
                                    <h3 class="wow fadeInLeft animated">RECUPERAR MI CONTRASEÑA</h3>
                                    <div class="title-line wow fadeInRight animated"></div>
                                </div>
                        
                          
                            </div> 
					
					
						<div style="width:80%;">
							
							<br>
							Para recuperar su contraseña, por favor indique su correo electrónico:
							<br>
							<div class="form-group">
								<label for="firstname">Correo electrónico</label>
							  <input type="text" class="form-control" id="emailreg" required>
							</div>
								<div style="margin-top: 40px" class="col-sm-12 text-center">
                                 
                                  </div>
							  <div style="margin-top: 40px;" class="col-sm-12 text-center">
									<button type="submit" class="btn btn-primary">ACEPTAR</button>
							  </div>							
						</div>
                </div>
				</form>
            </div>
        </div>

<?php include ("includes/footer.php"); ?>
    </body>
</html>
