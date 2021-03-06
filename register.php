<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<?php require_once "./menu.html" ?>

<head>
	<title>Quetzal Labs</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$(".dropdown img.flag").addClass("flagvisibility");

			$(".dropdown dt a").click(function () {
				$(".dropdown dd ul").toggle();
			});

			$(".dropdown dd ul li a").click(function () {
				var text = $(this).html();
				$(".dropdown dt a span").html(text);
				$(".dropdown dd ul").hide();
				$("#result").html("Selected value is: " + getSelectedValue("sample"));
			});

			function getSelectedValue(id) {
				return $("#" + id).find("dt a span.value").html();
			}

			$(document).bind('click', function (e) {
				var $clicked = $(e.target);
				if (!$clicked.parents().hasClass("dropdown"))
					$(".dropdown dd ul").hide();
			});


			$("#flagSwitcher").click(function () {
				$(".dropdown img.flag").toggleClass("flagvisibility");
			});
		});
	</script>
</head>

<body>
	
	<div class="main">
		<div class="shop_top">
			<div class="container">
				<form name="register" method="post" action="php/registrar.php">
					<div class="register-top-grid">
						<h3>Informacion Personal</h3>
						<div>
							<span>Nombre(s)<label>*</label></span>
							<input type="text" name="nombre">
						</div>
						<div>
							<span>Apellidos<label>*</label></span>
							<input type="text" name="apellido">
						</div>
						<div>
							<span>Usuario<label>*</label></span>
							<input type="text" name="usuario">
						</div>
						<div>
							<span>Correo Electronico<label>*</label></span>
							<input type="text" name="mail">
						</div>
						<div class="clear"> </div>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i>
								</i>Suscribirse a nuestro Newsletter</label>
						</a>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<div class="register-bottom-grid">
						<h3>Privacidad de usuario</h3>
						<div>
							<span>Contrase??a<label>*</label></span>
							<input type="text" name="pass1">
						</div>
						<div>
							<span>Confirmar Contrase??a<label>*</label></span>
							<input type="text" name="pass2">
						</div>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<input type="submit" value="Enviar">
				</form>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Productos</h4>
						<li><a href="#">Gamming</a></li>
						<li><a href="#">Escritorio</a></li>
						<li><a href="#">Perifericos</a></li>
						<li><a href="#">Accesorios</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Sobre nosotros</h4>
						<li><a href="#">Quienes somos</a></li>
						<li><a href="#">Miembros</a></li>
						<li><a href="#">Quetzal</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Soporte al cliente</h4>
						<li><a href="#">Contacto</a></li>
						<li><a href="#">Rastrea tu envio</a></li>
						<li><a href="#">Devoluciones</a></li>
						<li><a href="#">Garant??as</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Newsletter</h4>
						<div class="footer_search">
							<form>
								<input type="text" value="Ingresa tu correo" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'Ingresa tu correo';}">
								<input type="submit" value="Suscribirse">
							</form>
						</div>
						<ul class="social">
							<li class="facebook"><a href="#"><span> </span></a></li>
							<li class="instagram"><a href="#"><span> </span></a></li>
						</ul>
					</ul>
				</div>
			</div>
			<div class="row footer_bottom">
				<div class="copy">
					<p>?? 2021 Quetzal Technology <a href="#" target="_blank">Quetzal Technology</a></p>
				</div>
				<!--	  <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Change Region</span></a></dt>
				        <dd>
				            <ul>
				                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
				                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
				                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
				                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
				                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
				                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
				            </ul>
				         </dd>
	   				  </dl>-->
			</div>
		</div>
	</div>
</body>

</html>