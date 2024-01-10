<?php
$title = "Erreur";

ob_start();

// Header
require('header.php');
?>

<!-- Partie centrale -->
<section class="bg-primary d-flex flex-column justify-content-center align-items-center vw-100 vh-100">



    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <dotlottie-player src="https://lottie.host/de61f326-66ac-4e98-bfbf-a98307062295/fwT0QLwPAJ.json" background="transparent" speed="1" style="width: 600px; height: 600px;" loop autoplay></dotlottie-player>

    <p class="fs-5 pb-5">Cette page n'existe pas.</p>

</section>





<?php
// Footer
require('footer.php');

//Stocker tout ce qui est écrit au dessus dans la variable content
$content = ob_get_clean();

require('base.php');

?>