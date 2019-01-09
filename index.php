<?php
    require 'class/Concession.php';
    try{
        $strConnexion = 'mysql:host=localhost;dbname=concession';
        $pdo = new PDO($strConnexion, 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e){
        $message = 'ERREUR PDO dans' . $e->getFile() . ' L.' .$e->getLine() .' : '.
            $e->getMessage();

        die($message);
    }

//    $sql_insert = "INSERT INTO `vehicules` (`id`, `modele`, `marque`, `couleur`, `prix`)
//VALUES (NULL, '206', 'Peugeot', 'Noir', 370);";
//
//    $rep = $pdo->exec($sql_insert);

    Concession::addVehicle($pdo);

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="assets/css/style.css">
</head>
<body>
    <h1>Concession Adrec</h1>



</body>
</html>

