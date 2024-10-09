<?php

try {
    $dsn = 'mysql:host=193.203.168.103;dbname=u126908064_pixel_plush';
    $username = 'u126908064_pixel_plush';
    $password = 'Plateformeur_13';

    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}


?>