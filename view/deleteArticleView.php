<?php

require_once('../model/articleManager.php');

$articleManager = new articleManager();
$articles = $articleManager->deleteArticle($_GET['id']);

header('Location: myArticleView.php');
exit();