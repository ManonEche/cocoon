<?php

require_once('../model/articleManager.php');

$title = "Article";

ob_start();

// Header
require('header.php');

$articleManager = new ArticleManager();
$article = $articleManager->getArticle($_GET['id']);

?>

<div class="bg-primary pb-2 vw-100">
    <?php
    echo '<h1 class="fw-light fs-4 p-4">' . $article['title'] . '</h1>
    
    <section class="px-5 pt-2">


        <div class="text-center">
            <img src="../public/uploads/' . $article['image'] . '"id="articleImage" class="rounded-5 float-lg-end mb-3 mx-3">
        </div>

        <div class="text-center">
        ' . '<form method="post" action="../index.php?page=modification&id_article=' . $article['id'] . '">
        <div class="pb-3">
                <label for="content" class="form-label">Contenu</label>
                <textarea id="content"" name="content" rows="4" class="form-control" required>' . $article['content'] . '</textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-secondary text-white">Publier</button>
            </div>
        </form>
        </div>

        <div class="text-center pt-4">
            <img src="../public/assets/images/line.svg" alt="Ligne avec un coeur" class="w-25">
        </div>';
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