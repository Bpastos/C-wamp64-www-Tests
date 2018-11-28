<?php include 'db.php'; 
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['envoyer']) && $_POST['envoyer'] == 'envoyer')

{
  // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
  if (isset($_POST['admin']) && !empty($_POST['admin']) && isset($_POST['pass']) && !empty($_POST['pass']))
  {
    // on teste les deux mots de passe
    if ($_POST['pass'] != $_POST['pass'])
    {
        $erreur = 'Les 2 mots de passe sont différents.';

  }

  $req = $bdd->prepare('SELECT count(*) FROM admin WHERE admin= '.$_POST['admin'].'AND pass = '.$_POST['pass'].'');
  $req->execute();

$req = $bdd->fetch(PDO::FETCH_ASSOC);
  $result = mssql_fetch_array($req);
$req->closeCursor();
//$result = $req->fetch(PDO::FETCH_ASSOC);

if ($result[0] == 1) {

  session_start();
    $_SESSION['admin'] = $_POST['admin'];
      header('Location: sessionadmin.php');
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
admin : <input type="text" name="admin" value="<?php if (isset($_POST['admin'])) echo htmlentities(trim($_POST['admin'])); ?>"><br />

Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />



<br />
<input type="submit" name="envoyer" value="envoyer">
</form>


</html>