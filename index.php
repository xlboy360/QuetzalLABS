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
	<!--<script src="js/jquery.easydropdown.js"></script>-->
	<!--start slider -->
	<link rel="stylesheet" href="css/fwslider.css" media="all">
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/fwslider.js"></script>
	<!--end slider -->
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
	
	<div class="banner">
		<!-- start slider -->
		<div id="fwslider">
			<div class="slider_container">
				<div class="slide">
					<!-- Slide image -->
					<img src="images/slider1.jpg" class="img-responsive" alt="" />
					<!-- /Slide image -->
					<!-- Texts container -->
					<div class="slide_content">
						<div class="slide_content_wrap">
							<!-- Text title -->
							<h1 class="title">Quetzal<br>LABS</h1>
							<!-- /Text title -->
							<div class="button"><a href="#">Adentrate en el tech world</a></div>
						</div>
					</div>
					<!-- /Texts container -->
				</div>
				<!-- /Duplicate to create more slides -->
				<div class="slide">
					<img src="images/slider2.jpg" class="img-responsive" alt="" />
					<div class="slide_content">
						<div class="slide_content_wrap">
							<h1 class="title">Quetzal<br>LABS</h1>
							<div class="button"><a href="#">Adentrate en el tech world</a></div>
						</div>
					</div>
				</div>
				<!-- /Duplicate to create more slides -->
				<div class="slide">
					<img src="images/slider3.jpg" class="img-responsive" alt="" />
					<div class="slide_content">
						<div class="slide_content_wrap">
							<h1 class="title">Quetzal<br>LABS</h1>
							<div class="button"><a href="#">Adentrate en el tech world</a></div>
						</div>
					</div>
				</div>
				<!-- /Duplicate to create more slides -->
				<div class="slide">
					<img src="images/slider4.jpg" class="img-responsive" alt="" />
					<div class="slide_content">
						<div class="slide_content_wrap">
							<h1 class="title">Quetzal<br>LABS</h1>
							<div class="button"><a href="#">Adentrate en el tech world</a></div>
						</div>
					</div>
				</div>
				<!--/slide -->
			</div>
			<div class="timers"></div>
			<div class="slidePrev"><span></span></div>
			<div class="slideNext"><span></span></div>
		</div>
		<!--/slider -->
	</div>
	<div class="main">
		<div class="content-top">
			<h2>Lo más vendido</h2>
			<div class="close_but"><i class="close1"> </i></div>
			<ul id="flexiselDemo3">
				<li><img src="images/img1.jpg" /></li>
				<li><img src="images/img2.jpg" /></li>
				<li><img src="images/img3.jpg" /></li>
				<li><img src="images/img4.jpg" /></li>
				<li><img src="images/img5.jpg" /></li>
			</ul>
			<h3>Componentes exclusivos para tu PC</h3>
			<script type="text/javascript">
				$(window).load(function () {
					$("#flexiselDemo3").flexisel({
						visibleItems: 5,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
						responsiveBreakpoints: {
							portrait: {
								changePoint: 480,
								visibleItems: 1
							},
							landscape: {
								changePoint: 640,
								visibleItems: 2
							},
							tablet: {
								changePoint: 768,
								visibleItems: 3
							}
						}
					});

				});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<div class="content-bottom">
		<div class="container">
			<div class="row content_bottom-text">
				<div class="col-md-7">
					<h3>Sabemos lo que quieres<br>Te daremos lo que necesitas.</h3>
					<p class="m_1">
						Sabemos cuán difícil puede ser encontrar la computadora que realmente necesitas. En un mercado
						enfocado mayormente en el gamming, se pierde la nosión de que muchas personas necesitan algo no
						tan "lujoso", sino, algo que les permita realizar su trabajo en el día a día bajo esta nueva
						normalidad.
						En Quetzal LABS podemos ayudarte a obtener la computadora que requieres o los componentes
						ideales para que la puedas crear a tu gusto.
					</p>
					<p class="m_2">
						Sin embargo, también consideramos a nuestros clientes gamming, a todos aquellos experimentados
						que buscan darle un upgrade a su set-up, o a quienes apenas comienzan en este mundo de los
						juegos en computadora. No pierdas más tiempo y COMPRA AHORA!
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="features">
		<div class="container">
			<h3 class="m_3">Coolaboradores</h3>
			<div class="close_but"><i class="close1"> </i></div>
			<div class="row">
				<div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="https://www.corsair.com/lm/es/" target="_blank">
							<img src="images/pic1.jpg" class="img-responsive" alt="" />
							<div class="mask mask-1"> </div>
							<div class="mask mask-2"> </div>
							<div class="content">
								<h2>Conocelos</h2>
							</div>
						</a> </div>
					<h4 class="m_4"><a href="https://www.corsair.com/lm/es/" target="_blank">Corsair</a></h4>
					<p class="m_5">Top mundial en Gaming</p>
				</div>
				<div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="http://ocelot.com.mx/" target="_blank">
							<img src="images/pic2.jpg" class="img-responsive" alt="" />
							<div class="mask mask-1"> </div>
							<div class="mask mask-2"> </div>
							<div class="content">
								<h2>Conocelos</h2>
							</div>
						</a> </div>
					<h4 class="m_4"><a href="http://ocelot.com.mx/" target="_blank">Ocelot Gamming</a></h4>
					<p class="m_5">Empresa 100% Mexicana</p>
				</div>
				<div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="https://www.hyperxgaming.com/latam" target="_blank">
							<img src="images/pic3.jpg" class="img-responsive" alt="" />
							<div class="mask mask-1"> </div>
							<div class="mask mask-2"> </div>
							<div class="content">
								<h2>Conocelos</h2>
							</div>
						</a> </div>
					<h4 class="m_4"><a href="https://www.hyperxgaming.com/latam" target="_blank">HyperX</a></h4>
					<p class="m_5">Top mundial en la industria de las computadoras</p>
				</div>
				<div class="col-md-3 top_box1">
					<div class="view view-ninth"><a href="https://www.nvidia.com/es-la/" target="_blank">
							<img src="images/pic4.jpg" class="img-responsive" alt="" />
							<div class="mask mask-1"> </div>
							<div class="mask mask-2"> </div>
							<div class="content">
								<h2>Conocelos</h2>
							</div>
						</a> </div>
					<h4 class="m_4"><a href="https://www.nvidia.com/es-la/" target="_blank">NVIDIA</a></h4>
					<p class="m_5">It's meant to be played</p>
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