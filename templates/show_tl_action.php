<?php 

include("../lib/db.php");
include("../lib/crud.php");

// datos del TL (encabezado)
$idTL = $_GET['idTL'];
$nameTL = $_GET['nameTL'];
$year = $_GET['year'];

$muestraTL = new CRUD;
$event = $muestraTL->countEv();

?>


<!DOCTYPE html>
<head>
	<title>Show TL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/timeline.css" type="text/css">
</head>
<body>
	<header>
		<div class="container">
			<h1><?= $nameTL; ?></h1>
		</div>
	</header>
	
	<section>
		<div class="container">
		<div id="timeline">
			<div class="tl-block">
				<div class="tl-year">
					<div><?= $year; ?></div>
				</div><!-- /. tl-year -->
			</div><!-- /. tl-block -->


			<?php $izq = false; $der = true; ?> 
			<?php foreach($event as $evento): ?>
			<?php   if($izq == false && $der == true) { ?>

			<div class="tl-block">
				<div class="tl-event">

					<div class="event-l">
						<div>
							<h3><time><?= $evento->fecha; ?></time> <?= $evento->name; ?></h3>
							<p><?= $evento->descrip.' '; ?> -- <?= ' '.$evento->links; ?></p>
							<?php $izq = true; $der = false; ?>

						</div>
					</div>

				</div><!-- /. tl-event -->
			</div><!-- /. tl-block -->

			<?php } else { ?>			


			<div class="tl-block">
				<div class="tl-event">
	
					<div class="event-r">
						<div>
							<h3><time><?= $evento->fecha; ?></time> <?= $evento->name; ?></h3>
							<p><?= $evento->descrip.' '; ?> -- <?= ' '.$evento->links; ?></p>
							<?php $izq = false; $der = true; ?>
						</div>
					
					</div>	 
				</div><!-- /. tl-event -->
			</div><!-- /. tl-block -->

			<?php } ?>
			<?php endforeach; ?>
			
			</div><!-- /. timeline -->
		</div><!-- /. container -->
	</section>
	
	<footer>
		<div class="container">
			<p>Based upon CSS Responsive Timeline by Eduonix Learning Solutions (2014)</p>
		</div>
	</footer>
</body>
</html>


