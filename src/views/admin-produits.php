<?php
// Définition du chemin correct vers le dossier 'include'
$includePath = __DIR__ . '/../../include/';

include '../controllers/ProduitController.php';

$produitController = new ProduitController();
$products = $produitController->getAllProducts();


// Inclusion des fichiers
include $includePath . '_head.php';
include $includePath . '_header.php';

// Ajout du main avec la section
?>
<main>
    <section class="section">
        <h1 class="section-title">Gestion des Produits</h1>
        
        <?php if (!empty($products)): ?>
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
                <td>Actions</td>
            </tr>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo htmlspecialchars($product['id']); ?></td>
                <td><?php echo htmlspecialchars($product['nom']); ?></td>
                <td><?php echo htmlspecialchars($product['description']); ?></td>
                <td><img src="../../assets/images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['nom']); ?>" width="50"></td>
                <td><?php echo htmlspecialchars($product['prix']); ?> €</td>
                <td><?php echo htmlspecialchars($product['quantite']); ?></td>
                <td><?php echo htmlspecialchars($product['nom_sc']); ?></td>
                <td><?php echo htmlspecialchars($product['nom_p']); ?></td>
                <td>
                    <a href="edit-produit.php?id=<?php echo $product['id']; ?>" class="btn btn-edit">Modifier</a>
                    <a href="delete-produit.php?id=<?php echo $product['id']; ?>" class="btn btn-delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
            <p>Aucun produit n'a été trouvé.</p>
        <?php endif; ?>
    </section>
</main>
<script src="/assets/js/admin-produits.js"></script>
<?php

// Inclusion du footer
include $includePath . '_footer.php';
?>

