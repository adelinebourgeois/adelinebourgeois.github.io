<?php

require '../PHP/Controller/ProjetController.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio</title>
		<meta charset= "utf-8" />
   		<meta name="description" content="Mon portfolio"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<div id="header">
			<div class="content">
				<h1>Bourgeois Adeline</h1>
				<a href="../index.html" class="accueil">Accueil</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clap"></div>
			<?php
			foreach ($project as $value) {?>
			<div class="conteneur">
				<div class="project">
					<img width='900px' src='../screen/<?php echo $value['screen'];?>'>
					<div class="description">	
						<p><?php echo $value['title'];?></p>
						<p><?php echo $value['description'];?></p>
					</div>
					<div class="clear"></div>
				</div>
			</div>			
			<?php
			}
		
			?>
		<div class="clap"></div>
	</body>
</html>
				