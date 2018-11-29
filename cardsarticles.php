<?php session_start()?>

<center>
<div class="p-3 my-3 text-white-50 bg-purple rounded shadow-sm ">
<div class="lh-100"> 
<em><span style="color: Red;"> <font size="7"> <font face="Times New Roman"> Les derniers articles du blog !</font></font> <h6 class="mb-0 text-white lh-100"></h6>                                                  
        </div>
      </div>
</div>
</center> 
    
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
$req = $bdd->query('SELECT id,auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d\%m\%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0,5');

while ($donnees = $req->fetch())
{
?>


<!DOCTYPE html>
<html>
<head>
  <title>Liste articles</title>

</head>
<body>
  


<p>
   <div class="center-div">
    <div class="container">
    <!-- Cards bleu -->
     <div class="outer-div"><div class="inner-div"></div>
    <div class="card text-white bg-primary mb-3" style=": 70rem;">    
  <div class="card-header">Titre :  <?php echo htmlspecialchars($donnees['titre']); ?></div>
 <div class="card-body">
    <h4 class="card-title">Auteur du post : <?php echo htmlspecialchars($donnees['auteur']); ?></h4>
    <p class="a.btn"><h4 class="card-title"><?php echo $donnees['contenu']; ?></h4>       </p></p>
  </div>
</div>
    <br/>
    </p>


<p>
    
           <!-- Cards jaune -->
  <div class="card text-white bg-warning mb-3" style=": 70rem;">    
  <div class="card-header">Titre :  <?php echo htmlspecialchars($donnees['titre']); ?></div>
 <div class="card-body">
    <h4 class="card-title">Auteur du post: <?php echo htmlspecialchars($donnees['auteur']); ?></h4>
    <p class="a.btn"><h4 class="card-title"><?php echo $donnees['contenu']; ?></h4>       </p>
  </div>
</div>
    <br />
    </p>
</div>

<?php
} // Fin de la boucle des billets
$req->closeCursor();



?>



</body>
</html>
     