<?php
  $databasehost = "mysql-utoplion.alwaysdata.net"; 
  $databasename = "utoplion_13"; 
  $databasetable = "importQuestionMBI"; 
  $databaseusername="utoplion"; 
  $databasepassword = "databaselion"; 
  $fieldseparator = ";"; 
  $lineseparator = "\n"; // PHP_EOL
  $csvfile = $_FILES['userfile']['tmp_name'];


  if(!file_exists($csvfile)) 
  {
    die("Fichier non trouvé...");
  }
  try 
  {
    $pdo = new PDO(
                  "mysql:host=$databasehost;dbname=$databasename;charset=utf8", 
                  $databaseusername, 
                  $databasepassword,
                  array
                  (
                    PDO::MYSQL_ATTR_LOCAL_INFILE => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                  )
                  );
  } 
  catch (PDOException $e) 
  {
    die("database connection failed: ".$e->getMessage());
  }
  $affectedRows = $pdo->exec
  (
    "LOAD DATA LOCAL INFILE"
    .$pdo->quote($csvfile)
    ." INTO TABLE `$databasetable` FIELDS TERMINATED BY "
    .$pdo->quote($fieldseparator)
    ." LINES TERMINATED BY "
    .$pdo->quote($lineseparator)
    . "(question)"
  );
  echo "$affectedRows éléments ajoutés du fichier csv dans la table avancement\n"."<br>";
  echo "Vous allez être redirigé sur le site dans 5 secondes...";
  header('Refresh: 5; URL=menuAdminCSV.php');
?>
