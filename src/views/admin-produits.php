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
        
        <!-- Tableau -->
        <table class="product-table">
            <!-- Ligne 1 : En-têtes -->
            <tr>
                <td>ID</td>
                <td>Nom produit</td>
                <td class="description-header">Description</td>
                <td>Prix</td>
                <td>Quantité</td>
                <td>Sous-catégorie</td>
                <td>Catégorie</td>
            </tr>
            <!-- Ligne 2 : Vide -->
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <!-- Ligne 3 : Vide -->
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <!-- Ligne 4 : Vide -->
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </section>
</main>
<?php

// Inclusion du footer
include $includePath . '_footer.php';
?>