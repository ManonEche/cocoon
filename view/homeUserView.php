<?php

session_start();

require_once('../model/profileManager.php');

$title = "Accueil";

ob_start();

// Header
require('header.php');
?>

<div class="bg-primary pb-5 vw-100">
    <h1 class="fw-light fs-4 p-4 text-capitalize">BONJOUR
        <?php
        echo $_SESSION['pseudo'];
        ?>,
    </h1>

    <!-- Bouton d'ajout d'article -->
    <div class="text-center py-5">
        <?php
        if ($_SESSION['author'] == 1) {
            echo '<a href="profileAdminView.php" class="buttons btn btn-secondary rounded-5 w-75 mt-4">';
        } else {
            echo '<a href="profileUserView.php" class="buttons btn btn-secondary rounded-5 w-75 mt-4">';
        }
        ?>
        <div class="d-flex justify-content-center align-items-center">
            <img src="../public/assets/icons/profile.png" alt="Profil">
            <p class=" text-white fw-light fs-4 m-0 ps-3 pt-1">MON PROFIL</p>
        </div>
        </a>
    </div>

    <!-- Articles tendances -->
    <section>
        <h3 class="text-center fw-light fs-4 mt-3 pt-5 pb-4 mb-5">ARTICLES TENDANCES</h3>

        <div class="blockGroup d-flex flex-wrap gap-5 justify-content-center text-center pb-5">

            <div class="text-white text-center">
                <a href="articlesView.php?id=9" class="text-decoration-none text-reset">
                    <div class="blockArticle blockPopularArticle bg-secondary rounded-5 px-5 py-4 h-100 d-flex justify-content-center align-items-center flex-column">
                        <img src="../public/assets/icons/bun.png" alt="Brioche" class="iconsHome pt-2 pb-4">
                        <p class="fs-4">RECETTE DE<br>
                            BRIOCHE MAISON</p>
                    </div>
                </a>
            </div>

            <div class="text-white text-center">
                <a href="articlesView.php?id=17" class="text-decoration-none text-reset">
                    <div class="blockArticle blockPopularArticle bg-secondary rounded-5 px-5 py-4 h-100 d-flex justify-content-center align-items-center flex-column">
                        <img src="../public/assets/icons/restaurant2.png" alt="Restaurant" class="iconsHome2 py-3">
                        <p class="fs-4">NOUVELLE ADRESSE<br>
                            À MONTRÉAL</p>
                    </div>
                </a>
            </div>

            <div class="text-white text-center">
                <a href="articlesView.php?id=12" class="text-decoration-none text-reset">
                    <div class="blockArticle blockPopularArticle bg-secondary rounded-5 px-5 py-4 h-100 d-flex justify-content-center align-items-center flex-column">
                        <img src="../public/assets/icons/cream.png" alt="Crème" class="iconsHome pb-3">
                        <p class="fs-4">LA GAMME<br>
                            IDÉALE POUR<br>
                            LES CHEVEUX</p>
                    </div>
                </a>
            </div>

        </div>
    </section>
</div>

<?php
// Footer
require('footer.php');

//Stocker tout ce qui est écrit au dessus dans la variable content
$content = ob_get_clean();

require('base.php');

?>