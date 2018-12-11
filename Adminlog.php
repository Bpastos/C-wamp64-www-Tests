<?php session_start()?>
<?php include('navbar.php'); ?>
<?php

if (isset($_SESSION['id']) AND isset($_SESSION['admin']))
{
    echo '<br> &nbsp Bonjour <span style="color: orange;">'.$_SESSION['admin'].'</span>&nbsp'.'vous êtes connecter';
}
?>
 	


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="style.css" rel="stylesheet" /> 
        <title >Administration </title>
    </head>
    <br>
      <h1 style="text-align:center;"class = "bleu focus-in-expand">Bienvenue sur la Page d'administration</h1>
<br>
<br>


<center>
 <button><em><a href="http://localhost/tests/inscriptionadmin.php">Crée un compte admin</a></em> </button>

     <button>  <em><a href="http://localhost/tests/connexionadmin.php">Se connecter en temps qu'admin </a></em> </button>

     <?php
if (empty($_POST['id'])&& empty($_POST['pseudo']))
{
echo  "veuillez vous identifier pour acceder a la page d'administration" ;

}
   ?> 
