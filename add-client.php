<?PHP
include "../entities/client.php";
include "../core/clientC.php";

$client1=new client($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['date_n'],$_POST['mail'],$_POST['adresse'],$_POST['num'],0,$_POST['mot_dp']);

$client1C=new clientC();
$client1C->ajouterClient($client1);
//header('Location: test.html');


?>