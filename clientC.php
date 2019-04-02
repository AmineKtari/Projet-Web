<?PHP
include "../config.php";
class clientC {
	function ajouterClient($client){
		
		$sql="insert into client (cin,nom,prenom,date_n,mail,adresse,num,point_f,mot_dp) values (:cin, :nom,:prenom,:date_n,:mail,:adresse,:num,:point_f,:mot_dp)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $cin=$client->getcin();
        $nom=$client->getnom();
        $prenom=$client->getprenom();
        $date_n=$client->getdaten();
        $mail=$client->getmail();
        $adresse=$client->getadresse();
        $num=$client->getnum();
        $point_f=$client->getpointf();
        $mot_dp=$client->getmotdp();

      	
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date_n',$date_n);
		$req->bindValue(':mail',$mail);
    	$req->bindValue(':adresse',$adresse);
    	$req->bindValue(':num',$num);
    	$req->bindValue(':point_f',$point_f);
    	$req->bindValue(':mot_dp',$mot_dp);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function AfficherClient(){

		$sql="SELECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function SupprimerClient($cin){
		$sql="DELETE FROM client where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function ModifierClient($client,$cin){
		$sql="UPDATE client SET point_f=:point_f WHERE cin=:cin";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);

		$point_f=$client->getpointf();
		
		
$req->bindValue(':point_f',$point_f);


            $s=$req->execute();

           //header('Location: product-list.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

	function recupererClient($cin){
		$sql="SELECT * from client where cin='$cin'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	/*function rechercherClient($cin){
		$sql="SELECT * from employe where cinn=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>