<?php

session_start();


function profileUser()
{

    //Vérifier le formulaire d'inscription
    if (!empty($_POST['author'])) {

        $author = htmlspecialchars($_POST['author']);

        // Connexion à la bdd
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        //Rediriger l'utilisateur si Auteur/Admin ou non
        if ($author == 1) {
            header('Location: ../view/profileAdminView.php');
            exit();
        } else {
            header('Location: ../view/profileUserView.php');
            exit();
        }
    }
}
