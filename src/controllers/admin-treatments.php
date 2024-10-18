<?php
include('../../models/db.php');
include('./model-category.php');
include('./views/admin-sub-category.php'); 

$bdd = connexionBDD();

if (!empty($_POST)) {
    $nom = $_POST['nom'];
    $desc = $_POST['desc'];
    var_dump($_POST);

    if (strlen($nom) > 0) {
        $categoryModel = new CategoryModel($bdd, null, $nom, $desc);
        $categoryModel->AddCat();

        echo "Category added successfully!";
    } else {
        echo "Please provide a category name.";
    }
}
?>
