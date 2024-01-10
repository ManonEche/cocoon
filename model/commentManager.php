<?php

session_start();

class CommentManager
{
    function getArticleComments ($idArticle) {

                // Connexion à la bdd
                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }
        
                $req = $bdd->prepare("SELECT c.id, c.title, c.content, c.timestamp, u.pseudo FROM comments c JOIN user u ON c.id_user = u.id WHERE c.id_article = ? ORDER BY c.timestamp DESC");
                $req->execute([$idArticle]);
                return $req->fetchAll();

    }

    function getComment($id_user = -1)
    {
        // Connexion à la bdd
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare("SELECT c.id, c.title, c.content, c.timestamp, u.pseudo FROM comments c JOIN user u ON c.id_user = u.id WHERE ? = -1 OR c.id_user = ? ORDER BY c.timestamp DESC");
        $req->execute([$id_user, $id_user]);
        return $req->fetchAll();

    }

    function postComment($titleComment, $message, $idArticle)
    {
        // Connexion à la bdd
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        try {
        $req = $bdd->prepare('INSERT INTO comments(title, content, id_user, id_article) VALUE (?, ?, ?, ?)');
        $result = $req->execute([$titleComment, $message, $_SESSION['id_user'], $idArticle]);

        return $result;}
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage()); 
        }
    }
}
