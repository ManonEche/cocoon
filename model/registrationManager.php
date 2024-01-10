<?php

session_start();


function newUser()
{

    //Vérifier le formulaire d'inscription
    if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        $pseudo = htmlspecialchars($_POST['pseudo']);
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

        // L'adresse email est-elle en doublon ?
		$req = $bdd->prepare('SELECT COUNT(*) as numberEmail FROM user WHERE email = ?');
		$req->execute([$email]);

		while($emailVerification = $req->fetch()) {

			if($emailVerification['numberEmail'] != 0) {

				header('location: ../view/registrationView.php?error=1&message=Votre adresse email est déjà utilisée par un autre utilisateur.');
				exit();

			}

		}

        // Chiffrement du mot de passe
        require_once('encryptManager.php');
        $password = encrypt($_POST['password']);

        //Préparer et exécuter la requête
        $req = $bdd->prepare('INSERT INTO user(pseudo, email, password) VALUES(?, ?, ?)');
        $req->execute([$pseudo, $email, $password]);


        header('Location: ../view/connectionView.php');
        exit();
    }
}

