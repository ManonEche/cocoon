<?php
$title = "Connexion";

ob_start();
?>

<!-- Background -->
<div class="backgroundImage vh-100 m-0 pt-5 d-flex flex-column justify-content-center">

    <!-- Partie centrale -->
    <section class="d-flex justify-content-center m-5">

        <div class="bg-primary rounded-5 p-5">
            <h1 class="fw-light fs-4 text-center">CONNEXION</h1>

            <form method="post" action="../index.php?page=connexion">
                <p class="my-0">
                    <label for="email" class="form-label"></label>
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control bg-success border-0 py-3" required>
                </p>
                <p class="my-0">
                    <label for="password" class="form-label"></label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control bg-success border-0 py-3" required>
                </p>
                <button type="submit" class="buttons btn btn-secondary text-center mx-5 mt-4 py-2">Se connecter</button>
            </form>

            <p class="text-center mt-4 mb-0">Pas encore de compte ? Créez-en un<br>
                <a href="registrationView.php" class="text-decoration-none text-reset">
                    <b>Inscription</b>
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