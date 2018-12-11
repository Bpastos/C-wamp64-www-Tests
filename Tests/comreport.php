
<h3>Liste des commentaires Signaler: </h3>
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



if (isset($_GET['id'])) {
   // 


$request = $bdd->prepare('SELECT * FROM comments WHERE report = 1 WHERE id = ?');
//execute : variable qui remplace les points d'intérogattion
$request->execute([$_GET['id']]);
}
?>