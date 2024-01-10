<?php

$title = "Mon profil";

ob_start();

// Header
require('header.php');
?>

<div class="bg-primary pb-5 vw-100 vh-100">
    <h1 class="fw-light fs-4 p-4">MON PROFIL</h1>

    <!-- Bouton d'ajout d'article -->
    <div class="text-center my-5">
        <a href="creationArticleView.php" class="text-decoration-none text-reset">
            <button type="submit" class="buttons btn btn-secondary rounded-5 w-50">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="../public/assets/icons/plus.png" alt="Plus">
                    <p class=" text-white fw-light fs-4 m-0 ps-3">AJOUTER UN ARTICLE</p>
                </div>
            </button>
        </a>
    </div>

    <!-- Case "Mes Articles" -->
    <section class="d-flex justify-content-center align-items-center">

        <div class="text-white text-center w-50 d-flex justify-content-center align-items-center">
            <a href="myArticleView.php" class="text-decoration-none text-reset">
                <div class="blockArticle bg-secondary rounded-5 d-flex flex-row justify-content-between align-items-center">
                    <img src="../public/assets/images/myArticle.jpg" alt="Livre" class="blockImageProfile rounded-5">
                    <p class="fs-4 m-0 p-4 w-100 text-center">MES ARTICLES</p>
                </div>
            </a>
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