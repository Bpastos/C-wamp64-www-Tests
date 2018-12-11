<?php include('navbar.php'); ?>
  <button="float: right;"class = ".bouton"><a href="http://localhost/tests/acceuil.php"></a>
     </button>

<link href="bootstrap.css" rel="stylesheet">

<link href="style.css" rel="stylesheet">
   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- Custom styles for this template -->
   <link href="css/clean-blog.min.css" rel="stylesheet">
<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8" />
        <title>Création d'articles</title>
    <link href="style.css" rel="stylesheet" /> 
<head>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
 
</body>
    </head>
        
   
     <h1 style="text-align:center;"class = "bleu focus-in-expand1">Article</h1>
     <h2>Crée un article ?</h2>


 <p><a href="liste%20articles.php"> Voir la liste des billets</a></p><br>
 <body>
<div class="wrapper">
        <form action = "insert.php" method ="post">
        <p>
       <br>
            <label for="auteur">Auteur du billet</label>
        <br>
            <input type="text" name="auteur"/>
        <br>
            <label for="titre">Titre du billet</label>
        <br>
            <input type="text" name="titre"/>
  
        <br>
        <br>
            <label for="contenu">Votre billet</label>
        <br>

            <TEXTAREA name="contenu"  rows=10 COLS=40>Je suis un billet et j'ai plein d'idées =) </TEXTAREA> <P>
        <br>
        
        <br>
            <input type="submit" value="Crée le billet"/>
        <br>
</p>
</form>
</html>

