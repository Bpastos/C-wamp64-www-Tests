<?php session_start(); ?>
  <button="float: right;"class = ".bouton"><a href="http://localhost/tests/acceuil.php">Accueil</a>
     </button>
     
<?php

// si le billet dans l'url n'est pas définit alor on stop le script 

if (!isset($_GET['billet'])){

    echo "mauvaise url";
    exit();
}

?>



<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8" />
        <title>écrire un  commentaire</title>
        <link href="style.css" rel="stylesheet" /> 
https://www.tiny.cloud/get-tiny/
    </head>

     <h1 style="text-align:center;"class = "bleu focus-in-expand1">Commentaire</h1>
     <h2> Laisser un com ?</h2>
     <p><a href="http://localhost/tests/liste%20articles.php">Voir la liste des billets</a></p>
     <br>
<body>
    <div class="wrapper">
    <form action = "insertcom.php?billet=<?php echo $_GET['billet']; ?>" method ="POST">
        <br>
        <label for="author">Auteur du commentaire</label><br><input type="text" name="author"><br><br>
        <label for="comment">Votre commentaire</label>
        <br>
        <TEXTAREA name="comment"  rows=10 COLS=40> =) </TEXTAREA>
        <br><br>
        <input type="submit" name="crée le commentaire"/>
        <br>
   </form>
</body>
</html>


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

    // Récupération du billet
    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
    $req->execute(array($_GET['billet']));
    $donnees = $req->fetch();
?>

<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <em>le <?php echo $donnees['date_creation_fr']; ?></em>
    </h3>
    
    <p>
    <?php
        echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    </p>
</div>

<h2>Commentaires</h2>

<?php
$req->closeCursor(); // Important : on libère le curseur pour la prochaine requête

// Récupération des commentaires
$req = $bdd->prepare('SELECT id,author,report, comment, DATE_FORMAT(comment_date, \'%d\%m\%Y à %Hh%imin%ss\') AS comment_date FROM comments WHERE post_id = ? ORDER BY comment_date DESC' );
$requeteok = $req->execute(array($_GET['billet']));
if (!$requeteok) {
   echo "\r\nErreur SQL :\r\n";
   print_r($req->errorInfo());
}


while ($donnees = $req->fetch())
{
    ?>
<br>
<br>
<div style="padding:3px; border:4px inset #2D3435; background-color:#894226;">
<strong></strong>: 
 <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Science has not yet mastered prophecy
              </h2>
 <p><strong> Ecrit par :&nbsp<font color="#00EAFF"><?php echo htmlspecialchars($donnees['author']); ?></font></strong>

     le <?php echo $donnees['comment_date'];  ?>  <button style="padding:3px; border:4px inset #2D3435; background-color:#white;" ><em><a href="http://localhost/tests/modifcom.php?id=<?php echo $donnees['id'];?>&billet=<?php echo $_GET['billet'];?>">(Modifier)</a></em> </button>
     
    <button style="padding:3px; border:4px inset #2D3435; background-color:#white;" ><em> <a href="http://localhost/tests/supcom.php?id=<?php echo $donnees['id'];?>&billet=<?php echo $_GET['billet'];?>">(Supprimer)</a></em> </button>

<?php
if ($donnees['report'] ==1)
 {
    echo "Le commentaire est signaler";
}

else {
?>
     <button style="padding:3px; border:4px inset #2D3435; background-color:#white;" ><em> <a href="http://localhost/tests/signalcom.php?id=<?php echo $donnees['id'];?>&billet=<?php echo $_GET['billet'];?>">(Signaler)</a></em> </button>
     <?php
}
?>

 </p>
 </p>
    <p>
       <strong> Commentaire :&nbsp<font color="#F6FFEF"> <?php echo nl2br(htmlspecialchars($donnees['comment'])); ?></font></strong>
            </div>
        </p>
    <?php
} // Fin de la boucle des commentaires
$req->closeCursor();
?>
</body>
</html>






?>