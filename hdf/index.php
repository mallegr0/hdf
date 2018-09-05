<!DOCTYPE html>
<html>
	<head>
		<title>Herederos de Fierro</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
			
	</head>
	<body>


		<!-- VARIABLES DE PHP PARA SIMPLIFICAR EL CODIGO.-->
		<?php include './PAGES/data.php'?>

		<!-- NAVBAR ARRIBA DE TODO-->
		<div class="w3-top">
			<div class="w3-bar w3-white w3-card" id="myNavbar">
				<a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>

				<!-- NAVBAR A LA DERECHA CON LOS LINK-->
				<div class="w3-right w3-hide-small">
					<div class="w3-dropdown-hover w3-white">
						<button class="w3-button">
							ORGANIZACION
						</button>
						<div class="w3-dropdown-content w3-bar-block w3-border">
							<a href="#nosotros" class="w3-bar-item w3-button"> Nosotros</a>
							<a href="#historia" class="w3-bar-item w3-button"> Historia</a>
							<a href="#novedades" class="w3-bar-item w3-button"> Novedades</a>
						</div>
					</div>
					<a href="#staff" class="w3-bar-item w3-button"><i class="fa fa-user"></i> STAFF</a>
					<a href="#escuela" class="w3-bar-item w3-button"><i class="fa fa-th"></i> ESCUELA</a>
					<a href="#contacto" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACTO</a>
					<!--<div class="w3-bar-item w3-button">LOGIN</div>-->
				</div>
				
				<!-- LINKS FLOTANTES OCULTOS A LA DERECHA EN PANTALLAS PEQUEÑAS Y QUE SON REEMPLAZADOS POR UN MENU DE ICONOS -->
				<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</div>

		<!-- MENU LATERAL EN PANTALLAS PEQUEÑAS CUANDO HACEMOS CLICK EN UN ICONO DEL MENU -->
		<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display: none;" id="mySidebar">
			<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Cerrar x</a>
			<div class="w3-dropdown-hover w3-black">
				<button class="w3-button"> ORGANIZACION</button>
				<div class="w3-dropdown-content w3-bar-block w3-border">
					<a href="#nosotros" onclick="w3_close()" class="w3-bar-item w3-button">Nosotros</a>
					<a href="#historia" onclick="w3_close()" class="w3-bar-item w3-button"> Historia</a>
					<a href="#novedades" onclick="w3_close()" class="w3-bar-item w3-button"> Novedades</a>
				</div>
			</div>
			<a href="#staff" onclick="w3_close()" class="w3-bar-item w3-button">STAFF</a>
			<a href="#escuela" onclick="w3_close()" class="w3-bar-item w3-button">ESCUELA</a>
			<a href="#contacto" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTO</a>

		</nav>

		<!--HEADER CON EL LOGO DE LA ESCUELA -->
		<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
			<!--Titulo de la web -->
			
			<div class="w3-display-left w3-text-white" style="padding: 48px">
				<strong>
					<span class="w3-jumbo w3-hide-small w3-tangerine cambiacolor"> Herederos de Fierro</span><br>
					<span class="w3-xxlarge w3-hide-large w3-hide-medium w3-tangerine cambiacolor">Herederos de Fierro</span><br>
					<span class="w3-large cambiacolor"> 1° Escuela Santafecina de Esgrima Criolla</span>
				</strong>
			</div>
			<!-- Iconos de redes sociales -->
			<!-- Los pongo a todos despues saco los que no uso y agrego el canal de YouTube -->
			<div class="w3-display-bottomleft w3-text-white w3-large" style="padding: 24px 48px">
				<a href="https://www.facebook.com/Esc-de-Esgrima-Criolla-Herederos-de-Fierro-Rosario-2062898703924256/" class="fa fa-facebook-official w3-hover-opacity"></a>
				<!--<i class="fa fa-instagram w3-hover-opacity"></i>
				<i class="fa fa-twitter w3-hover-opacity"></i>
				<i class="fa fa-blogger w3-hover-opacity"></i>-->
				<a href="https://www.youtube.com/channel/UCQmzk_KscukWu-_SdCJBQRQ" class="fa fa-youtube-square w3-hover-opacity"></a>
			</div>	
		</header>
		
		<!-- SECCIONES DE LA PAGINA -->
		<br><br><br><br>
		
		<!-- NOSOTROS -->
		<div class="w3-container" style="padding: 128px 16 px" id="nosotros">
			<h3 class="w3-center titulo">SOBRE NOSOTROS</h3><br>
			<P class="w3-center w3-large titulo"> MISION </p>
			<div class="w3-panel w3-leftbar w3-hover-border-green w3-hover-pale-green">
				<p class="w3-large w3-serif"><i><?php echo $mision ?></i></p>
				<br>
			</div>
			<P class = "w3-center w3-large titulo"> VISION </p>
			<div class="w3-panel w3-leftbar w3-hover-border-green w3-hover-pale-green">
				<p class="w3-large w3-serif"><i><?php echo $vision ?></i></p>
				<br>
			</div>
			<p class="w3-center w3-large titulo" id="historia">HISTORIA</p>
			<div class="w3-panel w3-leftbar w3-hover-pale-green w3-hover-border-green">
				<p class="w3-large w3-serif"><i><?php echo $historia ?></i></p>
			</div>
			<br>
			<p class="w3-center w3-large titulo" id="novedades">NOVEDADES</p>
			<div class="w3-center"><?php  echo $novedades?>
				
			</div>
		</div>
		<br><br><br><br>
		
		<!-- STAFF -->
		<div class="w3-container" style="padding: 128px 16 px" id="staff">
			<h3 class="w3-center titulo"> LOS INSTRUCTORES </h3>
			<div class="w3-row-padding w3-grayscale" style="margin-top: 64px">
				<!-- Perfil de Fede -->
				<div class="w3-col l6 m6 w3-margin-bottom">
					<div class="w3-card">
						<img src="IMG/logo2.jpg" alt="Federico Alassino" style="width: 100%; height: 400px" class="w3-img">
						<div class="w3-container">
							<h3 class="w3-tangerine w3-xxxlarge">Federico Alassino</h3>
							<p class="w3-opacity"> Instructor de Teoría y Fundador</p>
							<p><i><?php echo $hojaFede ?></i></p>
						</div>
					</div>
				</div>
				<!-- Perfil de Mati -->
				<div class="w3-col l6 m6 w3-margin-bottom">
					<div class="w3-card">
						<img src="IMG/logo3.jpg" alt="Matias Allegranza" style="width: 100%; height: 400px;" class="w3-img">
						<div class="w3-container">
							<h3 class="w3-tangerine w3-xxxlarge">Matias Allegranza</h3>
							<p class="w3-opacity"> Instructor de Práctica y Fundador</p>
							<p><i><?php echo $hojaMati ?></i></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- ESCUELA-->
		<br>
		<div class="w3-container" style="padding: 128px 16px" id="escuela">
			<h3 class="w3-center titulo">ESCUELA</h3>
			<p class="w3-center w3-large">Nuestro trabajo</p>
			<div class="fila">
				<?php 
					$k = 0;
					for($i=0;$i<3;$i++){
						echo "<div class='columna'>";
						for ($j=0; $j<2; $j++){
							echo "<img src='".$imagenes[$k]."' onclick='onClick(this)' class='w3-hover-opacity imgGallery' title='HDF Imagen'>";
							$k++;
						}
						echo "</div>";
					} 
				?>
			</div>
		</div>

		<!-- MODAL -->

		<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
			<span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Cerrar imagen">×</span>
			<div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
				<img id="img01" class="w3-image">
				<p id="caption" class="w3-opacity w3-large"></p>
			</div>
		</div>
		<br>


		<!-- Contacto -->
		<div class="w3-container w3-light-grey" style="padding: 128px 16px" id="contacto">
			<h3 class="w3-center titulo"> CONTACTO </h3>
			<p class="w3-center w3-large"> Mantengámonos en contacto. Mandanos un mensaje: </p>
			<div class="w3-row-padding" style="margin-top: 64px">
				<div class="w3-half">
					<p>
						<i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>
						Rosario, Santa Fe, Argentina
					</p>
					<p>
						<i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i>
						Tel: 341 - 153222351 (Matias) <i class="fa fa-whatsapp"></i> / 341 - 155963863 (Federico)
					</p>
					<p>
						<i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"></i>
						Email: esgrimaherederosdefierro@gmail.com
					</p>
					<br>
					<form action="PAGES/contacto.php" method="post" target="#contacto">
						<p>
							<input class="w3-input w3-border" type="text" placeholder="Nombre" required name="nombre">
						</p>
						<p>
							<input class="w3-input w3-border" type="email" placeholder="E-Mail" required name="email">
						</p>
						<p>
							<input class="w3-input w3-border" type="text" placeholder="Asunto" required name="asunto">
						</p>
						<p>
							<input class="w3-input w3-border" type="text" placeholder="Mensaje" required name="mensaje">
						</p>
						<p>
							<button class="w3-button w3-black" type="submit" id="submit" name="submit">
								<i class="fa fa-paper-plane"></i> ENVIA MENSAJE
							</button>
						</p>		
					</form>
				</div>
				<div class="w3-half">
					<!--- AGREGO EL MAPA DE GOOGLE -->
					<div class="w3-grayscale-max" style="width: 100%; height: 510px;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1673.9814637716947!2d-60.63281168465578!3d-32.95198817257109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab032e1f8363%3A0xf017117ab22e1d26!2sCENTRO+de+la+TRADICION+EL+HORNERO!5e0!3m2!1ses-419!2sar!4v1536031528449" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

		<!-- FOOTER -->
		<footer class="w3-center w3-black w3-padding-64">
			<a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Hacia arriba</a>
			<div class="w3-xlarge w3-section">
				<a href="https://www.facebook.com/Esc-de-Esgrima-Criolla-Herederos-de-Fierro-Rosario-2062898703924256" class="fa fa-facebook-official w3-hover-opacity w3-small-button" style="text-decoration-line: none;"></a>
				<!--<i class="fa fa-instagram w3-hover-opacity"></i>
				<i class="fa fa-twitter w3-hover-opacity"></i>
				<i class="fa fa-blogger w3-hover-opacity"></i>-->
				<a href="https://www.youtube.com/channel/UCQmzk_KscukWu-_SdCJBQRQ" class="fa fa-youtube-square w3-hover-opacity" style="text-decoration-line: none;"></a>
			</div>
			<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
			<p>Developed by Matias Allegranza</p>
			<p>&copy Herederos de Fierro - v.2.0</p>
		</footer>


		<!-- scripts mios -->
		
		<script type="text/javascript" src="JS/barrasLateral.js"></script>
		<script type="text/javascript" src="JS/googleMap.js"></script>
		<script type="text/javascript" src="JS/modal.js"></script>
		<!-- script que uso para el google Maps -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACEBryZBDeHjblmPrntkdsIR1v-Fwf-T4&callback=myMap"></script>
	</body>
</html>