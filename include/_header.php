<body>
<header class="flex space-between center vertical-center">
    <div class="off-screen-menu hide_desktop">
        <ul>
            <li>
                <a class="#" href="#">Panier
                    <img class="hw-50px" src="assets/images/panier.png" alt="panier logo">
                </a>
            </li>
            <li>
                <a href="#">Rechercher
                    <img class="hw-50px" src="assets/images/loupe.png" alt="loupe logo">
                </a>
            </li>
        </ul>
    </div>

    <nav>
        <div class="ham-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <a href="index.php">
        <img src="assets/images/logo.png" class="logo" alt="logo">
    </a>
    <h1 class="hide_mobile">Pixel Plush</h1>
    <nav class="flex space-center vertical-center gap">
        <input class="hide_mobile" type="text" placeholder="Rechercher">
        <a class="hide_mobile" href="#">
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