<?php

require_once('model/registrationManager.php');
require_once('model/connectionManager.php');
require_once('model/articleManager.php');
require_once('model/commentManager.php');
require_once('model/profileManager.php');

function home()
{
    require('view/firstView.php');
}

function registration()
{
    newUser();


    require('view/registrationView.php');
}

function connection()
{
    alreadyUser();

    require('view/connectionView.php');
}

function redirect()
{
    profileUser();

    require('view/homeUserView.php');
}

function addComments($titleComment, $message, $idArticle)
{
    $commentManager = new CommentManager();
    $result = $commentManager->postComment($titleComment, $message, $idArticle);

    if ($result === false) {
        throw new Exception("Impossible d'ajouter votre commentaire pour le moment.");
    } else {
        header('Location: view/articlesView.php?id='.$idArticle);
        exit();
    }
}

function addArticles($category, $titleArticle, $content, $image)
{
    $articleManager = new ArticleManager();

    $imageName = $articleManager->uploadImage($image);
    
    $result = $articleManager->postArticle($category, $titleArticle, $content, $imageName);

    if ($result === false) {
        throw new Exception("Impossible d'ajouter votre article pour le moment.");
    } else {
        header('Location: view/articleSuccessView.php');
        exit();
    }
}

function editArticle ($newContent, $idArticle) {

    $articleManager = new ArticleManager();

    
    $result = $articleManager->editArticle($newContent, $idArticle);

    if ($result === false) {
        throw new Exception("Impossible de modifier votre article pour le moment.");
    } else {
        header('Location: view/articleSuccessView.php');
        exit();
    }
}
