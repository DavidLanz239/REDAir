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
<!-- HSC 2020 -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="logoredair" class="navbar-brand" href="index.php"><img id="logolaserimg" src="assets/img/logo.png" alt="" style="height:44px;"></a></div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                  
                    <ul class="main-nav nav navbar-nav navbar-right">
                     <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="200">Experiencia RED<b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                									<li>
                                    <a href="generic.php?id=9">¿Quiénes somos?</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=10">Misión</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=11">Visión</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=12">Valores corporativos</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=27">Gobierno Corporativo</a>
                                </li>
								
                       </ul>
                      </li>

                     
                        <!--<li class="wow fadeInDown" data-wow-delay="0.1s"><a class="menuitem" href="checkin.php">Check In </a></li>-->
						
						
			<!--		<li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="200">Antes de viajar <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                									<li>
                                    <a href="generic.php?id=25">Centro COVID-19</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=3">Itinerarios</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=1">Franquicia de equipaje</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=8">Servicios de carga</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=7">Traslados de mascotas</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=6">Reservas internacionales</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=5">Viajes de menores sin acompañantes</a>
                                </li>
																	<li>
                                    <a href="generic.php?id=4">Disposiciones migratorias</a>
                                </li>
								
                            </ul>
                        </li>   -->
						
						<li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="200">Atención al Cliente <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="contacto.php">Contáctenos </a>
                                </li>
								
								<li>
                                    <a href="generic.php?id=26">Puntos de Venta y oficinas</a>
                                </li>
								
								<li>
                                    <a href="noticias.php">Noticias</a>
                                </li>
								
                            </ul>
                        </li>
						
					
						
						  <div class="button navbar-right">
						  
                        <button id="loginButton" class="navbar-btn nav-button wow bounceInRight login" onclick="javascript:showLogin();" data-wow-delay="0.4s">Login</button>
                        <button id="registerButton" class="navbar-btn nav-button wow fadeInRight" onclick="javascript:showRegister();" data-wow-delay="0.5s">Registro</button>
						
						<!-- <div id="userInfo" style="display:none;position: absolute;font-size: 12px;font-weight: bold;float: left;margin-top: -21px;left: 74%;"></div> -->
						
					<!--	<button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>-->
						
				 		<button class="wow fadeInRigh"  type="submit" onclick="javascript:window.location='finder.php';"><i class="fa fa-search"></i></button>
					<!-- 	<button class="wow fadeInRigh" type="submit"><img src="assets/img/reino-unido.svg" width="18px" height="18px" alt="inglés"></button>  -->
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
																							<option value="1">1</option>
																							<option value="2">2</option>
																							<option value="3">3</option>
																							<option value="4">4</option>
																							<option value="5">5</option>
																							<option value="6">6</option>
																							<option value="7">7</option>
																							<option value="8">8</option>
																							<option value="9">9</option>
																							<option value="10">10</option>
																							<option value="11">11</option>
																							<option value="12">12</option>
																							<option value="13">13</option>
																							<option value="14">14</option>
																							<option value="15">15</option>
																							<option value="16">16</option>
																							<option value="17">17</option>
																							<option value="18">18</option>
																							<option value="19">19</option>
																							<option value="20">20</option>
																							<option value="21">21</option>
																							<option value="22">22</option>
																							<option value="23">23</option>
																							<option value="24">24</option>
																							<option value="25">25</option>
																							<option value="26">26</option>
																							<option value="27">27</option>
																							<option value="28">28</option>
																							<option value="29">29</option>
																							<option value="30">30</option>
																					  </select>
                                        </div>
                                    </div>
									
									<div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="birthmonth">Mes de nacimiento</label>
                                      
                                          <select id="birthmonth" class="form-control" >
																							<option value="1">1</option>
																							<option value="2">2</option>
																							<option value="3">3</option>
																							<option value="4">4</option>
																							<option value="5">5</option>
																							<option value="6">6</option>
																							<option value="7">7</option>
																							<option value="8">8</option>
																							<option value="9">9</option>
																							<option value="10">10</option>
																							<option value="11">11</option>
																							<option value="12">12</option>
																							<option value="13">13</option>
																							<option value="14">14</option>
																							<option value="15">15</option>
																							<option value="16">16</option>
																							<option value="17">17</option>
																							<option value="18">18</option>
																							<option value="19">19</option>
																							<option value="20">20</option>
																							<option value="21">21</option>
																							<option value="22">22</option>
																							<option value="23">23</option>
																							<option value="24">24</option>
																							<option value="25">25</option>
																							<option value="26">26</option>
																							<option value="27">27</option>
																							<option value="28">28</option>
																							<option value="29">29</option>
																							<option value="30">30</option>
																					  </select>
                                        </div>
                                    </div>
									
									<div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="birthyear">Año de nacimiento</label>
                                      
                                            <select id="birthyear" class="form-control" >
																							<option value="1900">1900</option>
																							<option value="1901">1901</option>
																							<option value="1902">1902</option>
																							<option value="1903">1903</option>
																							<option value="1904">1904</option>
																							<option value="1905">1905</option>
																							<option value="1906">1906</option>
																							<option value="1907">1907</option>
																							<option value="1908">1908</option>
																							<option value="1909">1909</option>
																							<option value="1910">1910</option>
																							<option value="1911">1911</option>
																							<option value="1912">1912</option>
																							<option value="1913">1913</option>
																							<option value="1914">1914</option>
																							<option value="1915">1915</option>
																							<option value="1916">1916</option>
																							<option value="1917">1917</option>
																							<option value="1918">1918</option>
																							<option value="1919">1919</option>
																							<option value="1920">1920</option>
																							<option value="1921">1921</option>
																							<option value="1922">1922</option>
																							<option value="1923">1923</option>
																							<option value="1924">1924</option>
																							<option value="1925">1925</option>
																							<option value="1926">1926</option>
																							<option value="1927">1927</option>
																							<option value="1928">1928</option>
																							<option value="1929">1929</option>
																							<option value="1930">1930</option>
																							<option value="1931">1931</option>
																							<option value="1932">1932</option>
																							<option value="1933">1933</option>
																							<option value="1934">1934</option>
																							<option value="1935">1935</option>
																							<option value="1936">1936</option>
																							<option value="1937">1937</option>
																							<option value="1938">1938</option>
																							<option value="1939">1939</option>
																							<option value="1940">1940</option>
																							<option value="1941">1941</option>
																							<option value="1942">1942</option>
																							<option value="1943">1943</option>
																							<option value="1944">1944</option>
																							<option value="1945">1945</option>
																							<option value="1946">1946</option>
																							<option value="1947">1947</option>
																							<option value="1948">1948</option>
																							<option value="1949">1949</option>
																							<option value="1950">1950</option>
																							<option value="1951">1951</option>
																							<option value="1952">1952</option>
																							<option value="1953">1953</option>
																							<option value="1954">1954</option>
																							<option value="1955">1955</option>
																							<option value="1956">1956</option>
																							<option value="1957">1957</option>
																							<option value="1958">1958</option>
																							<option value="1959">1959</option>
																							<option value="1960">1960</option>
																							<option value="1961">1961</option>
																							<option value="1962">1962</option>
																							<option value="1963">1963</option>
																							<option value="1964">1964</option>
																							<option value="1965">1965</option>
																							<option value="1966">1966</option>
																							<option value="1967">1967</option>
																							<option value="1968">1968</option>
																							<option value="1969">1969</option>
																							<option value="1970">1970</option>
																							<option value="1971">1971</option>
																							<option value="1972">1972</option>
																							<option value="1973">1973</option>
																							<option value="1974">1974</option>
																							<option value="1975">1975</option>
																							<option value="1976">1976</option>
																							<option value="1977">1977</option>
																							<option value="1978">1978</option>
																							<option value="1979">1979</option>
																							<option value="1980">1980</option>
																							<option value="1981">1981</option>
																							<option value="1982">1982</option>
																							<option value="1983">1983</option>
																							<option value="1984">1984</option>
																							<option value="1985">1985</option>
																							<option value="1986">1986</option>
																							<option value="1987">1987</option>
																							<option value="1988">1988</option>
																							<option value="1989">1989</option>
																							<option value="1990">1990</option>
																							<option value="1991">1991</option>
																							<option value="1992">1992</option>
																							<option value="1993">1993</option>
																							<option value="1994">1994</option>
																							<option value="1995">1995</option>
																							<option value="1996">1996</option>
																							<option value="1997">1997</option>
																							<option value="1998">1998</option>
																							<option value="1999">1999</option>
																							<option value="2000">2000</option>
																							<option value="2001">2001</option>
																							<option value="2002">2002</option>
																							<option value="2003">2003</option>
																							<option value="2004">2004</option>
																							<option value="2005">2005</option>
																							<option value="2006">2006</option>
																							<option value="2007">2007</option>
																							<option value="2008">2008</option>
																							<option value="2009">2009</option>
																							<option value="2010">2010</option>
																					  </select>
                                        </div>
                                    </div>
									
									
									
									
                               	  <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="country">País de origen</label>                                      
                                            <select id="country" class="form-control" >
											                                            
                                            	<option value="2">Akrotiri</option>
                                                                                         
                                            	<option value="3">Albania</option>
                                                                                         
                                            	<option value="4">Alemania</option>
                                                                                         
                                            	<option value="5">Andorra</option>
                                                                                         
                                            	<option value="6">Angola</option>
                                                                                         
                                            	<option value="7">Anguila</option>
                                                                                         
                                            	<option value="8">Antartida</option>
                                                                                         
                                            	<option value="9">Antigua y Barbuda</option>
                                                                                         
                                            	<option value="10">Antillas Neerlandesas</option>
                                                                                         
                                            	<option value="11">Arabia Saudi</option>
                                                                                         
                                            	<option value="12">Arctic Ocean</option>
                                                                                         
                                            	<option value="13">Argelia</option>
                                                                                         
                                            	<option value="14">Argentina</option>
                                                                                         
                                            	<option value="15">Armenia</option>
                                                                                         
                                            	<option value="16">Aruba</option>
                                                                                         
                                            	<option value="17">Ashmore andCartier Islands</option>
                                                                                         
                                            	<option value="18">Atlantic Ocean</option>
                                                                                         
                                            	<option value="19">Australia</option>
                                                                                         
                                            	<option value="20">Austria</option>
                                                                                         
                                            	<option value="21">Azerbaiyan</option>
                                                                                         
                                            	<option value="22">Bahamas</option>
                                                                                         
                                            	<option value="23">Bahrain</option>
                                                                                         
                                            	<option value="24">Bangladesh</option>
                                                                                         
                                            	<option value="25">Barbados</option>
                                                                                         
                                            	<option value="26">Belgica</option>
                                                                                         
                                            	<option value="27">Belice</option>
                                                                                         
                                            	<option value="28">Benin</option>
                                                                                         
                                            	<option value="29">Bermudas</option>
                                                                                         
                                            	<option value="30">Bielorrusia</option>
                                                                                         
                                            	<option value="31">Birmania Myanmar</option>
                                                                                         
                                            	<option value="32">Bolivia</option>
                                                                                         
                                            	<option value="33">Bosnia y Hercegovina</option>
                                                                                         
                                            	<option value="34">Botsuana</option>
                                                                                         
                                            	<option value="35">Brasil</option>
                                                                                         
                                            	<option value="36">Brunei</option>
                                                                                         
                                            	<option value="37">Bulgaria</option>
                                                                                         
                                            	<option value="38">Burkina Faso</option>
                                                                                         
                                            	<option value="39">Burundi</option>
                                                                                         
                                            	<option value="40">Butan</option>
                                                                                         
                                            	<option value="41">Cabo Verde</option>
                                                                                         
                                            	<option value="42">Camboya</option>
                                                                                         
                                            	<option value="43">Camerun</option>
                                                                                         
                                            	<option value="44">Canada</option>
                                                                                         
                                            	<option value="45">Chad</option>
                                                                                         
                                            	<option value="46">Chile</option>
                                                                                         
                                            	<option value="47">China</option>
                                                                                         
                                            	<option value="48">Chipre</option>
                                                                                         
                                            	<option value="49">Clipperton Island</option>
                                                                                         
                                            	<option value="50">Colombia</option>
                                                                                         
                                            	<option value="51">Comoras</option>
                                                                                         
                                            	<option value="52">Congo</option>
                                                                                         
                                            	<option value="53">Coral Sea Islands</option>
                                                                                         
                                            	<option value="54">Corea del Norte</option>
                                                                                         
                                            	<option value="55">Corea del Sur</option>
                                                                                         
                                            	<option value="56">Costa de Marfil</option>
                                                                                         
                                            	<option value="57">Costa Rica</option>
                                                                                         
                                            	<option value="58">Croacia</option>
                                                                                         
                                            	<option value="59">Cuba</option>
                                                                                         
                                            	<option value="60">Dhekelia</option>
                                                                                         
                                            	<option value="61">Dinamarca</option>
                                                                                         
                                            	<option value="62">Dominica</option>
                                                                                         
                                            	<option value="63">Ecuador</option>
                                                                                         
                                            	<option value="64">Egipto</option>
                                                                                         
                                            	<option value="65">El Salvador</option>
                                                                                         
                                            	<option value="66">El Vaticano</option>
                                                                                         
                                            	<option value="67">Emiratos arabes Unidos</option>
                                                                                         
                                            	<option value="68">Eritrea</option>
                                                                                         
                                            	<option value="69">Eslovaquia</option>
                                                                                         
                                            	<option value="70">Eslovenia</option>
                                                                                         
                                            	<option value="71">Espana</option>
                                                                                         
                                            	<option value="72">Estados Unidos</option>
                                                                                         
                                            	<option value="73">Estonia</option>
                                                                                         
                                            	<option value="74">Etiopia</option>
                                                                                         
                                            	<option value="75">Filipinas</option>
                                                                                         
                                            	<option value="76">Finlandia</option>
                                                                                         
                                            	<option value="77">Fiyi</option>
                                                                                         
                                            	<option value="78">Francia</option>
                                                                                         
                                            	<option value="79">Gabon</option>
                                                                                         
                                            	<option value="80">Gambia</option>
                                                                                         
                                            	<option value="81">Gaza Strip</option>
                                                                                         
                                            	<option value="82">Georgia</option>
                                                                                         
                                            	<option value="83">Ghana</option>
                                                                                         
                                            	<option value="84">Gibraltar</option>
                                                                                         
                                            	<option value="85">Granada</option>
                                                                                         
                                            	<option value="86">Grecia</option>
                                                                                         
                                            	<option value="87">Groenlandia</option>
                                                                                         
                                            	<option value="88">Guam</option>
                                                                                         
                                            	<option value="89">Guatemala</option>
                                                                                         
                                            	<option value="90">Guernsey</option>
                                                                                         
                                            	<option value="91">Guinea</option>
                                                                                         
                                            	<option value="92">Guinea Ecuatorial</option>
                                                                                         
                                            	<option value="93">Guinea-Bissau</option>
                                                                                         
                                            	<option value="94">Guyana</option>
                                                                                         
                                            	<option value="95">Haiti</option>
                                                                                         
                                            	<option value="96">Honduras</option>
                                                                                         
                                            	<option value="97">Hong Kong</option>
                                                                                         
                                            	<option value="98">Hungria</option>
                                                                                         
                                            	<option value="99">India</option>
                                                                                         
                                            	<option value="100">Indian Ocean</option>
                                                                                         
                                            	<option value="101">Indonesia</option>
                                                                                         
                                            	<option value="102">Iran</option>
                                                                                         
                                            	<option value="103">Iraq</option>
                                                                                         
                                            	<option value="104">Irlanda</option>
                                                                                         
                                            	<option value="105">Isla Bouvet</option>
                                                                                         
                                            	<option value="106">Isla Christmas</option>
                                                                                         
                                            	<option value="107">Isla Norfolk</option>
                                                                                         
                                            	<option value="108">Islandia</option>
                                                                                         
                                            	<option value="109">Islas Caiman</option>
                                                                                         
                                            	<option value="110">Islas Cocos</option>
                                                                                         
                                            	<option value="111">Islas Cook</option>
                                                                                         
                                            	<option value="112">Islas Feroe</option>
                                                                                         
                                            	<option value="113">Islas Georgia del Sur y Sandwich del Sur</option>
                                                                                         
                                            	<option value="114">Islas Heard y McDonald</option>
                                                                                         
                                            	<option value="115">Islas Malvinas</option>
                                                                                         
                                            	<option value="116">Islas Marianas del Norte</option>
                                                                                         
                                            	<option value="118">Islas Pitcairn</option>
                                                                                         
                                            	<option value="119">Islas Salomon</option>
                                                                                         
                                            	<option value="120">Islas Turcas y Caicos</option>
                                                                                         
                                            	<option value="121">Islas Virgenes Americanas</option>
                                                                                         
                                            	<option value="122">Islas Virgenes Britanicas</option>
                                                                                         
                                            	<option value="117">IslasMarshall</option>
                                                                                         
                                            	<option value="123">Israel</option>
                                                                                         
                                            	<option value="124">Italia</option>
                                                                                         
                                            	<option value="125">Jamaica</option>
                                                                                         
                                            	<option value="126">Jan Mayen</option>
                                                                                         
                                            	<option value="127">Japon</option>
                                                                                         
                                            	<option value="128">Jersey</option>
                                                                                         
                                            	<option value="129">Jordania</option>
                                                                                         
                                            	<option value="130">Kazajistan</option>
                                                                                         
                                            	<option value="131">Kenia</option>
                                                                                         
                                            	<option value="132">Kirguizistan</option>
                                                                                         
                                            	<option value="133">Kiribati</option>
                                                                                         
                                            	<option value="134">Kuwait</option>
                                                                                         
                                            	<option value="135">Laos</option>
                                                                                         
                                            	<option value="136">Lesoto</option>
                                                                                         
                                            	<option value="137">Letonia</option>
                                                                                         
                                            	<option value="138">Libano</option>
                                                                                         
                                            	<option value="139">Liberia</option>
                                                                                         
                                            	<option value="140">Libia</option>
                                                                                         
                                            	<option value="141">Liechtenstein</option>
                                                                                         
                                            	<option value="142">Lituania</option>
                                                                                         
                                            	<option value="143">Luxemburgo</option>
                                                                                         
                                            	<option value="144">Macao</option>
                                                                                         
                                            	<option value="145">Macedonia</option>
                                                                                         
                                            	<option value="146">Madagascar</option>
                                                                                         
                                            	<option value="147">Malasia</option>
                                                                                         
                                            	<option value="148">Malaui</option>
                                                                                         
                                            	<option value="149">Maldivas</option>
                                                                                         
                                            	<option value="150">Mali</option>
                                                                                         
                                            	<option value="151">Malta</option>
                                                                                         
                                            	<option value="152">Man, Isle of</option>
                                                                                         
                                            	<option value="153">Marruecos</option>
                                                                                         
                                            	<option value="154">Mauricio</option>
                                                                                         
                                            	<option value="155">Mauritania</option>
                                                                                         
                                            	<option value="156">Mayotte</option>
                                                                                         
                                            	<option value="157">Mexico</option>
                                                                                         
                                            	<option value="158">Micronesia</option>
                                                                                         
                                            	<option value="159">Moldavia</option>
                                                                                         
                                            	<option value="160">Monaco</option>
                                                                                         
                                            	<option value="161">Mongolia</option>
                                                                                         
                                            	<option value="162">Montserrat</option>
                                                                                         
                                            	<option value="163">Mozambique</option>
                                                                                         
                                            	<option value="164">Namibia</option>
                                                                                         
                                            	<option value="165">Nauru</option>
                                                                                         
                                            	<option value="166">Navassa Island</option>
                                                                                         
                                            	<option value="167">Nepal</option>
                                                                                         
                                            	<option value="168">Nicaragua</option>
                                                                                         
                                            	<option value="169">Niger</option>
                                                                                         
                                            	<option value="170">Nigeria</option>
                                                                                         
                                            	<option value="171">Niue</option>
                                                                                         
                                            	<option value="172">Noruega</option>
                                                                                         
                                            	<option value="173">Nueva Caledonia</option>
                                                                                         
                                            	<option value="174">Nueva Zelanda</option>
                                                                                         
                                            	<option value="175">Oman</option>
                                                                                         
                                            	<option value="176">Pacific Ocean</option>
                                                                                         
                                            	<option value="177">Paises Bajos</option>
                                                                                         
                                            	<option value="178">Pakistan</option>
                                                                                         
                                            	<option value="179">Palaos</option>
                                                                                         
                                            	<option value="180">Panama</option>
                                                                                         
                                            	<option value="181">Papua-Nueva Guinea</option>
                                                                                         
                                            	<option value="182">Paracel Islands</option>
                                                                                         
                                            	<option value="183">Paraguay</option>
                                                                                         
                                            	<option value="184">Peru</option>
                                                                                         
                                            	<option value="185">Polinesia Francesa</option>
                                                                                         
                                            	<option value="186">Polonia</option>
                                                                                         
                                            	<option value="187">Portugal</option>
                                                                                         
                                            	<option value="188">Puerto Rico</option>
                                                                                         
                                            	<option value="189">Qatar</option>
                                                                                         
                                            	<option value="190">Reino Unido</option>
                                                                                         
                                            	<option value="191">Republica Centroafricana</option>
                                                                                         
                                            	<option value="192">Republica Checa</option>
                                                                                         
                                            	<option value="193">Republica Democratica del Congo</option>
                                                                                         
                                            	<option value="194">Republica Dominicana</option>
                                                                                         
                                            	<option value="195">Ruanda</option>
                                                                                         
                                            	<option value="196">Rumania</option>
                                                                                         
                                            	<option value="197">Rusia</option>
                                                                                         
                                            	<option value="198">Sahara Occidental</option>
                                                                                         
                                            	<option value="199">Samoa</option>
                                                                                         
                                            	<option value="200">Samoa Americana</option>
                                                                                         
                                            	<option value="201">San Cristobal y Nieves</option>
                                                                                         
                                            	<option value="202">San Marino</option>
                                                                                         
                                            	<option value="203">San Pedro y Miquelon</option>
                                                                                         
                                            	<option value="204">San Vicente y las Granadinas</option>
                                                                                         
                                            	<option value="205">Santa Helena</option>
                                                                                         
                                            	<option value="206">Santa Lucia</option>
                                                                                         
                                            	<option value="207">Santo Tome y Principe</option>
                                                                                         
                                            	<option value="208">Senegal</option>
                                                                                         
                                            	<option value="209">Seychelles</option>
                                                                                         
                                            	<option value="210">Sierra Leona</option>
                                                                                         
                                            	<option value="211">Singapur</option>
                                                                                         
                                            	<option value="212">Siria</option>
                                                                                         
                                            	<option value="213">Somalia</option>
                                                                                         
                                            	<option value="214">Southern Ocean</option>
                                                                                         
                                            	<option value="215">Spratly Islands</option>
                                                                                         
                                            	<option value="216">Sri Lanka</option>
                                                                                         
                                            	<option value="217">Suazilandia</option>
                                                                                         
                                            	<option value="218">Sudafrica</option>
                                                                                         
                                            	<option value="219">Sudan</option>
                                                                                         
                                            	<option value="220">Suecia</option>
                                                                                         
                                            	<option value="221">Suiza</option>
                                                                                         
                                            	<option value="222">Surinam</option>
                                                                                         
                                            	<option value="223">Svalbard y Jan Mayen</option>
                                                                                         
                                            	<option value="224">Tailandia</option>
                                                                                         
                                            	<option value="225">Taiwan</option>
                                                                                         
                                            	<option value="226">Tanzania</option>
                                                                                         
                                            	<option value="227">Tayikistan</option>
                                                                                         
                                            	<option value="228">TerritorioBritanicodel Oceano Indico</option>
                                                                                         
                                            	<option value="229">Territorios Australes Franceses</option>
                                                                                         
                                            	<option value="230">Timor Oriental</option>
                                                                                         
                                            	<option value="231">Togo</option>
                                                                                         
                                            	<option value="232">Tokelau</option>
                                                                                         
                                            	<option value="233">Tonga</option>
                                                                                         
                                            	<option value="234">Trinidad y Tobago</option>
                                                                                         
                                            	<option value="235">Tunez</option>
                                                                                         
                                            	<option value="236">Turkmenistan</option>
                                                                                         
                                            	<option value="237">Turquia</option>
                                                                                         
                                            	<option value="238">Tuvalu</option>
                                                                                         
                                            	<option value="239">Ucrania</option>
                                                                                         
                                            	<option value="240">Uganda</option>
                                                                                         
                                            	<option value="241">Union Europea</option>
                                                                                         
                                            	<option value="242">Uruguay</option>
                                                                                         
                                            	<option value="243">Uzbekistan</option>
                                                                                         
                                            	<option value="244">Vanuatu</option>
                                                                                         
                                            	<option value="245">Venezuela</option>
                                                                                         
                                            	<option value="246">Vietnam</option>
                                                                                         
                                            	<option value="247">Wake Island</option>
                                                                                         
                                            	<option value="248">Wallis y Futuna</option>
                                                                                         
                                            	<option value="249">West Bank</option>
                                                                                         
                                            	<option value="250">World</option>
                                                                                         
                                            	<option value="251">Yemen</option>
                                                                                         
                                            	<option value="252">Yibuti</option>
                                                                                         
                                            	<option value="253">Zambia</option>
                                                                                         
                                            	<option value="254">Zimbabue</option>
                                                                                         
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
                                <h4>Experiencia RED </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="quienes_somosra.php">Quienes somos</a>  </li> 
                    <!--                <li><a href="historia.php">Historia</a>  </li>    -->
                                    <li><a href="mision_visionra.php">misión y visión</a></li> 
                                    <li><a href="valores_corporativosra.php">Valores Corporativos</a></li> 
                                    <li><a href="gobierno_corporativo.php">Gobierno Corporativo</a></li> 
                                    
                                </ul>
                            </div>
                        </div>
						
						
						
						
				<!--		      <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Antes de viajar</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="franquicia.php">Franquicia de equipaje</a>  </li> 
                                    <li><a href="servicios_especiales.php">Servicios especiales</a</li> 
                                    <li><a href="itinerarios.php">Itinerarios </a></li> 
                                    <li><a href="disposiciones_migratorias.php">Disposiciones Migratorias</a></li> 
                                    <li><a href="viaje_menores.php">Viajes de menores sin acompañantes</a>  </li> 
                                    <li><a href="reservas_internacionales.php">Reservas internacionales</a>  </li> 
										 <li><a href="traslado_mascotas.php">Traslados de Mascotas</a>  </li> 
										 <li><a href="servicio_cargo.php">Servicio de Carga</a>  </li> 
                                </ul>
                            </div>
                        </div>    -->
								  
								  	      <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Atención al Cliente</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="contacto.php">Contáctenos</a>  </li> 
                                    <li><a href="generic.php?id=26">Puntos de venta y oficinas</a</li> 
										         <li><a href="noticias.php">Noticias</a</li>
                                    
                                
                                </ul>
                            </div>
                        </div>
								  
								  
						
							      <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Viajero Frecuente</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="javascript:registerMessage('Próximamente anunciaremos nuestro programa de fidelidad, con beneficios para todos nuestros pasajeros');">Tipo de membresia</a>  </li> 
                                    <li><a href="javascript:registerMessage('Próximamente anunciaremos nuestro programa de fidelidad, con beneficios para todos nuestros pasajeros');">Beneficios</a>  </li> 
                                    <li><a href="javascript:registerMessage('Próximamente anunciaremos nuestro programa de fidelidad, con beneficios para todos nuestros pasajeros');">Detalles del beneficio </a></li> 
                                  
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
                                    <li><a class="wow fadeInUp animated" href="https://twitter.com/RedAirDo"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/RedAirdominicana/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                      
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/redairdo?utm_medium=copy_link/" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                      
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
                        <div class="pull-left" style="text-align:center; width:100%;">
                            <span> <strong> Red Air</strong>| Copyright © 2020. </span> 
                        </div> 
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
			
			
			
		<script src="assets/js/jquery.ba-cond.min.js"></script>
        <script src="assets/js/jquery.slitslider.js"></script>
			
			
			
			<script type="text/javascript">
                            $(function () {

                                var Page = (function () {

                                    var $nav = $('#nav-dots > span'),
                                            slitslider = $('#slider').slitslider({
                                        onBeforeChange: function (slide, pos) {

                                            $nav.removeClass('nav-dot-current');
                                            $nav.eq(pos).addClass('nav-dot-current');

                                        }
                                    }),
                                            init = function () {

                                                initEvents();

                                            },
                                            initEvents = function () {

                                                $nav.each(function (i) {

                                                    $(this).on('click', function (event) {

                                                        var $dot = $(this);

                                                        if (!slitslider.isActive()) {

                                                            $nav.removeClass('nav-dot-current');
                                                            $dot.addClass('nav-dot-current');

                                                        }

                                                        slitslider.jump(i + 1);
                                                        return false;

                                                    });

                                                });

                                            };

                                    return {init: init};

                                })();

                                Page.init();

                                /**
                                 * Notes: 
                                 * 
                                 * example how to add items:
                                 */

                                /*
                                 
                                 var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
                                 
                                 // call the plugin's add method
                                 ss.add($items);
                                 
                                 */

                            });
							
        </script>
			
			
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<iframe src="https://wc2-stage-ql.kiusys.net/widget/" style="width:100%; height:720px; border:0px; border-style:none;overflow-y: scroll;"></iframe>
      </div>
    </div>
  </div>
