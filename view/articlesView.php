<?php

require_once('../model/commentManager.php');
require_once('../model/articleManager.php');

$title = "Article";

ob_start();

// Header
require('header.php');

$articleManager = new ArticleManager();
$article = $articleManager->getArticle($_GET['id']);

$commentManager = new CommentManager();
$comments = $commentManager->getArticleComments($article['id']);
?>

<div class="bg-primary pb-2 vw-100">
    <?php
    echo '<h1 class="fw-light fs-4 p-4 text-uppercase">'.$article['title'].'</h1>
    
    <section class="px-5 pt-2">


        <div class="text-center">
            <img src="../public/uploads/'.$article['image'].'"id="articleImage" class="rounded-5 float-lg-end mb-3 mx-3">
        </div>

        <div class="text-center">
            <p>'.$article['content'].'
            </p>
        </div>

        <div class="text-center pt-4">
            <img src="../public/assets/images/line.svg" alt="Ligne avec un coeur" class="w-25">
        </div>';
        ?>

        <!-- Partie commentaires -->

        <h2 class="fs-4 py-4">Commentaires</h2>

        <!-- Ajout commentaire -->
        <?php
        echo '<form method="post" action="../index.php?page=commentaire&id_article=' .$article['id']. '" class="blockComment">';
        ?>
            <div class="pb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="pb-3">
                <label for="content" class="form-label">Contenu</label>
                <textarea id="content" name="content" rows="4" class="form-control" required></textarea>
            </div>
            <div class="pb-5">
                <button type="submit" class="btn btn-secondary text-white">Publier</button>
            </div>
        </form>

        <!-- Bloc commentaire -->
        <?php
        for ($c = 0; $c < count($comments); $c++) {
            $comment = $comments[$c];
            echo '<div class="blockComment rounded-3 shadow-sm py-3 px-3 mb-4">
            <h5 class="fs-5 fw-lighter text-secondary text-capitalize">' . $comment['pseudo'] . '</h5>
            <h3 class="fs-4">' . $comment['title'] . '</h3>
            <p class="fw-bolder mb-2">' . $comment['timestamp'] . '</p>
            <p class="m-0">' . $comment['content'] . '</p>
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