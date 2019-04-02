<?php
class commande{
	private $num;
	private $nom;
	private $prenom;
	private $adress;
	private $date;
	private $etat;
	private $prixtotal;

   function __construct ($num,$nom,$prenom,$adress,$date,$etat,$prixtotal)
   {
   	 $this->num=$num;
   	 $this->nom=$nom;
   	 $this->prenom=$prenom;
   	 $this->adress=$adress;
   	 $this->date=$date;
   	 $this->etat=$etat;
   	 $this->prixtotal=$prixtotal; 

   }
   function getnum()
   {return $this->num;}

   function getnom()
   {return $this->nom;}

   function getprenom()
   {return $this->prenom;}

   function getadress()
   {return $this->adress;}

   function getdate()
   {return $this->date;}

   function getetat()
   {return $this->etat;}

   function getprixtotal()
   {return $this->prixtotal;}
}   