   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- Custom styles for this template -->
   <link href="css/clean-blog.min.css" rel="stylesheet">
    <!-- link css de l'image de fond -->

<!DOCTYPE html>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<a href="accueil" class="btn-info">
    <img src="Img/alaska.jpg" border=0 width=200 height=80>
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item active">                 <!--Nav bar -->
        <a class="nav-link" href="http://localhost/tests/minichat.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLe chat</a>

      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/tests/creation%20article.php">Crée un article </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/tests/liste%20articles.php">La liste des articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/tests/commentaires.php">Laisser un commentaire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/tests/inscription.php">Inscription</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/tests/connexion.php">Se connecter</a>
      
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/tests/deconnexion.php">Déconnexion</a>

      </li>
         <li class="nav-item">
        <a class="nav-link" href="http://localhost/tests/adminlog.php">Administration </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="http://localhost/tests/adminlog.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
        </li>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Rechercher ?">
      <button class="btn btn-secondary my-2 my-sm-0"type="submit">Ok</button>

    </form>
  </div>
</nav>  

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('Img/image.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="display-4">Full Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>
  </div>
</section>

 <div class="container"> 

<div class="jumbotron">
  <h1 class="display-3">Bonjour<?php

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo '<br><span style="color: orange;">'.$_SESSION['pseudo'].'</span>&nbsp'.'vous êtes connecter';
}
?>

<?php
if (isset($_SESSION['id']) AND isset($_SESSION['admin']))
{
    echo '<br><span style="color: orange;">'.$_SESSION['admin'].'</span>&nbsp'.'vous êtes connecter';
}
?>!</h1>
  <p class="lead">Bienvenue sur votre blog.Vous allez à présent pouvoir laisser libre cours a votre imagination !</p>
  <hr class="my-4">
  <p>Pourquoi ne pas commencer directement par créer votre premier article ?!.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="http://localhost/tests/creation%20article.php" role="button">GO !  </a>


  </p>
</div>




</body>
</html>

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
$req = $bdd->query('SELECT id,auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d\%m\%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 1');

while ($donnees = $req->fetch())
{
?>
<font size="5"><font face="Times New Roman"><p class="text-info">Les 2 derniers billets du blog :.</p></font></font>
  </div>
</div>
<p>
   <div class="center-div">
    <div class="container">
    <!-- Cards bleu -->
     <div class="outer-div"><div class="inner-div"></div>
    <div class="card text-white bg-primary mb-3" style=": 70rem;">    
  <div class="card-header">Titre :  <?php echo htmlspecialchars($donnees['titre']); ?></div>
 <div class="card-body">
    <h4 class="card-title">Auteur du post : <?php echo htmlspecialchars($donnees['auteur']); ?></h4>
    <p class="a.btn"><h4 class="card-title"><?php echo $donnees['contenu']; ?></h4>       </p></p>
  </div>
</div>
    <br/>
    </p>


<p>
    
           <!-- Cards jaune -->
  <div class="card text-white bg-warning mb-3" style=": 70rem;">    
  <div class="card-header">Titre :  <?php echo htmlspecialchars($donnees['titre']); ?></div>
 <div class="card-body">
    <h4 class="card-title">Auteur du post: <?php echo htmlspecialchars($donnees['auteur']); ?></h4>
    <p class="a.btn"><h4 class="card-title"><?php echo $donnees['contenu']; ?></h4>       </p>
  </div>
</div>
    <br />
    </p>
</div>

<?php
} // Fin de la boucle des billets
$req->closeCursor();



?>


<br>
<br>
<br>


 <blockquote class="blockquote">
 <font size="5"><font face="Times New Roman">Ayez le courage de suivre votre coeur et votre intuition. L'un et l'autre savent ce que vous voulez réellement devenir. Le reste est secondaire.</font></font>  <p class="mb-0"></p>
  <footer class="blockquote-footer" ><font size ="2"face="Times New Roman">Steve Jobs (1955 - 2011) </font><cite title="">Informaticien et Inventeur</cite></footer>
</blockquote>

<br>
<br>
<br>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

