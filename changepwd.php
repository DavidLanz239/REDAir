<?php
	session_start();
	include("webservices/connClass.php");
	include ("webservices/dataService.php");	
	$id = "";
	$id = $_GET["qkey"];
	$id = base64_decode($id);
	if ($id == ""){
		header("Location: index.php");
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
<script>
	function changePwd(){
		var formData = new FormData();
		if (document.getElementById("pwdreg").value == ""){
			registerMessage("Disculpe, debe indicar su nueva contraseña.");
		}else{
			formData.append('pwdreg', document.getElementById("pwdreg").value);
			formData.append('emailreg', document.getElementById("emailreg").value);
			$.ajax({
			   url : 'dochangepwd.php',
			   type : 'POST',
			   data : formData,
			   processData: false,
			   contentType: false,
			   success : function(datax) {
					var myObj = JSON.parse(datax);
					console.log(myObj);
					if (myObj.response == "OK"){
						registerMessage("Se ha cambiado exitosamente la contraseña de tu cuenta en Laser Airlines.");	
					}else{
						registerMessage("Ha ocurrido un error cambiando tu contraseña, intenta de nuevo.");
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
			<form id="form1" action="javascript:changePwd()" method="post">
                <div class="row">
						<div style="width:80%;">
							<h3 class="wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;">CAMBIAR MI CONTRASEÑA</h3>
							<br>
							Por favor indique su nueva contraseña:
							<br>
  						        <div class="col-sm-6">
                                    <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input type="password" class="form-control" id="pwdreg" required>
											<input type="hidden" class="form-control" id="emailreg" value="<?php echo $id; ?>">
                                    </div>
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