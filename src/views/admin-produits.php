<?php
// Définition du chemin correct vers le dossier 'include'
$includePath = __DIR__ . '/../../include/';

// Inclusion des fichiers
include $includePath . '_head.php';
include $includePath . '_header.php';

// Ajout du main avec la section
?>
<main>
    <section class="section">
        <h1 class="section-title">Gestion des Produits</h1>
    </section>
    <!-- Le reste du contenu de votre page ira ici -->
</main>
<?php

// Inclusion du footer
include $includePath . '_footer.php';
?>