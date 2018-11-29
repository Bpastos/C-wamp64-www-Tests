<?php
class personnage 

{
	
	//STATS
	private $_force;
	private $_inteligence;
	private $_agilite;
	private $_defensse;


		//XP
	private $_experience = 25;

		//MAGIE
	private $_boule_de_feu = 4;
	private $_eclair = 3;
	private $_givre = 2 ;

	private $soin;






//FONCTIONS


public function soigner() // plus la force est grand Plus la vie augmente

{

}

public function magie ()// plus inteligence est grand plus le personnage fais des degats  fais des degats

{
  
}

public function dégats() // plus l'agiliter est grrande plus personnage fais des degats 

{

}

public function  gagnerexperience()

{
   $this->_experience +1;
   
}


public function  affichexp()

{
  echo  $this->_experience ;
   
}



public function se_defendre ()
{
	}

}

/////////




//Pour appeler une méthode d'un objet, il va falloir utiliser un opérateur : il s'agit de l'opérateur ->




$guerrier = new personnage;

$guerrier->gagnerexperience();
$guerrier->affichexp();






/////////



$mage = new personnage;



