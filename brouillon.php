<?php
$num = 5;
echo "Il y a $num singes"
?>



<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
}
	catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
		$reponse = $bdd->query('select nom from commentaire');

// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
{
echo $donnees['nom'] ;
}


$reponse->closeCursor(); // Termine le traitement de la requête
?>