
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
					<h3>Contáctanos</h3>
					<h4>Agenda una entrevista hoy</h4>
				</div><!--pager-pag end-->
			</div>
		</section><!--pager-sec end-->


		<section>
			<div class="block no-padding">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8414062199827!2d-74.17890591336239!3d4.622368531541657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9e7b8c4512ef%3A0x2f9f49f6f5f0fb9e!2sjardin%20infantil%20sala%20cuna%20bebelandia!5e0!3m2!1ses-419!2sco!4v1643994262846!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</section>


		<section class="block6 no-padding">
			<div class="fixed-bg bg8"></div>
			<div class="container">
				<div class="contact-info-pg">
					<div class="row">
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<div class="our-address-info">
								<h3 class="title-hd">Bebelandia Kids</h3>
								<ul>
									<li>
										<span><i class="fa fa-home"></i></span>
										<p>Calle 52A Sur #83-24, Barrio Villa Andrea, Bogotá <br>
											Carrera 85 #52A-33, Barrio Amarú, Bogotá</p>
									</li>
									<li>
										<span><i class="fa fa-phone"></i></span>
										<p>6017149118</br>
										6017231473</p>
									</li>
									<li>
										<span><i class="fa fa-envelope"></i></span>
										<p>info@bebelandiakids.edu.co</p>
									</li>
									<li>
										<span><i class="fa fa-globe"></i></span>
										<p>bebelandiakids.edu.co</p>
									</li>
								</ul>
							</div><!--our-address-info end-->
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="block3">
			<div class="fixed-bg bg9"></div>
			<div class="container">
				<div class="enquiry-sec">
					<div class="heading clr">
						<h3>Formulario de contacto</h3>
						<p>A través de nuestro formulario nos podrás enviar todas tus inquietudes, te responderemos en un tiempo muy breve </p>
					</div><!--heading end-->
					<div class="contact_sec">
						<form>
							<div class="row">
								<div class="col-lg-6">
									<div class="input-field">
										<input type="text" name="name" placeholder="Nombre">
									</div><!--input-field end-->
									<div class="input-field">
										<input type="text" name="email" placeholder="Email">
									</div><!--input-field end-->
									<div class="input-field">
										<input type="text" name="subject" placeholder="Asunto">
									</div><!--input-field end-->
								</div>
								<div class="col-lg-6">
									<div class="input-field">
										<textarea placeholder="Mensaje"></textarea>
									</div>
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
<script type="text/javascript" src="js/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz_wbof2YjIGhjGIHAY3a34lXlqptcFiw&callback=initMap"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>