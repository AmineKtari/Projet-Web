<?php
          include "../entities/livreur.php";
          include "../core/LivreurC.php";

            $livreurC=new livreurC();
             $result=$livreurC->recupererLivreur($_GET['cin']);
            foreach($result as $row)
            {
                $cin=$row['cin'];
                $nom=$row['nom'];
                $prenom=$row['prenom'];
                $tel=$row['tel'];
                $adresse=$row['adresse'];
              $vehicule=$row['vehicule'];
            }
    ?>