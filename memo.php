<?php
function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}


Difference entre (!'isset') et ('empty') ? 
(!'isset') permet de savoir si la varibale existe ou pas 

('empty') sert a verifier si cest vide ou pas 

<!-- Ceci est un commentaire, il ne 
sera pas affiché dans le navigateur -->


<img src="Img/alaska.jpg" border=0 width=500 height=250>

Très utile pour fchanger la taille de l'image juste jouer avec witdh et height



Faire un site qui s'apelle jechange monimage.com


<?php include('navbar.php'); ?>
https://leaverou.github.io/bubbly/

<span style="color: blue;">

  <?php include('chat.css'); ?>
    <link href="chat.css" rel="stylesheet">

<?php
if (isset($_SESSION['id']) AND isset($_SESSION['admin']))
{
    echo '<br><span style="color: orange;">'.$_SESSION['admin'].'</span>&nbsp'.'vous êtes connecter';
}
?>


<p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    <br />
    <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
    </p>
</div>
<?php
} // Fin de la boucle des billets
$req->closeCursor();
 