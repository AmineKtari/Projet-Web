<?PHP
include "../entities/produit.php";
include "../core/ProduitC.php";


$image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
$produit1=new produit($_POST['ref'],$_POST['title'],$_POST['price'],$_POST['qt'],$_POST['des'],$_POST['cat'],$imgContent);

$produit1C=new produitC();
$produit1C->ajouterProduit($produit1);
header('Location: product-list.php');


?>
