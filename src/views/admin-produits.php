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
            <!-- Ligne 1 -->
            <tr>
                <td>Cellule 1</td>
                <td>Cellule 2</td>
                <td>Cellule 3</td>
                <td>Cellule 4</td>
                <td>Cellule 5</td>
                <td>Cellule 6</td>
                <td>Cellule 7</td>
            </tr>
            <!-- Ligne 2 -->
            <tr>
                <td>Cellule 8</td>
                <td>Cellule 9</td>
                <td>Cellule 10</td>
                <td>Cellule 11</td>
                <td>Cellule 12</td>
                <td>Cellule 13</td>
                <td>Cellule 14</td>
            </tr>
            <!-- Ligne 3 -->
            <tr>
                <td>Cellule 15</td>
                <td>Cellule 16</td>
                <td>Cellule 17</td>
                <td>Cellule 18</td>
                <td>Cellule 19</td>
                <td>Cellule 20</td>
                <td>Cellule 21</td>
            </tr>
            <!-- Ligne 4 -->
            <tr>
                <td>Cellule 22</td>
                <td>Cellule 23</td>
                <td>Cellule 24</td>
                <td>Cellule 25</td>
                <td>Cellule 26</td>
                <td>Cellule 27</td>
                <td>Cellule 28</td>
            </tr>
        </table>
    </section>
</main>
<?php

// Inclusion du footer
include $includePath . '_footer.php';
?>