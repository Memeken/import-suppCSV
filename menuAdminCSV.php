
<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Admin</title>
</head>
<body>
<br>
	<div class="head">
		<div class="LOGO">
			<img class="logo" src="IMG_0168.jpg" alt="logoCorpScan" width="10%" >
		</div>	
		<div class='NAME'>
			<br>
			<br>
			<h1>CORPSCAN</h1>
		</div>
		<div class="Menu">
			<br>
			<br>
			<br>
			<ul> <!-- Menu de navigation -->
				<li class="first"><a href="?Acceuil">ACCUEIL</a></li>
				<li class="first"><a href="?Test">QUESTIONS MBI</a></li>
				<li class="first"><a href="?Documentation">DOCUMENTATION</a></li>
				<li class="first"><a href="?Stats">STATS</a></li>
				<li class="first"><a href="?Contact">CONTACT</a></li>
			</ul>
		</div>
		<br>
		<div class="import">
			<h3>Veuillez insérer votre fichier *.csv : </h3>
				<form method="post" enctype="multipart/form-data" action="csvImport.php">
						<input type="file" name="userfile" value="table">
						<input type="submit" name="submit" value="Importer">
				</form>
			<div class="questions">
				<form method="get" action="">
				<input type="submit" name="visual" value="Visualiser les questions">
				</form>
			</div>
		</div>
		<!-- Trigger/Open The Modal -->
		<button id="myBtn">Exemple fichier CSV</button>
		<!-- The Modal -->
		<div id="myModal" class="modal">
		<!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<p> <strong>Warning! </strong> <br> Ne pas insérer des ";" dans les questions ni des doubles guillemets.<br>
				Suivre l'exemple du modèle ci-dessous pour l'enregistrement de votre fichier CSV.</p>
				<img src="modèleCSV.png" alt="modèle" width="80%">
			</div>
		</div>
		<div>
			<?php
				if (isset($_GET['visual'])) {
					include('affichebdd.php');
				}
			?>
		</div>
		<div class="delete">
			<form method="post" action="deleteQuestions.php">
				<input type="submit" name="delete" value="Supprimer les questions">
			</form>
		</div>		
	</div>
<script type="text/javascript" src="csvImport.js"></script>
</body>
</html>