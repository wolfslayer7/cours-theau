<?php
/**
 * Created by PhpStorm.
 * User: micfi
 * Date: 08/01/2019
 * Time: 14:45
 */

class Concession
{
    public static function displayAllVehicles($pdo){
        try{
            $sql = "SELECT * FROM vehiculess"; //Ma requete
            $result = $pdo->query($sql); //Effectue la requete SQL et stocke le résultat

            while($data = $result->fetch(PDO::FETCH_OBJ)){
                echo "<pre>";
                print_r($data);
                echo "</pre>";
            }
        }
        catch (PDOException $e){
            echo "Une erreur est survenue, merci de contacter un admin";
        }

    }

    public static function addVehicle($pdo){
        $param = [
            'modele' => 'Clio 5',
            'marque' => 'Renault',
            'couleur' => 'Rouge',
            'prix' => 12500,

        ];

       $sql_insert = "INSERT INTO `vehicules` (`id`, `modele`, `marque`, `couleur`, `prix`)
VALUES (NULL, :modele, :marque, :couleur, :prix);";

       $req = $pdo->prepare($sql_insert); //On prépare la requête
       $req->execute($param); //On execute en envoyant les paramètres

    }


}