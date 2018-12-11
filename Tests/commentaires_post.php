<?php session_start(); ?>
  <button="float: right;"class = ".bouton"><a href="http://localhost/tests/accueil.php">Accueil</a>
     </button>
<?php

try
{
            // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




if (isset($_POST['author']) and isset($_POST['comment']) and isset($_POST['comment_date']) 
    and !empty($_POST['author']) and !empty($_POST['comment']) and !empty($_POST['comment_date'])) 
   // On a le nom et le prénom

       
{
 $req = $bdd->prepare('INSERT INTO comments(author,comment,comment_date,post_id) VALUES (?,?,now())');
$req->execute(array($_POST['author'], $_POST['comment'], $_POST['comment_date']));





header('Location: commentaires.php');
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo '<a href="http://localhost/tests/commentaires.php">Retourner sur la page de création</a><br><br>';

}