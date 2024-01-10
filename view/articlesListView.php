<?php

session_start();

require_once('../model/articleManager.php');

$articleManager = new articleManager();
$articles = $articleManager->getArticles($_GET ['category']);
$category = $_GET ['category'];

$title = "Mode";

ob_start();

// Header
require('header.php');
?>

<div class="bg-primary pb-5 vw-100">
    <h1 class="fw-light fs-4 p-4">
        <?php
        if ($category == 'fashion') {
            echo "L'ACTUALITÉ MODE";
        } else if ($category == 'beauty') {
            echo "L'ACTUALITÉ BEAUTÉ";
        } else if ($category == 'cook') {
            echo "L'ACTUALITÉ CUISINE";
        } else if ($category == 'tips') {
            echo "L'ACTUALITÉ BONS PLANS";
        }
        ?>
    </h1>

    <section class="d-flex justify-content-center align-items-center flex-column gap-4">

        <!-- Bloc article -->

        <?php
        for ($a = 0; $a < count($articles); $a++) {
            $article = $articles[$a];
            echo '<div class="text-white text-center w-50 d-flex align-items-center">
            <a href="articlesView.php?id='.$article['id'].'" class="text-decoration-none text-reset">
                <div class="blockArticle bg-secondary rounded-5 d-flex flex-row justify-content-between align-items-center">
                    <img src="../public/uploads/'.$article['image'].'" class="blockImage object-fit-cover rounded-5">
                    <p class="blockText fs-4 m-0 p-2 text-uppercase">'.$article['title'].'</p>
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