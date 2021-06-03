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
				<div class="row shop_box-top">
					<div class="col-md-3 shop_box"><a href="single.html">
							<img src="images/tt1.jpg" class="img-responsive" alt="" />
							<span class="new-box">
								<span class="new-label">New</span>
							</span>
							<span class="sale-box">
								<span class="sale-label">Sale!</span>
							</span>
							<div class="shop_desc">
								<h3><a href="#" >aliquam volutp</a></h3>
								<p>Lorem ipsum consectetuer adipiscing </p>
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span><br>
								<ul class="buttons">
								<input type="hidden" id="producto" value="aliquam volutp">
								<input type="hidden" id="precio" value="$12.00">
									<li class="cart"><a onclick="carrito(1);">Add To Cart</a></li>
									<li class="shop_btn"><a href="#">Read More</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</a></div>
					<div class="col-md-3 shop_box"><a href="single.html">
							<img src="images/tt2.jpg" class="img-responsive" alt="" />
							<span class="new-box">
								<span class="new-label">New</span>
							</span>
							<div class="shop_desc">
								<h3><a href="#">aliquam volutp</a></h3>
								<p>Lorem ipsum consectetuer adipiscing </p>
								<span class="actual">$12.00</span><br>
								<ul class="buttons">
									<li class="cart"><a href="#">Add To Cart</a></li>
									<li class="shop_btn"><a href="#">Read More</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</a></div>
					<div class="col-md-3 shop_box"><a href="single.html">
							<img src="images/tt3.jpg" class="img-responsive" alt="" />
							<span class="new-box">
								<span class="new-label">New</span>
							</span>
							<span class="sale-box">
								<span class="sale-label">Sale!</span>
							</span>
							<div class="shop_desc">
								<h3><a href="#">aliquam volutp</a></h3>
								<p>Lorem ipsum consectetuer adipiscing </p>
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span><br>
								<ul class="buttons">
									<li class="cart"><a href="#">Add To Cart</a></li>
									<li class="shop_btn"><a href="#">Read More</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</a></div>
					<div class="col-md-3 shop_box"><a href="single.html">
							<img src="images/tt4.jpg" class="img-responsive" alt="" />
							<span class="new-box">
								<span class="new-label">New</span>
							</span>
							<div class="shop_desc">
								<h3><a href="#">aliquam volutp</a></h3>
								<p>Lorem ipsum consectetuer adipiscing </p>
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span><br>
								<ul class="buttons">
									<li class="cart"><a href="#">Add To Cart</a></li>
									<li class="shop_btn"><a href="#">Read More</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</a></div>
				</div>
				<div class="row">
					<div class="col-md-3 shop_box"><a href="single.html">
							<img src="images/tt8.jpg" class="img-responsive" alt="" />
							<span class="new-box">
								<span class="new-label">New</span>
							</span>
							<div class="shop_desc">
								<h3><a href="#">aliquam volutp</a></h3>
								<p>Lorem ipsum consectetuer adipiscing </p>
								<span class="actual">$12.00</span><br>
								<ul class="buttons">
									<li class="cart"><a href="#">Add To Cart</a></li>
									<li class="shop_btn"><a href="#">Read More</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</a></div>
					<div class="col-md-3 shop_box"><a href="single.html">
							<img src="images/tt5.jpg" class="img-responsive" alt="" />
							<span class="new-box">
								<span class="new-label">New</span>
							</span>
							<span class="sale-box">
								<span class="sale-label">Sale!</span>
							</span>
							<div class="shop_desc">
								<h3><a href="#">aliquam volutp</a></h3>
								<p>Lorem ipsum consectetuer adipiscing </p>
								<span class="actual">$12.00</span><br>
								<ul class="buttons">
									<li class="cart"><a href="#">Add To Cart</a></li>
									<li class="shop_btn"><a href="#">Read More</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</a></div>
					<div class="col-md-3 shop_box"><a href="single.html">
							<img src="images/tt6.jpg" class="img-responsive" alt="" />
							<span class="new-box">
								<span class="new-label">New</span>
							</span>
							<div class="shop_desc">
								<h3><a href="#">aliquam volutp</a></h3>
								<p>Lorem ipsum consectetuer adipiscing </p>
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span><br>
								<ul class="buttons">
									<li class="cart"><a href="#">Add To Cart</a></li>
									<li class="shop_btn"><a href="#">Read More</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</a></div>
					<div class="col-md-3 shop_box"><a href="single.html">
							<img src="images/tt7.jpg" class="img-responsive" alt="" />
							<span class="new-box">
								<span class="new-label">New</span>
							</span>
							<span class="sale-box">
								<span class="sale-label">Sale!</span>
							</span>
							<div class="shop_desc">
								<h3><a href="#">aliquam volutp</a></h3>
								<p>Lorem ipsum consectetuer adipiscing </p>
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span><br>
								<ul class="buttons">
									<li class="cart"><a href="#">Add To Cart</a></li>
									<li class="shop_btn"><a href="#">Read More</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</a></div>
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
				<dl id="sample" class="dropdown">
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
				</dl>
			</div>
		</div>
	</div>

	<script src="js/shop.js"></script>
</body>

</html>