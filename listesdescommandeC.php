<?PHP
include "../config.php";
class commandeC {
	function ajouterCommande($commande){
		
		$sql="insert into commande (num,nom,prenom,adress,date,etat,prixtotal) values (:num,:nom,:prenom,:adress,:date,:etat,:prixtotal)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $num=$commande->getnum();
      	$nom=$commande->getnom();
      	$prenom=$commande->getprenom();
      	$adress=$commande->getadress();
      	$date=$commande->getdate();
      	$etat=$commande->getetat();
      	$prixtotal=$commande->getprixtotal();
      	
		$req->bindValue(':num',$num);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':date',$date);
    	$req->bindValue(':etat',$etat);
    	$req->bindValue(':prixtotal',$prixtotal);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherCommande(){

		$sql="SELECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerCommande($num){
		$sql="DELETE FROM commande where  num=:num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierCommande($commande,$num){
		$sql="UPDATE commande SET etat=:etat WHERE num=:num";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);

		$etat=$commande->getetat();
      	
	
    	$req->bindValue(':etat',$etat);
            $req->execute();

           //header('Location: product-list.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

	function recupererCommande($num){
		$sql="SELECT * from commande ORDER BY num "; /*where num='$num'";*/
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
}

?>