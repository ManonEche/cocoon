<?php

$title = "Mon profil";

ob_start();

// Header
require('header.php');
?>

<div class="bg-primary pb-5 vw-100 vh-100">
    <h1 class="fw-light fs-4 p-4">AJOUTER UN ARTICLE</h1>


    <!-- Création d'article -->
    <section class="d-flex justify-content-center align-items-center pt-5">

        <form method="post" action="../index.php?page=article" enctype="multipart/form-data" class="w-50">
            <div class="pb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="pb-3">
                <label for="category" class="form-label">Catégorie</label>
                <select name="category" id="category" class="form-select" required>
                    <option value="">--Choisir une catégorie--</option>
                    <option value="fashion">Mode</option>
                    <option value="beauty">Beauté</option>
                    <option value="cook">Cuisine</option>
                    <option value="tips">Bons Plans</option>
                </select>
            </div>
            <div class="pb-3">
                <label for="content" class="form-label">Contenu</label>
                <textarea id="content" name="content" rows="4" class="form-control" required></textarea>
            </div>
            <div class="pb-4">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-secondary text-white">Publier</button>
            </div>
    </form>

    </section>
</div>

<?php
// Footer
require('footer.php');

//Stocker tout ce qui est écrit au dessus dans la variable content
$content = ob_get_clean();

require('base.php');

?>