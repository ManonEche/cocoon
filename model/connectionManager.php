<?php

session_start();

function alreadyUser()
{

    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        // Variables
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        // Connexion à la bdd
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        // L'adresse email est-elle correcte ?
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            header('Location: ../view/homeUserView.php?error=1&message=Votre adresse email est invalide.');
            exit();
        }

        // Chiffrement du mot de passe
        require_once('encryptManager.php');
        $password = encrypt($_POST['password']);

        // Connexion
        $req = $bdd->prepare('SELECT * FROM user WHERE email = ?');
        $req->execute([$email]);

        
        $user = $req->fetch(PDO::FETCH_OBJ);

        // Vérifier password
        if ($user->password !== $password) {
        header('Location: ../view/errorView.php');
        exit();
        }

        // Stocker info session
        $_SESSION['pseudo'] = $user->pseudo;
        $_SESSION['id_user'] = $user->id;
        $_SESSION['author'] = $user->author;

        header('Location: ../view/homeUserView.php');
        exit();
    }
}
