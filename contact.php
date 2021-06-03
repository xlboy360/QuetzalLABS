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
				<div class="row">
					<div class="col-md-7">
						<div class="map">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.945885698362!2d-99.06258568557169!3d19.32815434902169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce026307a050d7%3A0x131b54122598da98!2sJesus%20Garibay%2059%2C%20Presidentes%20de%20M%C3%A9xico%2C%20Iztapalapa%2C%2009760%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1622236112586!5m2!1ses-419!2smx"
								width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
					<div class="col-md-5">
						<p class="m_8">
							Quetzal LABS es su casa, sientanse bienvenidos para solucionar dudas, discutir cuestiones
							sobre la plataforma o simplemente pasar el rato.
						</p>
						<div class="address">
							<p>Calle Jesús Garibay 59 Mz-22 Lt-1,</p>
							<p>Iztapalapa, CDMX</p>
							<p>MEXICO</p>
							<p>Teléfono: (55) 8337 3517</p>
							<p>Email: <span>support[at]gmail.com</span></p>
							<p>Siguenos en: <span>Facebook</span>, <span>Twitter</span></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 contact">
						<form method="post" action="contact-post.html">
							<div class="to">
								<input type="text" class="text" value="Name" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'Name';}">
								<input type="text" class="text" value="Email" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'Email';}">
								<input type="text" class="text" value="Subject" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'Subject';}">
							</div>
							<div class="text">
								<textarea value="Message:" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
								<div class="form-submit">
									<input name="submit" type="submit" id="submit" value="Submit"><br>
								</div>
							</div>
							<div class="clear"></div>
						</form>
					</div>
				</div>
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
						<li><a href="#">Garantías</a></li>
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
					<p>© 2021 Quetzal Technology <a href="#" target="_blank">Quetzal Technology</a></p>
				</div>
				<!-- <dl id="sample" class="dropdown">
					<dt><a href="#"><span>Change Region</span></a></dt>
					<dd>
						<ul>
							<li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span
										class="value">AS</span></a></li>
							<li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span
										class="value">SL</span></a></li>
							<li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span
										class="value">NZ</span></a></li>
							<li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span
										class="value">Pk</span></a></li>
							<li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span
										class="value">UK</span></a></li>
							<li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span
										class="value">US</span></a></li>
						</ul>
					</dd>
				</dl> -->
			</div>
		</div>
	</div>
</body>

</html>