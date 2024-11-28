<?php
    session_start();

	$currdate = date('Y-m-d').' '.date('h:m:s');
//   echo "<pre>";
//var_dump($_POST);
//die();
?>
<style>
.div10block3{
  width:36% !important;
  display: inline-block;
}
.div9block3{
  width: 20% !important;
  display: inline-block; 
}
.div5block1{
   width: 20% !important;
   display: inline-block;
}
.div3block2 {
    width: 40% !important;
    display: inline-block;
} 
.div4block2 {
    width: 30% !important;
    display: inline-block;
    vertical-align: top;
}
.div5block2{
    width: 40% !important;
    display: inline-block;
}
.div6block2{
    width: 37% !important;
    display: inline-block;
}
.div7block3{
    width: 20% !important;
    display: inline-block;
}
.div8block3{
    width: 17% !important;
    display: inline-block;
}
.div3block1 {
    width: 15% !important;
    display: inline-block;
}
.div5block3{
    width: 25% !important;
}
.div1wblock4 {
    width: 10% !important;
    display: inline-block;
}
.div2block4 {
    width: 100% !important;
    display: inline-block;
}
.div3block4 {
    width: 10% !important;
    display: inline-block;
}
.div4block4 {
    width: 17% !important;
    display: inline-block;
    margin-left: 10px;
}
.div5block4 {
    width: 15% !important;
    display: inline-block;
}
.div1block5 {
    width: 100% !important;
    display: inline-block;
}
.div2block5 {
    width: 100% !important;
    display: inline-block;
}
.div3block5 {
    width: 11% !important;
    display: inline-block;
}
.div4block5 {
    width: 16% !important;
    display: inline-block;
}
.div5block5 {
    width: 32% !important;
    display: inline-block;
}
.div1block8 {
    width: 100% !important;
    display: inline-block;
}
.div1block1{
    width: 15%;
    display: inline-block;
}
@media (max-width: 480px){
    .div3block2 {
        width: 100% !important;
        display: block !important;
    }
    .div4block2 {
        width: 100% !important;
        display: inline-block !important;
    }
    .div3block1 {
        width: 100% !important;
        display: block !important;
        margin-top: 33px;
    }   
    .div1block4 {
        width: 100% !important;
        display: inline-block;
    }  
    .div2block4 {
        width: 100% !important;
        display: inline-block;
    }   
    .div3block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div4block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div5block4 {
        width: 100% !important;
        display: inline-block;
    }    
}
@media (max-width: 979px) and (min-width: 768px){
    .div3block2 {
        width: 100% !important;
        display: block !important;
    }
    .div4block2 {
        width: 100% !important;
        display: inline-block !important;
    }  
    .div3block1 {
        width: 100% !important;
        display: block !important;
        margin-top: 33px;
    }  
    .button.navbar-right {
        padding-top: -35px;
        float: left;
        position: absolute;
        left: 76%;
        top: 18px;
    }     
    .div1block4 {
        width: 100% !important;
        display: inline-block;
    }
    .div2block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div3block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div4block4 {
        width: 100% !important;
        display: inline-block;
    }    
    .div5block4 {
        width: 100% !important;
        display: inline-block;
    }     
}
@media (max-width: 979px) and (min-width: 768px){
.div3block1 {
    width: 15% !important;
    display: inline-block !important;
    margin-top: 33px;
}
.div1block1 {
    width: 20% !important;
    display: inline-block;
}
.div5block1 {
    width: 56% !important;
    display: inline-block;
}
.div5block3{
    width: 50% !important;
    display: inline-block;
}
.div6block3{
    width: 40% !important;
    display: inline-block;
}
.div7block3{
    width: 20% !important;
    display: inline-block;
}
.div8block3{
    width: 40% !important;
    display: inline-block;
}
.div9block3{
    width: 50% !important;
    display: inline-block;
}
.div10block3{
    width: 40% !important;
    display: inline-block;
}
.div11block3{
    width: 50% !important;
    display: inline-block;
}
.div12block3{
    width: 40% !important;
    display: inline-block;
}
.div1block5{
    width: 100% !important;
    display: inline-block;
}
.div2block5{
    width: 100% !important;
    display: inline-block;
}

}
</style>
<?php
function DecideGenero($genero){
		if ($genero == "m"){
			return "Másculino";
		}else{
			return "Femenino";
		}
}
function decideSintoma($sintoma){
		if ($sintoma == "on"){
			return "SI";
		}else{
			return "NO";
		}
}
?>
<br>          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><img src="https://www.laserairlines.com/assets/img/logo.png"></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
								<center><h2>DECLARACIÓN DE SALUD DEL VIAJERO</h2></center>
            					<div id="block1" name="block1" style="width:100%">
            						<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
            							IDENTIFICACIÓN DEL VIAJERO O TRIPULANTE
            						</div>
            						<div id="div1block1" name="div1block1" class="div1block1">
            							<div style="width:100%;">
            								Nombres
            							</div>
            							<div style="width:100%; text-align:left; font-weight:bold;">
            								<?php echo $_POST["nombrepila"] ?>
            							</div>							
            						</div>
            						<div id="div2block1" name="div2block2" class="div2block1">
            							<div style="width:100%;">
            								Apellidos
            							</div>
            							<div style="width:100%; text-align:left; font-weight:bold;">
            								<?php echo $_POST["apellido"] ?>
            							</div>							
            						</div>
            						<div id="div3block1" name="div3block1" class="div3block1">
            							<div style="width:100%;">
            								Sexo
            							</div>
            							<div style="width:100%; text-align:left; font-weight:bold;">
            								<?php echo DecideGenero($_POST["gender"]); ?>
            							</div>							
            						</div>
            						<div id="div4block1" name="div4block1" class="div4block1">
            							<div style="width:100%;">
            								Fecha de nacimiento
            							</div>
            							<div style="width:100%; text-align:left; font-weight:bold;">
            								<?php echo $_POST["fechanacimiento"]; ?>
            							</div>							
            						</div>
            						<div id="div4block1" name="div4block1" class="div4block1">
            							<div style="width:100%;">
            								Nacionalidad
            							</div>
            							<div style="width:100%; text-align:left; font-weight:bold;">
            								<?php echo $_POST["nacionalidad"]; ?>
            							</div>							
            						</div>
            						<div id="div5block1" name="div5block1" class="div5block1">
            							<div style="width:100%;">
            								Número de pasaporte
            							</div>
            							<div style="width:100%; text-align:left; font-weight:bold;">
            								<?php echo $_POST["numeropasaporte"]; ?>
            							</div>							
            						</div>
            					</div>
                            </div>
							<div id="block2" name="block2" style="width:100%">
								<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
									DIRECCIÓN DE RESIDENCIA PERMANENTE
								</div><br>
								<div id="div1block2" name="div1block2" class="div1block2">
									<div style="width:100%;">
										País
									</div>
									<div style="width:100%; text-align:left; font-weight:bold;">
										<?php echo $_POST["pais"]; ?>
									</div>							
								</div>
								<div id="div2block2" name="div2block2" class="div2block2">
									<div style="width:100%;">
										Calle Nro.
									</div>
									<div style="width:100%; text-align:left; font-weight:bold;">
										<?php echo $_POST["callenro"]; ?>
									</div>							
								</div>
								<div id="div3block2" name="div3block2" class="div3block2">
									<div style="width:100%;">
										Ciudad: Sector /Barrio Provincia/Estado/ Departamento
									</div>
									<div style="width:100%; text-align:left; font-weight:bold;">
										<?php echo $_POST["ciudad"]; ?>
									</div>							
								</div>
								<div id="div4block2" name="div4block2" class="div4block2">
									<div style="width:100%;">
										Teléfono contacto en Lugar de Residencia
									</div>
									<div style="width:100%; text-align:left; font-weight:bold;">
										<?php echo $_POST["telefonocontacto"]; ?>
									</div>							
								</div><br><br>
								<div id="block3" name="block3" style="width:100%">
									<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
										DATOS DE VIAJE
									</div><br>
									<div id="div1block3" name="div1block3" class="div1block3">
										<div style="width:100%;">
											Medios de transporte
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["medio"]; ?>
										</div>							
									</div>
									<div id="div2block3" name="div2block3" class="div2block3">
										<div style="width:100%;">
											Línea aérea
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["lineaaerea"]; ?>
										</div>							
									</div>
									<div id="div3block3" name="div3block3" class="div3block3">
										<div style="width:100%;">
											Fecha del vuelo
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["fechavuelo"]; ?>
										</div>							
									</div>
									<div id="div4block3" name="div4block3" class="div4block3">
										<div style="width:100%;">
											Nro. del vuelo
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["numvuelo"]; ?>
										</div>							
									</div>
									<div id="div5block3" name="div5block3" class="div5block3">
										<div style="width:100%;">
											Nombre del lugar de entrada
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["nombrelugar"]; ?>
										</div>							
									</div>
									<div id="div6block3" name="div6block3" class="div6block3">
										<div style="width:100%;">
											Fecha de llegada al País
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["fechallegadapais"]; ?>
										</div>							
									</div><br><br>
									<div id="div7block3" name="div7block3" class="div7block3">
										<div style="width:100%;">
											Fecha de salida del País
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["fechasalidapais"]; ?>
										</div>							
									</div>
									<div id="div8block3" name="div8block3" class="div8block3">
										<div style="width:100%;">
											Compañia de transporte
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["companiatransporte"]; ?>
										</div>							
									</div>
									<div id="div9block3" name="div9block3" class="div9block3">
										<div style="width:100%;">
											Primer país de embarque
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["primerpaisembarque"]; ?>
										</div>							
									</div>
									<div id="div10block3" name="div10block3" class="div10block3">
										<div style="width:100%;">
											Países de tránsito antes de llegar a Republica Dominicana
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["paistransitoantes"]; ?>
										</div>							
									</div><br><br>
									<div id="div11block3" name="div11block3" class="div11block3">
										<div style="width:100%;">
											Países visitados en los últimos 30 días:
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["paisesvisitados30"]; ?>
										</div>							
									</div>
								</div>
								<div id="block4" name="block4" style="width:100%">
									<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
										DECLARACIÓN DE SIGNOS Y SÍNTOMAS
									</div><br>
									<div id="div1block4" name="div1block4" class="div1block4">
										<div style="width:100%;">
											¿En las últimas 72 horas Usted ha presentado alguno de estos signos y síntomas?
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo "Fiebre: ".decideSintoma($_POST["fiebre"]); ?>&nbsp;/&nbsp;<?php echo "Dificultad Respiratoria: ".decideSintoma($_POST["respiratoria"]); ?>&nbsp;/&nbsp;<?php echo "Tos: ".decideSintoma($_POST["tos"]); ?>&nbsp;/&nbsp;<?php echo "Dolor de Cabeza: ".decideSintoma($_POST["cabeza"]); ?>&nbsp;/&nbsp;<?php echo "Dolor de Garganta: ".decideSintoma($_POST["garganta"]); ?>&nbsp;/&nbsp;<?php echo "Fatiga: ".decideSintoma($_POST["fatiga"]); ?>&nbsp;/&nbsp;<?php echo "Secreción Nasal: ".decideSintoma($_POST["secrecionnasal"]); ?>&nbsp;/&nbsp;<?php echo "Escalofríos: ".decideSintoma($_POST["escalofrios"]); ?>&nbsp;/&nbsp;<?php echo "Dolor Muscular: ".decideSintoma($_POST["dolormuscular"]); ?>&nbsp;/&nbsp;<?php echo "Ninguno: ".decideSintoma($_POST["ninguno"]); ?><br>											
											<?php echo "Otros sintomas especifiquen: ".$_POST["otrossintomas"]; ?><br>											
										</div>							
									</div><br><br>
									<div id="div2block4" name="div2block4" class="div2block4">
										<div style="width:100%;">
											Fecha de inicio de los sintomas
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["fechainiciosintomas"]; ?>
										</div>							
									</div>
								</div>
								<div id="block5" name="block5" style="width:100%">
									<div style="width: 100%; text-align: center; color: #32be66; font-size:16px; font-weight:bold;">
										LOCALIZACIÓN DEL PASAJERO
									</div><br>
									<div id="div1block5" name="div1block5" class="div1block5">
										<div style="width:100%;">
											Dirección completa de contacto durante su estadía en República Dominicana, en los próximos 30 días
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<?php echo $_POST["direccionestadia"]; ?>
										</div>							
									</div><br><br>
									<div id="div2block5" name="div2block5" class="div2block5">
										<div style="width:100%;">
											Firma Digital
										</div>
										<div style="width:100%; text-align:left; font-weight:bold;">
											<img style="width:82%; height:116PX" src="<?php echo $_POST["firmacontainer"]; ?>">
										</div>							
									</div>
								</div>
							</div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<?php echo $currdate ?>
