<?php session_start(); ?>

<h3>Modifier un commentaires : </h3>
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
// Récupération des commentaires
$req = $bdd->prepare('SELECT author, comment FROM comments WHERE id = ?' );
$requeteok = $req->execute(array($_GET['id']));
if (!$requeteok) {
   echo "\r\nErreur SQL :\r\n";
   print_r($req->errorInfo());
}


if ($donnees = $req->fetch())
{
?>


<form action="http://localhost/tests/modifcom.php?id=<?php echo $_GET['id'];?>&billet=<?php echo $_GET['billet'];?>" method="POST">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" value="<?php echo $donnees['author'];?>" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"><?php echo $donnees['comment'];?></textarea>
    </div>
    <div>
        <input type="submit" value="Modifier" />
    </div>
</form>
<?php 
}
?>

 </body>
    </html>

<?php


if (isset($_POST['author']) and isset($_POST['comment'])
    and !empty($_POST['author']) and !empty($_POST['comment'])) {
   // On a le nom et le prénom

$request = $bdd->prepare('UPDATE comments SET comment = ?, author = ? WHERE id = ?');

$request->execute([$_POST['comment'],$_POST['author'],$_GET['id']]);
header("Location: commentaires.php?billet=".$_GET['billet']);
}
?>

<?php

if (isset($_SESSION['id']) AND isset($_SESSION['admin']))
{
    echo '<br> &nbsp Bonjour <span style="color: orange;">'.$_SESSION['admin'].'</span>&nbsp'.'vous êtes connecter';
}
?>
