<?php
try {

    $pdo = new PDO("mysql:host=localhost:3308;dbname=gestion_stag",
        "root", "root");

}catch (Exception $e){
    die('Erreur : ' . $e->getMessage());

    //die('Erreur : impossible de se connecter à la base de donnée');
}
?>