<script>
//	window.print();
</script>            
<style>
.div1block1{
	width:20%; 
	display: inline-block;	
}

.div2block1{
	width:15%; 
	display: inline-block;	
}

.div3block1{
	width:15%; 
	display: inline-block;	
}

.div4block1{
	width:20%; 
	display: inline-block;	
}

.div1block2{
	width:13%; 
	display: inline-block;	
}

.div2block2{
	width:13%; 
	display: inline-block;	
}

.div3block2{
	width:40%; 
	display: inline-block;	
}

.div4block2{
	width:34%; 
	display: inline-block;	
	vertical-align: top;
}

.div1block3{
	width:15%; 
	display: inline-block;	
}
.div6block3{
        width:16%; 
        display: inline-block;
}
.div2block3{
	width:10%; 
	display: inline-block;	
}
.div3block3{
	width:11%; 
	display: inline-block;	
}

.div4block3{
	width:11%; 
	display: inline-block;	
}

.div5block3{
	width:100%; 
	display: inline-block;	
}

.div1block4{
	width:100%; 
	display: inline-block;	
}

.div2block4{
	width:10%; 
	display: inline-block;	
}
.div3block4{
	width:49%; 
	display: inline-block;	
}

.div4block4{
	width:49%; 
	display: inline-block;	
	margin-left: 10px;
}
.div5block4{
	width:49%; 
	display: inline-block;	
}

