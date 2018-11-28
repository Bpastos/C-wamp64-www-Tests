 

<link href="bootstrap.css" rel="stylesheet">

<link href="style.css" rel="stylesheet">
   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- Custom styles for this template -->
   <link href="css/clean-blog.min.css" rel="stylesheet">
    <!-- link css de l'image de fond -->
  <button="float: right;"class = ".bouton"><a href="http://localhost/tests/acceuil.php">Accueil</a>
     </button>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Le blog, liste des articles</title>
	<link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1 style="text-align:center;"class = "bleu focus-in-expand1">Liste des articles</h1>
        <p>Derniers billets du blog :</p>
 
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

// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id,auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d\%m\%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

while ($donnees = $req->fetch())
{
?>

<div class="news"    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
  <div class="card-header"><?php ($donnees['auteur']); ?></div>
  <div class="card-body">
    <h4 class="card-title">Warning card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>>
     <h3 class="orange">
        <?php echo htmlspecialchars($donnees['auteur']); ?>
        <br>
    <h3 class="orange">
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <br>
         <h3 class="orange">
        <em> le <?php echo $donnees['date_creation_fr']; ?></em>
    </h3>


}  

  </div>
</div>

    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    <br />
    <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
    </p>
</div>
<?php
} // Fin de la boucle des billets
$req->closeCursor();


?>


</body>
</html>

