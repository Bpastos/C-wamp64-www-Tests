<?php include('navbar.php'); ?>

<?php include 'db.php'; ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
   <body>
 <hr />
<form action="inscription.php" method="post">
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
 $req = $bdd->prepare('INSERT INTO membres(pseudo,email,pass) VALUES (?,?,?)');
$req->execute(array($_POST['pseudo'],$_POST['email'], $_POST['pass']));


              //last insert s'active sur la bdd pas sur $req
        $_SESSION['id'] = $bdd->lastInsertId();
        $_SESSION['pseudo'] = $_POST['pseudo'];
        echo 'Vous êtes connecté ! <a href="http://localhost/tests/accueil.php">Retourner a l"accueil ?</a>';

}

//header('Location: session.php');
?> 

</body>
 </html>



