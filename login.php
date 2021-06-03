<!--
-->
<!DOCTYPE HTML>
<html>

<?php require_once "./menu.html" ?>

<head>
	<title>QuetzalLab</title>
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
				<div class="col-md-6">
					<div class="login-page">
						<h4 class="title">Nuevos clientes</h4>
						<p>Agradecémos infinitamente su preferencia y la oportunidad de que formemos parte en la
							experiencia tech de sus vidas. Este, al igual que para nosotros, es su hogar, su taller para
							construir la máquina de sus sueños. ¡Bienvenidos!</p>
						<div class="button1">
							<a href="register.html"><input type="submit" name="Submit" value="Crear una cuenta nueva"></a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="login-title">
						<h4 class="title">Iniciar sesión.</h4>
						<div id="loginbox" class="loginbox">
							<form action="php/login.php" method="post" name="login" id="login-form">
								<fieldset class="input">
									<p id="login-form-username">
										<label for="modlgn_username">Email</label>
										<input id="modlgn_username" type="text" name="email" class="inputbox" size="18"
											autocomplete="off">
									</p>
									<p id="login-form-password">
										<label for="modlgn_passwd">Contraseña</label>
										<input id="modlgn_passwd" type="password" name="password" class="inputbox"
											size="18" autocomplete="off">
									</p>
									<div class="remember">
										<p id="login-form-remember">
											<label for="modlgn_remember"><a href="#">¿Olvidaste tu contraseña?
												</a></label>
										</p>
										<input type="submit" name="Submit" class="button" value="Login">
										<div class="clear"></div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					<div class="clear"></div>
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
						<li><a href="index.html">Quienes somos</a></li>
						<li><a href="team.html">Miembros</a></li>
						<li><a href="#">Quetzal</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Soporte al cliente</h4>
						<li><a href="contact.html">Contacto</a></li>
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