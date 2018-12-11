<?php session_start(); ?>

<h3>Signaler un commentaire : </h3>
 <?php
     // Connexion à la base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }






if (isset($_GET['id'])) {
   // 


$request = $bdd->prepare('UPDATE comments SET report = 1 WHERE id = ?');
//execute : variable qui remplace les points d'intérogattion
$request->execute([$_GET['id']]);
header("Location: commentaires.php?billet=".$_GET['billet']);
}
?>

<?php

if (isset($_SESSION['id']) AND isset($_SESSION['admin']))
{
    echo '<br> &nbsp Bonjour <span style="color: orange;">'.$_SESSION['admin'].'</span>&nbsp'.'vous êtes connecter';
}
?>
