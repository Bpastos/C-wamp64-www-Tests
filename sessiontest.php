<?php
session_start();
	$_session['prenom']='bertrand';
	$_session['nom']='dupont';
	$_session['age']=24
?>

<doctypehtml>
	<html>
		<HEAD>
			<p>
				Bonjour voici vos info de session :
			Tu t'appel <?php echo $_session ['prenom'];?> <br>
			Et ton nom est <?php echo $_session ['nom'];?> <br>
			et il me semble que tu as <?php echo $_session ['age'];?> ans. <br>
			</p>

              
              Pour acceder à l'espace menbre merci de taper votre login et votre mot de passe 

	<form  method = "post" action= "recsession.php">

	<p style="text-indent:30px;"> Login <input type="text" name="login"> <br> <br>
								  Mot de passe <input type="password" name="mdp"> <br> <br>
      							<input type="submit" value="valider">
<br>

	<p style="text-indent:30px;"> 	

		
</p>

	</form>
