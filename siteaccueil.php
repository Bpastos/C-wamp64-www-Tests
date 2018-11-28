<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title >Accueil =)</title>
    </head>

    <h1 style="text-align:center;"class = "bleu focus-in-expand4">Bienvenue sur "LE" blog</h1>
    <h2 style="text-align:center;"class = "focus-in-expand">Vous êtes sur la page d'acceuil</h2>

    Vous trouverez sur "LE" blog plusieurs fonctionalité : <br> <br>
     <em><a href="http://localhost/tests/minichat.php">Un chat</a></em><br><br>
     <em><a href="http://localhost/tests/liste%20articles.php">Un blog</a></em><br><br>
     <em><a href="http://localhost/tests/creation%20article.php">Crée un article </a></em> <br><br>
     <em><a href="http://localhost/tests/commentaires.php">laisser un commentaire </a></em> 
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


    form {
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
