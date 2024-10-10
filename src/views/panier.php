<?php
$title = 'Mon Panier';
include '_head.php';
?>
<head>
<link rel="stylesheet" href="../../assets/css/styles.css">
<link rel="icon" type="image/x-icon" href="../../assets/images/logo.png">
</head>
<body>
    <?php include '_bandeau.php'; ?>
    <main>
    <section class="section">
            <h2>Panier :</h2>
            <section>
                <input type="checkbox">
                <img src="creeper.png" alt="Peluche creeper">
                <p>Peluche creeper 1 : 13.50€</p>
                <input type="number" value="1" min="1">
                <button class="btn-supprimer">Supprimer</button>
            </section><br>
            <section>
                <input type="checkbox">
                <img src="creeper.png" alt="Peluche creeper">
                <p>Peluche creeper 2 : 13.50€</p>
                <input type="number" value="1" min="1">
                <button class="btn-supprimer">Supprimer</button>
            </section><br>
            <section>
                <input type="checkbox">
                <img src="creeper.png" alt="Peluche creeper">
                <p>Peluche creeper 3 : 13.50€</p>
                <input type="number" value="1" min="1">
                <button class="btn-supprimer">Supprimer</button>
            </section><br>
            <section>
                <p>3 articles dans le panier</p>
                <p>Total de la commande : 27€ (2 articles)</p>
                <button class="btn-ajouter">Valider la commande</button>
            </section>
        </section>
    </main>
    <?php include '_footer.php' ?>
</body>