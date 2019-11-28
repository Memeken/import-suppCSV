<?php 

$databasehost = "mysql-utoplion.alwaysdata.net"; 
$databasename = "utoplion_13"; 
$databasetable = "importQuestionMBI"; 
$databaseusername="utoplion"; 
$databasepassword = "databaselion"; 

try {
    $conn = new PDO("mysql:host=$databasehost;dbname=$databasename", $databaseusername, $databasepassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM $databasetable";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Vous avez supprimé toutes les questions"."<br>";
    echo "Vous allez être redirigé sur le site dans 5 secondes...";
    header('Refresh: 5; URL=menuAdminCSV.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>
