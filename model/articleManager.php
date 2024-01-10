<?php

session_start();

class ArticleManager
{

    function getArticle($id)
    {
        // Connexion à la bdd
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
        $req->execute([$id]);
        return $req->fetch();
    }

    function getArticles($category = '')
    {
        // Connexion à la bdd
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare("SELECT * FROM articles WHERE ? = '' OR category = ? ORDER BY timestamp DESC");
        $req->execute([$category, $category]);
        return $req->fetchAll();
    }

    function uploadImage($image)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        if (isset($image) && $image['error'] === 0) {

            // L'image est trop lourde ?
            if ($image['size'] <= 10000000) {
                $informationsImage = pathinfo($image['name']);
                $extensionImage = $informationsImage['extension'];
                $extensionsArray = ['png', 'gif', 'jpg', 'jpeg', 'svg', 'webp'];

                if (in_array($extensionImage, $extensionsArray)) {

                    $newImageName = time() . rand() . rand() . '.' . $extensionImage;
                    move_uploaded_file($image['tmp_name'], './public/uploads/' . $newImageName);
                }
            } else {
                echo ("Image trop lourde");
            }
        }

        return $newImageName;
    }

    function postArticle($category, $titleArticle, $content, $image)
    {
        // Connexion à la bdd
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare('INSERT INTO articles(category, title, content, image, id_user) VALUES (?, ?, ?, ?, ?)');
        $result = $req->execute([$category, $titleArticle, $content, $image, $_SESSION['id_user']]);

        return $result;
    }

    function editArticle($newContent, $idArticle)
    {
        // Connexion à la bdd
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare('UPDATE articles SET content = :newContent WHERE id= :id');
        $result = $req->execute(['newContent'=>$newContent, 'id'=>$idArticle]);

        return $result;
    }

    function deleteArticle($idArticle)
    {
        // Connexion à la bdd
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cocoon;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare('DELETE FROM articles WHERE id= :id');
        $result = $req->execute(['id'=>$idArticle]);

        return $result;
    }
}
