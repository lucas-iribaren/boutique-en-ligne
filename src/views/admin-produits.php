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
        
        <?php if (isset($products) && is_array($products) && !empty($products)): ?>
        <!-- Tableau -->
        <table class="product-table">
            <!-- Ligne 1 : En-têtes -->
            <tr class="line-1">
                <td>ID</td>
                <td>Nom produit</td>
                <td class="description-header">Description</td>
                <td>Image</td>
                <td>Prix</td>
                <td>Quantité</td>
                <td>Sous-catégorie</td>
                <td>Catégorie</td>
            </tr>
            <?php foreach ($products as $product): ?>
            <tr class="other-lines">
                <td><?php echo htmlspecialchars($product['id']); ?></td>
                <td><?php echo htmlspecialchars($product['nom']); ?></td>
                <td class="description-cell"><?php echo htmlspecialchars($product['description']); ?></td>
                <td>
                    <input type="file" id="image-<?php echo htmlspecialchars($product['id']); ?>" name="image-<?php echo htmlspecialchars($product['id']); ?>" accept="image/*" style="display: none;">
                    <button onclick="document.getElementById('image-<?php echo htmlspecialchars($product['id']); ?>').click();">Ajouter image</button>
                </td>
                <td><?php echo htmlspecialchars($product['prix']); ?></td>
                <td><?php echo htmlspecialchars($product['quantite']); ?></td>
                <td><?php echo htmlspecialchars($product['sous-categorie']); ?></td>
                <td><?php echo htmlspecialchars($product['categorie']); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <p>Aucun produit n'est disponible pour le moment.</p>
        <?php endif; ?>
    </section>
</main>
<?php

// Inclusion du footer
include $includePath . '_footer.php';
?>

<script src="/assets/js/admin-produits.js"></script>
