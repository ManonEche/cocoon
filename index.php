<?php

// Routeur

//Contrôleur
require("controller/controller.php");


//Pages finales
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'accueil') {
        home();
    } else if ($_GET['page'] == 'inscription') {
        registration();
    } else if ($_GET['page'] == 'connexion') {
        connection();
    } else if ($_GET['page'] == 'profil') {
        redirect();
    } else if ($_GET['page'] == 'commentaire') {
        if (!empty($_POST['title']) && !empty($_POST['content'])) {
            addComments(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['content']), htmlspecialchars($_GET['id_article']));
        }
    } else if ($_GET['page'] == 'article') {
        if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_FILES['image'])) {
            addArticles(htmlspecialchars($_POST['category']), htmlspecialchars($_POST['title']), htmlspecialchars($_POST['content']), $_FILES['image']);
        }
    } else if ($_GET['page'] == 'modification') {
        if (!empty($_POST['content'])) {
            editArticle(htmlspecialchars($_POST['content']), htmlspecialchars($_GET['id_article']));
        }
    }
} else {
    require('view/errorView.php');
}
