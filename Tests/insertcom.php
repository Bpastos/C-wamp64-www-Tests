<?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

 
$request = $bdd->prepare('INSERT INTO comments(author,comment,comment_date,post_id) VALUES (?,?,now(),?)');
$requeteok = $request->execute(array($_POST['author'],$_POST['comment'],$_GET['billet']));
// Chaque valeur du tableau est remplacer par les points d'intergation
if (!$requeteok) {
   echo "\r\nErreur SQL :\r\n";
   print_r($request->errorInfo());
}

header("Location: commentaires.php?billet=".$_GET['billet']);