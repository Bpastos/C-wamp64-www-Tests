<?php

Que l'on puisse acceder a admin seulement si on est connecter  en temps que "$_session ['admin']" 
Reposne if !isset $_session admin alors page d'accueil 
///////////////////

adminlog se connecter en temps qu'admin meme probleme il n'ya pas de verification on arrive directement dans la page admin
Reposne if !isset $_session admin alors page d'accueil dans la page d'admin
////////////////////

Modifier un commentaire dans la page "admin" ne fonctionne pas car il n'a pas l'id en parametre 
Supprimer ce bouton inutile
////////////////////

Quand on s'inscrit en temps qu'admin une fois qu'on est sur la page admin ça ne s'écrit pas en haut de la page 
Je connais la réponse 
///////////////
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

// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id,auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d\%m\%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

while ($donnees = $req->fetch())
{
?>
//code pour recuperer les commentaires mais il me fais un unexpected end of file 










Rajouter un espace dans la barre de navigation entre adminisration et la barre de recherche  
mvc
orienter objet 
git hub 
design
Rajouter du contenu
Verification administration
