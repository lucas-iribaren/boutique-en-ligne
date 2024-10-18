<?php
session_start();
require_once "includes/_head.php";
require_once "includes/_header.php";
?>

<?php


   $page = isset($_GET['page']) ? $_GET['page'] : 'home';

   $file = __DIR__ . "/templates/" . $page . ".php";

   
   if (file_exists($file)) {
       require_once($file);
   } else {
       require_once (__DIR__. "/templates/error404.php");
   }
   ?>

require_once "includes/_footer.php";
?>