</div>			
<style>
.modal-dialog {
    width: 85%; !important
}
.slider-content {
    position: absolute;
    top: 133px !important;
    text-align: center;
    color: #FFF;
    width: 100%;
}
</style>
      </div>
    </div>
  </div>
</div>			
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="top: 10% !important;">
  <div class="modal-dialog" role="document" style="width: 90%;">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar" onclick="javascript:hideLogin();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:0px;">
        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="col-md-6" style="width:100%">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Login : </h2> 
                            <form action="javascript:sendForm();" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" required autocomplete="false">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" required autocomplete="false">
                                </div>
								<div style="width:100%; text-align:right"><a href="javascript:doRememberPwd();">Recuperar mi contraseña</a></div>
								<div style="height:20px"></div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-default" onclick="javascript:sendForm();"> Aceptar</button>
									<button type="button" class="btn btn-default" onclick="javascript:hideLogin();"> Cancelar</button>
                                </div>
                            </form>
                            <br>
							<div id='failureLogin' style='display:none; font-size:12px; color:red; font-weight:bold; text-align:center; width:100%'>Nombre de usuario o contraseña incorrecta, por favor pruebe nuevamente.</div>
                        </div>                        
                    </div>
                </div>                                 
                </div>
            </div>
        </div>	  
      </div>
    </div>
  </div>
