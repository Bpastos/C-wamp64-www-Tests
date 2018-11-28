<?php include 'db.php'; 
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['envoyer']) && $_POST['envoyer'] == 'envoyer')

{
	// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if (isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['pass2']) && !empty($_POST['pass2']) && isset($_POST['email']) && !empty($_POST['email']))
	{
		// on teste les deux mots de passe
		if ($_POST['pass'] != $_POST['pass2'])
		{
				$erreur = 'Les 2 mots de passe sont différents.';

		
	}

	$req = $bdd->prepare('SELECT count(*) FROM membres WHERE pseudo= '.$_POST['pseudo'].'AND pass = '.$_POST['pass'].'');
	$req->execute();

$req = $bdd->fetch(PDO::FETCH_ASSOC);
	$result = mssql_fetch_array($req);
$req->closeCursor();
//$result = $req->fetch(PDO::FETCH_ASSOC);

if ($result[0] == 1) {

	session_start();
		$_SESSION['pseudo'] = $_POST['pseudo'];
			header('Location: session.php');
				exit();


}
	}

}







?>

<html>
<head>
	<title>acceueil</title>
</head>
<body>

</body>


Inscription à l'espace membre :<br />
<form action="inscription.php" method="post">
Pseudo : <input type="text" name="pseudo" value="<?php if (isset($_POST['pseudo'])) echo htmlentities(trim($_POST['pseudo'])); ?>"><br />

Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />

Confirm pass : <input type="password" name="pass2" value="<?php if (isset($_POST['pass2'])) echo htmlentities(trim($_POST['pass2'])); ?>"><br />

email: <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"><br />

<br />
<input type="submit" name="envoyer" value="envoyer">
</form>


</html>