<?PHP
include "../entities/listesdescommande.php";
include "../core/listesdescommandeC.php";

$commande1=new commande($_POST['num'],$_POST['nom'],$_POST['prenom'],$_POST['adress'],$_POST['date'],$_POST['etat'],$_POST['prix']);

$commande1C=new commandeC();
$commande1C->ajouterCommande($commande1);
//header('Location: sav.html');


?>