</div>    			

<div class="modal fade" id="sucessRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="top: 10% !important;">
  <div class="modal-dialog" role="document" style="width: 90%;">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar" onclick="javascript:hideRegisterSucess();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:0px;">
        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="col-md-6" style="width:100%">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Se ha creado exitosamente su cuenta en Aerolineas Laser.</h2> 
                            <form action="#" method="post">
 								<div style="height:20px"></div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-default" onclick="javascript:hideRegisterSucess();"> Aceptar</button>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>                                 
                </div>
            </div>
        </div>	  
      </div>
    </div>
  </div>
</div>    
<div class="modal fade" id="failureRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="top: 10% !important;">
  <div class="modal-dialog" role="document" style="width: 90%;">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar" onclick="javascript:hideRegisterSucess();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:0px;">
        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="col-md-6" style="width:100%">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Ha ocurrio un error al crear su cuenta en Aerolineas Laser, por favor intente nuevamente.</h2> 
                            <form action="#" method="post">
 								<div style="height:20px"></div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-default" onclick="javascript:hideRegisterSucess();"> Aceptar</button>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>                                 
                </div>
            </div>
        </div>	  
      </div>
    </div>
  </div>
</div>	

<div class="modal fade" id="messageRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="top: 10% !important;">
  <div class="modal-dialog" role="document" style="width: 90%;">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar" onclick="javascript:hideRegisterMessage();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:0px;">
        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="col-md-6" style="width:100%">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2><div id="msgerror" style='text-align: justify;'></div></h2> 
                            <form action="#" method="post">
 								<div style="height:20px"></div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-default" onclick="javascript:hideRegisterMessage();"> Aceptar</button>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>                                 
                </div>
            </div>
        </div>	  
      </div>
    </div>
  </div>
