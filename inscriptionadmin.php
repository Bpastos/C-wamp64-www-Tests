<?php session_start(); ?>
  <button="float: right;"class = ".bouton"><a href="http://localhost/tests/acceuil.php">Accueil</a>
     </button>
       <br>
       <br>
<?php include 'db.php'; ?>

 <!DOCTYPE html>
 <html>
 <head>
  <title>Inscription admin</title>
 </head>
   <body>

 Création d'un compte admin 
   <br>
       <br>

<form action="inscriptionadmin.php" method="post">
Pseudo : <input type="text" name="admin" value="<?php if(isset($_POST['admin'])) { echo $_POST['admin']; } ?>"/><br />

Mot de passe : <input type="password" name="pass" value="<?php if(isset($_POST['pass'])) { echo $_POST['pass']; } ?>"/><br /> <br>

<input type="submit" name="envoyer" value="Inscription"> 
</form>

 



<?php

try
{
         
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




if (isset($_POST['admin']) and isset($_POST['pass'])
    and !empty($_POST['admin']) and !empty($_POST['pass']))
   // On a l'admin et le pass

       
{
 $req = $bdd->prepare('INSERT INTO admin(admin,pass,) VALUES (?,?,)');
$req->execute(array($_POST['admin'],$_POST['pass']));


              //last insert s'active sur la bdd pas sur $req
        $_SESSION['id'] = $bdd->lastInsertId();
        $_SESSION['admin'] = $_POST['admin'];
        echo 'Vous êtes inscrit !' ;

         

}

//header('Location: connexionadmin.php');
?> 

</body>
 </html>

