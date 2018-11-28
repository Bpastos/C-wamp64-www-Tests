<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$request = $bdd->prepare('insert into billets(titre,auteur,contenu,date_creation) values(?,?,?,now())');
$request->execute(array($_POST['titre'],$_POST['auteur'],$_POST['contenu']));
	// Chaque valeur du tableau est remplacer par les points d'intergation

header('Location: liste articles.php');