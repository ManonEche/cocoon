<?php
$title = "Cocoon";

ob_start();
?>

<div class="bg-primary vw-100">
    <!-- Partie du haut -->
    <header>

        <h1 class="fw-light ms-3 p-3">Cocoon</h1>
        <div class="m-4 position-absolute top-0 end-0">
            <a href="connectionView.php" class="text-decoration-none text-reset">
                <button type="submit" class="profileBtn buttons bg-secondary text-white fs-5 border-0 rounded-pill px-4 py-3 mx-2">Se connecter</button>
                <img src="../public/assets/icons/darkProfile.png" alt="Icône profil" class="iconHome">
            </a>

            <a href="registrationView.php" class="text-decoration-none text-reset">
                <button type="submit" class="profileBtn bg-grey text-white fs-5 border-0 rounded-pill px-5 py-3">S'inscrire</button>
            </a>
        </div>
    </header>

    <section>

        <!-- Partie centrale -->
        <div class="firstGroup d-flex">
            <div class="d-flex flex-column w-100 justify-content-center align-items-center">
                <h2 class="slogan">love,<br>
                    comfort<br>
                    and joy</h2>

                <h3 class="subtitleSlogan fw-light fs-5">BLOG LIFESTYLE</h3>
            </div>
            <img src="../public/assets/images/imageCocoon.svg" alt="Femme" class="firstImage py-4">
        </div>

        <!-- Partie du bas -->
        <h3 class="text-center fw-light fs-4 pb-4">ARTICLES TENDANCES</h3>

        <div class="blockGroup d-flex flex-wrap gap-5 justify-content-center text-center">

            <div class="text-white text-center">
                <a href="connectionView.php" class="text-decoration-none text-reset">
                    <div class="blockArticle blockPopularArticle bg-secondary rounded-5 px-5 py-4 h-100 d-flex justify-content-center align-items-center flex-column">
                        <img src="../public/assets/icons/bun.png" alt="Brioche" class="iconsHome pt-2 pb-4">
                        <p class="fs-4">RECETTE DE<br>
                            BRIOCHE MAISON</p>
                    </div>
                </a>
            </div>

            <div class="text-white text-center">
                <a href="connectionView.php" class="text-decoration-none text-reset">
                    <div class="blockArticle blockPopularArticle bg-secondary rounded-5 px-5 py-4 h-100 d-flex justify-content-center align-items-center flex-column">
                        <img src="../public/assets/icons/restaurant2.png" alt="Restaurant" class="iconsHome2 py-3">
                        <p class="fs-4">NOUVELLE ADRESSE<br>
                            À MONTRÉAL</p>
                    </div>
                </a>
            </div>

            <div class="text-white text-center">
                <a href="connectionView.php" class="text-decoration-none text-reset">
                    <div class="blockArticle blockPopularArticle bg-secondary rounded-5 px-5 py-4 h-100 d-flex justify-content-center align-items-center flex-column">
                        <img src="../public/assets/icons/cream.png" alt="Crème" class="iconsHome pb-3">
                        <p class="fs-4">LA GAMME IDÉALE POUR
                            LES CHEVEUX</p>
                    </div>
                </a>
            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="pt-5 px-3 pb-3">
        &copy 2023 Cocoon
    </footer>
</div>

<?php

//Stocker tout ce qui est écrit au dessus dans la variable content
$content = ob_get_clean();

require('base.php');

?>