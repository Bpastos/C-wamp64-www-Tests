
<?php session_start(); ?>






<?php

if (isset($_SESSION['admin']) AND isset($_SESSION['pass']))
{
    echo '<br> &nbsp Bonjour <span style="color: orange;">'.$_SESSION['admin'].'</span>&nbsp'.'vous êtes connecter';
}
?>


<?php
if(!isset($_SESSION['admin']))
{
header('Location:accueil.php');

}

?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="style.css" rel="stylesheet" /> 
        <title >Administration </title>
    </head>
    <br>
      <h1 style="text-align:center;"class = "bleu focus-in-expand">Bienvenue sur la Page d'administration</h1>
<br>
<br>



<em><a href="http://localhost/tests/modifcom.php">Modifier un commentaire</a></em></button>-->

<button>  <em><a href="http://localhost/tests/supcom.php">Supprimer un commentaire</a></em></button>

</center>


<br>
<br>



<h3>Liste des commentaires Signaler : </h3>
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
$req = $bdd->query('SELECT * FROM comments WHERE report = 1' );
if (!$req) {
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

 <p><strong> Ecrit par :&nbsp<font color="#00EAFF"><?php echo htmlspecialchars($donnees['author']); ?></font></strong>

     le <?php echo $donnees['comment_date'];  ?>  


 </p>
 </p>
    <p>
       <strong> Commentaire :&nbsp<font color="#F6FFEF"> <?php echo nl2br(htmlspecialchars($donnees['comment'])); ?></font></strong>
            </div>
        </p>
<button style="padding:3px; border:4px inset #2D3435; background-color:#white;" ><em> <a href="http://localhost/tests/supcom.php?id=<?php echo $donnees['id'];?>&billet=<?php echo $donnees['post_id'];?>">(Supprimer)</a></em> </button>

<button style="padding:3px; border:4px inset #2D3435; background-color:#white;" ><em> <a href="http://localhost/tests/designalcom.php?id=<?php echo $donnees['id'];?>&billet=<?php echo $donnees['post_id'];?>">(Retirer le signalement )</a></em> </button>
<?php 
}
?>

<?php

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo '<br> &nbsp Bonjour <span style="color: orange;">'.$_SESSION['pseudo'].'</span>&nbsp'.'vous êtes connecter';
}
?>
