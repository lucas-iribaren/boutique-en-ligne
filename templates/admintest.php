<?php

require_once "classes/Utilisateur.php";
require_once "classes/Database.php";

$prenom = "Lucas";
$nom = "Iribaren";
$email = "lucas.iribaren@gmail.io";
$mot_de_passe = "azertyuiop";

$mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

$utilisateur = new Utilisateur();

$utilisateur->register($prenom, $nom, $email, $mot_de_passe_hash);
