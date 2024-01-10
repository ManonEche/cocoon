<?php
session_start();

$title = "Inscription";

ob_start();
?>

<!-- Background -->
<div class="backgroundImage vh-100 m-0 pt-5 d-flex flex-column justify-content-center">

    <!-- Partie centrale -->
    <section class="d-flex justify-content-center m-5">

        <div class="bg-primary rounded-5 p-5">
            <h1 class="fw-light fs-4 text-center">INSCRIPTION</h1>

            <form method="post" action="../index.php?page=inscription">
                <p class="m-0">
                    <label for="pseudo" class="form-label"></label>
                    <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" class="form-control bg-success border-0 py-3" required>
                </p>
                <p class="m-0">
                    <label for="email" class="form-label"></label>
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control bg-success border-0 py-3" required>
                </p>
                <p class="m-0">
                    <label for="password" class="form-label"></label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control bg-success border-0 py-3" required>
                </p>
                <div class="d-flex flex-wrap">
                <?php
                echo $_GET['message'];
                ?>
                </div>
                <a href="connectionView.php" class="text-decoration-none text-reset">
                <button type="submit" class="buttons btn btn-secondary text-center mx-5 mt-5 py-2">S'inscrire</button>
                </a>
            </form>

            <p class="text-center mt-4 mb-0">Déjà inscrit ? Connectez-vous<br>
                <a href="connectionView.php" class="text-decoration-none text-reset">
                    <b>Connexion</b>
                </a>
            </p>
        </div>

    </section>

    <!-- Footer -->
    <footer class="px-4 pt-5 mt-5">
        &copy; 2023 Cocoon
    </footer>
</div>

<?php

//Stocker tout ce qui est écrit au dessus dans la variable content
$content = ob_get_clean();

require('base.php');

?>