  <button="float: right;"class = ".bouton"><a href="http://localhost/tests/acceuil.php">Accueil</a>
     </button>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="style.css" rel="stylesheet" /> 
        <title >Connexion</title>
    </head>
    <br>
	<h2 style="text-align:center;"class = "focus-in-expand">Vous êtes sur la page de connexion</h2>
      <h1 style="text-align:center;"class = "bleu focus-in-expand4">Vous avez déjà un compte ? connecter vous !</h1>
   
<?php 
session_start(); ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
   <body>
 <hr />
 <br>
    <br>
<form action="session.php" method="post">
Pseudo : <input type="text" name="pseudo" value="<?php if(isset($_POST['pseudo'])) { echo $_POST['pseudo']; } ?>"/><br />

Mot de passe : <input type="password" name="pass" value="<?php if(isset($_POST['pass'])) { echo $_POST['pass']; } ?>"/><br />
Mot de passe confirmation : <input type="password" name="pass2" value="<?php if(isset($_POST['pass2'])) { echo $_POST['pass2']; } ?>"/><br />

Email : <input type="text" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>"/><br />

<input type="submit" name="envoyer" value="Se connecter">
</form>


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




if (isset($_POST['pseudo']) and isset($_POST['pass2']) and isset($_POST['email']) and isset($_POST['pass'])
    and !empty($_POST['pseudo']) and !empty($_POST['pass2']) and !empty($_POST['email']) and !empty($_POST['pass'])) 
   // On a le nom et le prénom

       
{
                           //last insert s'active sur la bdd pas sur $req
        $_SESSION['id'] = $bdd->lastInsertId();
        $_SESSION['pseudo'] = $_POST['pseudo'];
        echo 'Vous êtes connecté !';


}

//header('Location: session.php');
?> 



<?php

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))

{


    echo '<br>'.'&nbsp'. 'Bonjour ' . $_SESSION['pseudo'] .' vous êtes connecter ';
}

 ?>