.div6block4{
	width:49%; 
	display: inline-block;	
	margin-left: 10px;
}
.div1block5{
	width:35%; 
	display: inline-block;	
}

.div2block5{
	width:100%; 
	display: inline-block;	
}

.div3block5{
	width:20%; 
	display: inline-block;	
}
.div4block5{
	width:49%; 
	display: inline-block;	
}
.div5block5{
	width:49%; 
	display: inline-block;	
	margin-left: 10px;
}
.div6block5{
	width:49%; 
	display: inline-block;	
}
.div7block5{
	width:49%; 
	display: inline-block;	
	margin-left: 10px;
}
.div1block6{
	width:35%; 
	display: inline-block;	
}

.div2block6{
	width:44%; 
	display: inline-block;	
}

.div3block6{
	width:20%; 
	display: inline-block;	
}
.div4block6{
	width:50%; 
	display: inline-block;	
}
.div5block6{
	width:49%; 
	display: inline-block;	
}
.div6block6{
	width:50%; 
	display: inline-block;	
}
.div7block6{
	width:49%; 
	display: inline-block;	
}
.div0block7{
    width: 2%;
    display: inline-block;
}
.div1block7{
	width: 37%;
    display: inline-block;
}
.div2block7{
	width: 37%;
    display: inline-block;
}
.div3block7{
	width: 12%;
    display: inline-block;
}
.div4block7{
	width: 10%;
    display: inline-block;
}
.div0block8{
    width: 2%;
    display: inline-block;
}
.div1block8{
	width: 37%;
    display: inline-block;
}
.div2block8{
	width: 37%;
    display: inline-block;
}
.div3block8{
	width: 12%;
    display: inline-block;
}
.div4block8{
	width: 10%;
    display: inline-block;
}
.div0block9{
    width: 2%;
    display: inline-block;
}
.div1block9{
	width: 37%;
    display: inline-block;
}
.div2block9{
	width: 37%;
    display: inline-block;
}
.div3block9{
	width: 12%;
    display: inline-block;
}
.div4block9{
	width: 10%;
    display: inline-block;
}
.div0block10{
    width: 2%;
    display: inline-block;
}
.div1block10{
	width: 37%;
    display: inline-block;
}
.div2block10{
	width: 37%;
    display: inline-block;
}
.div3block10{
	width: 12%;
    display: inline-block;
}
.div4block10{
	width: 10%;
    display: inline-block;
}
.div0block11{
    width: 2%;
    display: inline-block;
}
.div1block11{
    width: 33%;
    display: inline-block;
}
.div2block11{
    width: 32%;
    display: inline-block;
}
.div3block11{
	width: 32%;
    display: inline-block;
}
.div0block12{
    width: 2%;
    display: inline-block;
}
.div1block12{
    width: 33%;
    display: inline-block;
}
.div2block12{
    width: 32%;
    display: inline-block;
}
.div3block12{
	width: 32%;
    display: inline-block;
}

.div0block16{
    width: 2%;
    display: inline-block;
}
.div1block16{
    width: 34%;
    display: inline-block;
}
.div2block16{
    width: 34%;
    display: inline-block;
}
.div3block16{
    width: 5%;
    display: inline-block;
}
.div4block16{
    width: 5%;
    display: inline-block;
}
.div5block16{
    width: 13%;
    display: inline-block;
}
.div0block17{
    width: 2%;
    display: inline-block;
}
.div1block17{
    width: 34%;
    display: inline-block;
}
.div2block17{
    width: 34%;
    display: inline-block;
}
.div3block17{
    width: 5%;
    display: inline-block;
}
.div4block17{
    width: 5%;
    display: inline-block;
}
.div5block17{
    width: 13%;
    display: inline-block;
}

.div0block20{
	width: 2%;
    display: inline-block;
}
.div1block20{
	width: 97%;
    display: inline-block;
}

.div0block21{
	width: 2%;
    display: inline-block;
}
.div1block21{
	width: 97%;
    display: inline-block;
}

.div0block22{
	width: 2%;
    display: inline-block;
}
.div1block22{
	width: 97%;
    display: inline-block;
}

</style>
            
            
