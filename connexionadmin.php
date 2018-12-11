<?php session_start() ?>   
  <button="float: right;"class = ".bouton"><a href="http://localhost/tests/acceuil.php">Accueil</a>
     </button>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="style.css" rel="stylesheet" /> 
        <title >Connexion admin</title>
    </head>
    <br>
	<h2 style="text-align:center;"class = "focus-in-expand">Vous êtes sur la page de connexion de l'admin</h2>
      <h1 style="text-align:center;"class = "bleu focus-in-expand4">Vous avez déjà un compte ? connecter vous !</h1>
   


 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
   <body>
 <hr />
 <br>
    <br>
<form action="connexionadmin.php" method="post">
Pseudo : <input type="text" name="admin" value="<?php if(isset($_POST['admin'])) { echo $_POST['admin']; } ?>"/><br />

Mot de passe : <input type="password" name="pass" value="<?php if(isset($_POST['pass'])) { echo $_POST['pass']; } ?>"/><br />


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
?>

<?php

if (isset($_POST['admin']) and isset($_POST['pass']) and !empty($_POST['admin']) and !empty($_POST['pass'])) 
   // Si on a bien renseigner admin et pass alor : 

{
                           //last insert s'active sur la bdd pas sur $req
        $_SESSION['id'] = $bdd->lastInsertId();
        $_SESSION['admin'] = $_POST['admin'];
        echo 'Vous êtes connecté !';
        header('Location: admin.php');

}





?> 






<?php

if (isset($_SESSION['id']) AND isset($_SESSION['admin']))

{


    echo '<br>'.'&nbsp'. 'Bonjour ' . $_SESSION['admin'] .' vous êtes connecter ';
}

 ?>


    