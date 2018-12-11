<?php


setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600);

try
{
			// Connexion à la base de données
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




if (isset($_POST['pseudo']) and isset($_POST['message']) and !empty($_POST['pseudo']) and !empty($_POST['message'])) 
   // On a le nom et le prénom

	   
{
 $req = $bdd->prepare('INSERT INTO minichat(pseudo,message,date) VALUES (?,?,now())');
$req->execute(array($_POST['pseudo'], $_POST['message']));





// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner un pseudo et un message ! <a href="http://localhost/tests/minichat.php">Cliquez ici pour revenir à la saisie du pseudo et du message </a>';

}

?>




