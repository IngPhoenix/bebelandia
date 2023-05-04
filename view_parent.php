
<!DOCTYPE html>
<?php
	include('header.php');
	require('menu.php');
	showMenu(true);
?>

<body>
	<div class="wrapper">
		
	<section class="block2">
	    	<div class="fixed-bg bg1"></div>
	    	<div class="container">
	    		<div class="descp-sec">
	    			<h3>Plataforma de comunicaciones</h3>	
            	
	    		</div><!--descp-sec end-->
	    	</div>
	</section> <!--END MAIN TITLE-->
<p>Bienvenido <span> @nombres @apellido</span></p>		
	<section class="block">
    <?php include("inbox_table.php"); ?>
	</section> <!--END CONTENT-->

<?php	include 'footer.php';?>

<script type="text/javascript" src="js/script.js"></script>
<script>
  $(document).ready(function() 
  {	
    console.log("ready");
  });
</script>
</body>
</html>