<?php session_start();



//if (isset($_POST['author']) and isset($_POST['comment'])
 //   and !empty($_POST['author']) and !empty($_POST['comment'])) {
   // On a le nom et le prénom

  try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

$request = $bdd->prepare('DELETE FROM comments  WHERE id = ?');
$request->execute([$_GET['id']]);
//$request->execute([$_POST['comment'],$_POST['author'],$_GET['id']]);

header("Location: commentaires.php?billet=".$_GET['billet']);
//  }