<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage</title>
</head>
<body>
    <h1>Questions importées</h1>
    <?php
    $bdd = new PDO("mysql:host=mysql-utoplion.alwaysdata.net;dbname=utoplion_13;charset=utf8","utoplion","databaselion");
    $requete = "SELECT * FROM importQuestionMBI";
    $resultat = $bdd->prepare($requete);
    $resultat->execute();
    $table = $resultat->fetchAll();

    echo "<ol>";
    foreach($table as $element){
        echo "<li class='second'>".$element['question']."</li>";
    }
    echo "</ol>";  
    ?>
    
</body>
</html>