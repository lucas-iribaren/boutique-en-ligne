<header class="flex space-between center vertical-center">
    <div class="burger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <a href="#">Panier
        <img class="hw-50px" src="assets/images/panier.png" alt="panier logo">
    </a>
    <a href="">Rechercher
        <img class="hw-50px" src="assets/images/loupe.png" alt="loupe logo">
    </a>
    <a href="index.php">
        <img src="assets/images/logo.png" class="logo" alt="logo">
    </a>
    <h1 class="hide">Pixel Plush</h1>
    <nav class="flex space-center vertical-center gap">
        <input class="hide" type="text" placeholder="Rechercher">
        <a class="hide" href="#">
            <img class="hw-50px" src="assets/images/panier.png" alt="panier logo">
            Panier
        </a>
        <a class="flex column vertical-center" href="#">
            <img class="hw-50px" src="assets/images/utilisateur.png" alt="utilisateur logo">
            <?php
            if (isset($_SESSION['user'])) {
                echo "Bonjour" . $_SESSION['user']['prenom'];
            } else {
                echo 'Connexion';
            }
            ?>
        </a>
    </nav>
</header>