</div>			


<script>
	function sendForm(){
		var formData = new FormData();
		formData.append('email', document.getElementById("email").value);
		formData.append('password', document.getElementById("password").value);
		$.ajax({
		   url : 'doLogin.php',
		   type : 'POST',
		   data : formData,
		   processData: false,
		   contentType: false,
		   success : function(datax) {
				var myObj = JSON.parse(datax);
				if (myObj.result){
					document.getElementById("loginButton").style.display = "none";
					document.getElementById("registerButton").style.display = "none";
					document.getElementById("userInfo").innerHTML = "Bienvenido " + myObj.nombres + " " + myObj.apellidos + "<b class='caret'></b>";
					document.getElementById("userInfo").style.display = "block";
					document.getElementById("liuser").style.display = "block";
					document.getElementById("logolaser").style.marginLeft = "-26px";
					$('#loginModal').modal("hide");
				}else{
					document.getElementById("failureLogin").style.display = "block";
				}												  
		   }
		});				
	}
	function doClose(){
		var formData = new FormData();
		$.ajax({
		   url : 'doLogOff.php',
		   type : 'POST',
		   processData: false,
		   contentType: false,
		   success : function(datax) {
				var myObj = JSON.parse(datax);
				if (myObj.result){
					window.location="index.php";
				}												  						
		   }
		});					
	}		
	function showLogin(){
		$('#loginModal').modal("show");	
	}
	function hideLogin(){
		$('#loginModal').modal("hide");	
		$('modal-backdrop').modal("hide");	
	}
	function doRememberPwd(){
		window.location="dorememberpwd.php";
	}
	function showRegister(){
		window.location="registro.php";
	}
	function showRegisterSucess(){
		$('#sucessRegistro').modal("show");	
	}	
	function hideRegisterSucess(){
		$('#sucessRegistro').modal("hide");	
	}	
	function hideRegisterMessage(){
		$('#messageRegistro').modal("hide");	
	}	
	function registerMessage(message){
		document.getElementById("msgerror").innerHTML = message;
		$('#messageRegistro').modal("show");	
	}	
	function showUserMenu(){
		document.getElementById("usermenu").style.display = "block";
	}
	function hideUserMenu(){
		document.getElementById("usermenu").style.display = "none";
	}
	function doRememberPwd(){
		window.location="recoverpwd.php";	
	}
// 	  $.datepicker.regional['es'] = {
// 			  closeText: 'Cerrar',
// 			  prevText: '< Ant',
// 			  nextText: 'Sig >',
// 			  currentText: 'Hoy',
// 			  monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
// 			  monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
// 			  dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
// 			  dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
// 			  dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
// 			  weekHeader: 'Sm',
// 			  dateFormat: 'dd-mm-yy',
// 			  firstDay: 1,
// 			  isRTL: false,
// 			  showMonthAfterYear: false,
// 			  yearSuffix: ''
// 			  };
// 			  $.datepicker.setDefaults($.datepicker.regional['es']);    
// 	  $( function() {
// 	    $( "#fechallegada" ).datepicker( $.datepicker.regional[ "sp" ]);
// 	  } );	
</script>
<style>
.slider-content {
    position: absolute;
    top: 133px !important;
    text-align: center;
    color: #FFF;
    width: 100%;
}
</style>
 
    </body>
</html>