<?php
$title = 'Accueil';

ob_start();
?>

<section class="section_phare">
    <h3>Produits phares</h3>
    <article class="article_phare flex space-around">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="product-details">
                        <img class="" src="./assets/images/placeholder.png" alt="Produit 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Produit 1</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                            <a href="?page=produit1" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="product-details">
                        <img class="d-block w-100" src="./assets/images/placeholder.png" alt="Produit 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Produit 2</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                            <a href="?page=produit2" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="product-details">
                        <img class="d-block w-100" src="./assets/images/placeholder.png" alt="Produit 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Produit 3</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                            <a href="?page=produit3" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="sr-only">Next</span>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </article>
</section>
<section>
    <h3>Catégorie</h3>
    <article class="flex space-around">
        <a href="#" class="section_phare vertical-center space-center">
            <img src="assets/images/jeux_videos.png" class="" alt="Catégorie jeux video">
        </a>
        <a href="#" class="section_phare vertical-center space-center">
            <img src="assets/images/film_series.png" class="" alt="Catégorie Films et Séries">
        </a>
        <a ></a>
    </article>                
</section>