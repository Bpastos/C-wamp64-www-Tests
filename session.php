<?php session_start();

//session pseudo

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
}
	else echo "Vous n'êtes pas inscrit, inscrivez vous pour vos connecter ";  


if (isset($_SESSION['id']) AND isset($_SESSION['admin']))
{
    echo 'Bonjour ' . $_SESSION['admin'];
}
	else echo "Vous n'êtes pas inscrit, inscrivez vous pour vos connecter ";

?>



<html>
<head>
<title>Espace membre</title>
</head>

<body>
	<?php if (isset($_SESSION['pseudo'])) {


		?>Bienvenue <?php echo htmlentities(trim($_SESSION['pseudo'])); ?> !<br />
<?php
	}
	?>

<a href="inscription.php">S'inscrire ?</a> ou alors revenez sur la page d'accueil <a href="acceuil.php">Accueil </a>
</body>
</html>