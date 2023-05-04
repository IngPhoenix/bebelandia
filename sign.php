
<!DOCTYPE html>
<?php
	include('header.php');
	require('menu.php');
	showMenu(true);
?>

<body>
	<div class="wrapper">
		
		
		<section class="pager-sec">
			<div class="container">
				<div class="pager-pag">
					<h3>Plataforma Virtual</h3>
					<h4>Realiza el seguimiento de aprendizaje de tu hijo</h4>
				</div><!--pager-pag end-->
			</div>
		</section><!--pager-sec end-->

		<section class="block3">
			<div class="fixed-bg bg9"></div>
			<div class="container">
				<div class="enquiry-sec">
					<div class="heading clr">
						<h3>Ingreso a la plataforma</h3>
						<p>Los datos de acceso serán suministrados por la dirección</p>
					</div><!--heading end-->
					<div class="contact_sec">
						<form>
							<div class="row">
								<div class="col-lg-12">
									
									<div class="input-field">
										<input type="text" name="email" placeholder="Correo electrónico">
									</div><!--input-field end-->
									<div class="input-field">
										<input type="password" name="password" placeholder="Contraseña">
									</div><!--input-field end-->
								</div>
								
								<div class="col-lg-12">
									<div class="btn-submit">
										<button type="submit">Enviar</button>
									</div><!--btn-submit end-->
								</div>
							</div>
						</form>
					</div><!--contact_sec end-->
				</div><!--enquiry-sec end-->
			</div>
		</section>

<?php
	include 'footer.php';
	
?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>