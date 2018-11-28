<link href="bootstrap.css" rel="stylesheet">

<?php session_start(); ?>


  <button><a href="http://localhost/tests/acceuil.php">Accueil</a>
     </button>



<?php

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo '<br> &nbsp Bonjour <span style="color: orange;">'.$_SESSION['pseudo'].'</span>&nbsp'.'vous êtes connecter';
}
?>

<?php
if (isset($_SESSION['id']) AND isset($_SESSION['admin']))
{
    echo '<br> &nbsp Bonjour <span style="color: orange;">'.$_SESSION['admin'].'</span>&nbsp'.'vous êtes connecter';
}
?>


    <!--    /> -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
     <link href="style.css" rel="stylesheet"
        <title >Accueil =)</title>
    </head>
    <br>
	<h2 style="text-align:center;"class = "focus-in-expand">Page d'acceuil</h2>
      <h1 style="text-align:center;"class = "bleu focus-in-expand4">Bienvenue sur "LE" blog</h1>
   

   <h3> Vous trouverez sur "LE" blog plusieurs fonctionalité </h3>

    <br>

     <button><em><a href="http://localhost/tests/minichat.php">Un chat</a></em> </button>

     <button>  <em><a href="http://localhost/tests/creation%20article.php">Crée un article </a></em> </button>

	   <button>  <em><a href="http://localhost/tests/liste%20articles.php">La liste des articles</a></em></button>

     <button> <em><a href="http://localhost/tests/commentaires.php">Laisser un commentaire </a></em> </button>

      <button> <em><a href="http://localhost/tests/inscription.php">S'inscrire </a></em> </button>

      <button> <em><a href="http://localhost/tests/connexion.php">Se connecter</a></em> </button>

      <button> <em><a href="http://localhost/tests/deconnexion.php">Se deconnecter</a></em> </button>

      <button> <em><a href="http://localhost/tests/adminlog.php">Administration</a></em> </button>
 </center>


    <body>



<br>
