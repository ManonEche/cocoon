<?php

$title = "Mon profil";

ob_start();

// Header
require('header.php');

?>

<div class="bg-primary pb-5 vw-100 vh-100">
    <h1 class="fw-light fs-4 p-4">MON PROFIL</h1>

    <!-- Case "Mes Articles" -->
    <section class="d-flex justify-content-center align-items-center">

        <div class="text-white text-center w-50 d-flex justify-content-center align-items-center">
            <a href="myCommentView.php" class="text-decoration-none text-reset">
                <div class="blockArticle bg-secondary rounded-5 d-flex flex-row justify-content-between align-items-center">
                    <img src="../public/assets/images/myComment.jpg" alt="Ordinateur" class="blockImageProfile rounded-5">
                    <p class="fs-4 m-0 p-4 w-100 text-center">MES COMMENTAIRES</p>
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