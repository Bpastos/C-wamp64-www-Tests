
<doctypehtml>
	<html>
		<HEAD>
<H1>Bienvenue ! vous etes sur une page sécuriser</H1>

	<p>

Votre login est :			<?php  	echo $_POST ['login'];?> <br>
Votre mot de passe est :	<?php 	echo $_POST['mdp'] ; ?>  <br>

</P>

<?php 
if (isset($_POST['mdp']) and $_POST ['mdp'] == "dtbdoax")

    {
    // On affiche les codes
    ?>
    	<h1>Mdp correct ! </h1>
        <h2>Voici les codes d'accès :</h2>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>
       <br />
        </p>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<h1>Mot de passe incorrect<h1>';
    }
    ?>
    
        
    </body>