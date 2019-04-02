<?PHP
class client{
	private $cin;
	private $nom;
	private $prenom;
	private $date_n;
	private $mail;
	private $adresse;
	private $num;
	private $point_f;
	private $mot_dp;
	
	function __construct($cin,$nom,$prenom,$date_n,$mail,$adresse,$num,$point_f,$mot_dp){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->date_n=$date_n;
		$this->mail=$mail;
		$this->adresse=$adresse;
		$this->num=$num;
		$this->point_f=$point_f;
		$this->mot_dp=$mot_dp;
		
		

	}
	
	function getcin(){
		return $this->cin;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getdaten(){
		return $this->date_n;
	}
	function getmail(){
		return $this->mail;
	}
    function getadresse(){
		return $this->adresse;
	}
	function getnum(){
		return $this->num;
	}
	function getpointf(){
		return $this->point_f;
	}
	function getmotdp(){
		return $this->mot_dp;
	}
	

	
	
}

?>