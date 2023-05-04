
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Little People</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>


<body>
	<div class="wrapper">
<?php
	require('menu.php');
	showMenu(true);
?>
		<section class="pager-sec">
			<div class="container">
				<div class="pager-pag">
					<h3>PANEL DE COMUNICACIONES</h3>
					
				</div><!--pager-pag end-->
			</div>
		</section><!--pager-sec end-->

		
		<section class="block no-padding">
			<div class="session-rooms"><hr>
				<div class="row">
					<div class="col-lg-3">
						<div class="col-lg-12">
						<a href="#" title="" class="btn btn-default">Nuevo mensaje</a>
						</div>
					</div>
					<div class="col-lg-9">	
						<div  class="col-lg-12">		
					<table>
						<thead>
							<tr>								
								<th>Mensaje</th>
								<th>Categoria</th>
								<th>Fecha</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga sint quo veritatis minus necessitatibus culpa ratione tempore in pariatur eius. Quo nemo, reiciendis eligendi facilis nam non voluptatum in esse!</td>	
								<td>Bitácora</td>
								<td>10-04-2022</td>
							</tr>
							<tr>
								<td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga sint quo veritatis minus necessitatibus culpa ratione tempore in pariatur eius. Quo nemo, reiciendis eligendi facilis nam non voluptatum in esse!</td>
								<td>Boletín</td>
								<td>10-04-2022</td>
							</tr>
							<tr>
								<td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga sint quo veritatis minus necessitatibus culpa ratione tempore in pariatur eius. Quo nemo, reiciendis eligendi facilis nam non voluptatum in esse!</td>
								<td>Bitácora</td>
								<td>09-04-2022</td>
							</tr>
						</tbody>
						
					</table></div>
					</div>
				</div>
			</div><!--session-rooms end-->
		</section>
<?php
	include 'footer.php';
?>

	    <a href="#" title="" class="scrollTop"><i class="fa fa-arrow-up"></i></a>
	</div><!--wrapper end-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>