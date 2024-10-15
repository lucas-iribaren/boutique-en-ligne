<?php 
include_once(__DIR__ . "/../../include/_head.php");
include_once(__DIR__ . "/../../include/_header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
</head>
<body>
    <section class="container">
            <section class="section">
                <img src="../../assets/images/placeholder.png" alt="Image" style="max-width: 100%; border-radius: 5px;">
            </section>
            
            <section class="section">
                <textarea name="desc" id="desc" rows="4" placeholder="Description"></textarea>
            </section>
        </section>
        <section class="container">
            <section class="section">
                <img class="logo" src="../../assets/images/logo.png" alt="" srcset="">
                <label for="categories">Nom de Categories</label>
                <input type="text" id="categories" placeholder="Name">
            </section>
            
            <section class="section">
                <label for="tendances">Tendances</label>
                <input type="text" id="tendances" placeholder="Search">
            </section>
            
            <section class="section">
                <label for="tags">Tags</label>
                <input type="text" id="tags" placeholder="Name">
            </section>
            
            <button class="btn-ajouter" type="submit">Valider</button>
    </section>
</body>
</html>
