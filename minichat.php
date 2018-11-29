<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title >chatV2!</title>
    </head>

    <h1 style="text-align:center;"class = "bleu focus-in-expand1">Hello world</h1>
    <h2 style="text-align:center;"class = "focus-in-expand">Minichat V2</h2>
  

    <style>
    /*arriere plan */ 
    body{
            height:100%;
             width:100%;
              background-image:url("C:/Users/Pc Bertrand/Desktop/bl.jpg");/*your background image*/  
              background-repeat:no-repeat;/*on veux une seul image donc no repeat*/  
              background-size:cover;/*c'est se qui met l'image en pleinne écran*/  

             filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"C:/Users/Pc Bertrand/Desktop/bl.jpg"',sizingMethod='scale');
            -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='feux.jpg',sizingMethod='scale')";
            /*le code pour l'effet  sur le titre ! =) */
        }

shareimprove this answer

   @-webkit-keyframes focus-in-expand 
   {

  0% 

  {
    letter-spacing: -0.5em;
    -webkit-filter: blur(12px);
            filter: blur(12px);
    opacity: 0;
  }

  100% 
  {

    -webkit-filter: blur(0px);
            filter: blur(0px);
            opacity: 1;
 }


}
@keyframes focus-in-expand 
{
  0% 

  {
    letter-spacing: -0.5em;
    -webkit-filter: blur(12px);
            filter: blur(12px);
    opacity: 0;
  }
  100% {
    -webkit-filter: blur(0px);
            filter: blur(0px);
    opacity: 1;
  }
}



.focus-in-expand {
            -webkit-animation: focus-in-expand 2s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                    animation: focus-in-expand 2s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}
.focus-in-expand1 {
            -webkit-animation: focus-in-expand 6s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                    animation: focus-in-expand 6s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

  .bleu {
            color: #4d4dff;
            }


   {
         margin: auto;
            width: 350px;
             border: 1px solid black;
              text-align: right;
               padding: 25px;
              /*   margin: 50px; /* Marge extérieure de 50px */
}

 form
    {
        text-align:center;
    }

</style>


    <body>


<br>


            <form action="minichat_post.php" method="post">
             <p>
                <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="<?php if (isset($_COOKIE['pseudo']))
{
    echo $_COOKIE['pseudo'];
}
else
{
    echo 'pseudo';
} ?> " /> 
<br/>

    <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />



        <input type="submit" value="Envoyer" />

    </p>
    </form>





  <br>
  <br>





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

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message, date FROM minichat ORDER BY ID DESC LIMIT 0, 20');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo date('d/m/Y H:i', strtotime($donnees['date'])).'<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
    </body>
</html>

echo '<br><span style="color: orange;">'.$_SESSION['admin'].'</span>&nbsp'.'vous êtes connecter';