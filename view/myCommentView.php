<?php

session_start();

require_once('../model/commentManager.php');

$commentManager = new CommentManager();
$comments = $commentManager->getComment($_SESSION['id_user']);

$title = "Mes commentaires";

ob_start();

// Header
require('header.php');
?>

<div class="bg-primary pb-5 min-vh-100 vw-100">
    <h1 class="fw-light fs-4 p-4">MES COMMENTAIRES</h1>

    <section class="px-5 d-flex align-items-center flex-column">

        <!-- Bloc commentaire 1 -->
        
        <?php
        for ($c = 0; $c < count($comments); $c++) {
            $comment = $comments[$c];
            echo '<div class="blockComment rounded-3 shadow-sm py-3 px-3 mb-4">
            <h3>' . $comment['title'] . '</h3>
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