<?php
class personnage 
{

	//je rappele : tous les atributs en privé 

	private $_force;
	private $_localisation;
	private $_experience;
	private $_degats;
}

// Déclaration des constantes en rapport avec la force .

const force_petite = 20;
const force_moyenne = 50 ;
const force_grande =80;

// getter est une methode cahrgée de renvoyer la valeur d'yn atribut
// seter charge d'assigner la valeur en verifiant son integriter  

public function __construct($forceinitiale)

{

$this->setforce($forceinitiale);

}



public function deplacer()

{

}

public function frapper()
{

}

public function gagnerexperience()
{

	}

public function setforce($force)
{

	if (in_array($force, [self::force_petite, self:: force_moyenne, self::force_grand]))
	{
		$this->_force = $force;
	}

}

$perso =new personnage(personnage::force_moyenne);


//L'opérateur « -> » permet d'accéder à un élément de tel objet, tandis que l'opérateur « :: » permet d'accéder à un élément de telle classe.