<!DOCTYPE html>
<html>
<head>
	<title>Model</title>
	<link rel="stylesheet" type="text/css" href="css/site.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="site">
		<div id="haut">
			<div id="logo">
				
			</div>
			
			<div id="banniere">
				
			</div>
		</div>
		<div id="menu_h"> 
			<ul>
				<li> <a href="index.php">Accueil</a> </li> |
				<li> <a href="index.php?page=LClasse">Classe</a> </li> |
				<li> <a href="index.php?page=LEtudiant">Etudiant</a> </li> |
				<li> <a href="#">Recherche</a> 
					<ul>
						<li> <a href="index.php?page=FRechercheParMatricule">Par Matricule</a></li>
						<li> <a href="index.php?page=FRechercheParClasse">Par Classe</a></li>
					</ul>
				</li> 
			</ul>
		</div>
		<div id="corps">
		
			 <?php
				include_once('Traitement/DbMgr.php');
			 	if (isset($_GET['page'])) {
			 		$page = $_GET['page'];
			 		include($page.'.php');
			 	}
			 ?>
		 
		</div>

		<div id="pied">
			&copy; LIAGE 2017 -ISI 
		</div>

	</div>
</body>
</html>