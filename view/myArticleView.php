<?php

session_start();

require_once('../model/articleManager.php');

$articleManager = new articleManager();
$articles = $articleManager->getArticles();

$title = "Mes articles";

ob_start();

// Header
require('header.php');
?>

<div class="bg-primary pb-5 m-0 vw-100">
    <h1 class="fw-light fs-4 p-4">MES ARTICLES</h1>

    <section class="d-flex justify-content-center align-items-center flex-column gap-4">

        <!-- Bloc article -->

        <?php
        for ($a = 0; $a < count($articles); $a++) {
            $article = $articles[$a];
            echo '<div class="text-white text-center w-50 d-flex align-items-center">
            <a href="articlesView.php" class="text-decoration-none text-reset">
                <div class="blockMyArticle bg-secondary rounded-5"><div class="blockMyContent">
                    <img src="../public/uploads/' . $article['image'] . '" class="blockMyImage object-fit-cover rounded-5">
                    <p class="blockMyText fs-4 m-0 p-2 text-uppercase">' . $article['title'] . '</p></div>
                    <div class="blockIcons gap-2 pe-2">
                    <a href="editArticleView.php?id='.$article['id'].'" class="text-decoration-none text-reset">
                        <img src="../public/assets/icons/edit.png" alt="Modifier">
                        </a>
                        <a href="deleteArticleView.php?id='.$article['id'].'" class="text-decoration-none text-reset">
                        <img src="../public/assets/icons/delete.svg" alt="Supprimer">
                        </a>
                    </div>
                </div>
            </a>
        </div>';
        }
        ?>

    </section>

</div>

<?php
// Footer
require('footer.php');

//Stocker tout ce qui est écrit au dessus dans la variable content
$content = ob_get_clean();

require('base.php');

?>