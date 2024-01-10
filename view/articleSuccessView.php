<?php

$title = "Mon profil";

ob_start();

// Header
require('header.php');
?>

<div class="bg-primary pb-5 vw-100 vh-100">

    <section class="d-flex justify-content-center align-items-center flex-column gap-5 pt-5">

        <p class="alert bg-secondary text-white text-center my-5">Article publié avec succès.</p>

        <!-- Animation -->
        <div>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

            <dotlottie-player src="https://lottie.host/f90a13aa-1415-4c3f-9cbb-6e7747458d9d/hNq1JV4szi.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></dotlottie-player>
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