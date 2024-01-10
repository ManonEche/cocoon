<header class="position-sticky vw-100 z-3">

    <nav class="navbar bg-success navbar-expand-md px-3 py-2">

        <div class="navbar-brand fw-light fs-1">
            Cocoon
        </div>


        <!-- Menu burger -->
        <button class=" buttons navbar-toggler border-0 w-auto" data-bs-toggle="collapse" data-bs-target="#burgerMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="burgerMenu">

            <!-- Éléments barre de navigation -->
            <ul class="navbar-nav fs-5 ms-auto">
                <li class="nav-item">
                    <a href="homeUserView.php" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="articlesListView.php?category=fashion" class="nav-link">Mode</a>
                </li>
                <li class="nav-item">
                    <a href="articlesListView.php?category=beauty" class="nav-link">Beauté</a>
                </li>
                <li class="nav-item">
                    <a href="articlesListView.php?category=cook" class="nav-link">Cuisine</a>
                </li>
                <li class="nav-item">
                    <a href="articlesListView.php?category=tips" class="nav-link">Bons plans</a>
                </li>
                <li class="nav-item">
                    <?php
                    if ($_SESSION['author'] == 1) {
                        echo '<a href="profileAdminView.php" class="nav-link">';
                    } else {
                        echo '<a href="profileUserView.php" class="nav-link">';
                    }
                    ?><img src="../public/assets/icons/darkProfile.png" alt="Profil" class="pb-3"></a>
                </li>
                <li class="nav-item">
                    <a href="../logout.php" class="nav-link"><img src="../public/assets/icons/off.png" alt="Déconnexion" class="pb-2"></a>
                </li>
            </ul>
        </div>

    </nav>

</header>