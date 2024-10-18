<?php
require_once('../models/db.php');
require_once('../models/model-category.php'); // Adjusted path

// Establish database connection
$bdd = connexionBDD();

if (!empty($_POST)) {
    $nom = $_POST['nom'];
    $desc = $_POST['desc'];
    var_dump($_POST);

    if (strlen($nom) > 0) {
        // Create a new CategoryModel instance
        $categoryModel = new CategoryModel();

        // Add category to the database
        $categoryModel->AddCat($nom, $desc);

        echo "Category added successfully!";
        
        // Redirect to admin-sub-category.php (use absolute URL or relative path)
        header('Location: ../views/admin-sub-category.php');
        exit; // Ensure no further code executes
    } else {
        echo "Please provide a category name.";
        
        // Redirect to admin-sub-category.php
        header('Location: ../views/admin-sub-category.php');
        exit;
    }

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

}
?>
