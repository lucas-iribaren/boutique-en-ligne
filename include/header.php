<header class="flex space-between center vertical-center">
    <a href="index.php">
        <img src="assets/images/logo.png" class="logo" alt="logo">
    </a>
    <h1>Pixel Plush</h1>
    <nav class="flex space-center vertical-center gap">
        <input type="text" placeholder="Rechercher">
        <a href="#">
            <img class="hw-50px" src="assets/images/panier.png" alt="panier logo">
        </a>
        <a href="#">
            <img class="hw-50px" src="assets/images/utilisateur.png" alt="utilisateur logo">
            <span>
                <?php
                if (isset($_SESSION['user'])) {
                    echo "Bonjour" . $_SESSION['user']['prenom'];
                } else {
                    echo '<span class="">Connexion</span>';
                }
                ?>
        </a>
    </nav>
</header>