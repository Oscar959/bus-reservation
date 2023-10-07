<?php

require("../../models/admin/voyage_disponible.php");

if(isset($_POST['voyageDispo'])){
    $output= voyageDisponible();

    echo $output;
}
// la suppression du voyage
if(isset($_POST['id'])){
    $idVoyage = $_POST['id'];

    $output = deleteTableElement($idVoyage);

    if($output === 1){
        echo "tokos";
    }
}

// la modification du voyage
else if(isset($_POST['id_voyage']) ){

    $id = $_POST['id_voyage'];

    $output = getTableElement($id);

    echo $output;

}else if(isset($_POST['nombrePassager']) ){

    $nombrePassager = $_POST['nombrePassager']; 
    $dateArrivee = $_POST['dateArrivee'];
    $dateVoyage = $_POST['dateVoyage'];
    $prix = $_POST['prix'];
    $itineraire = $_POST['itineraire'];

    $id = $_POST['idVyg'];
    $output = updateTableElement($nombrePassager,$dateArrivee,$dateVoyage,$prix, $itineraire, $id );

    if($output ===1){
        echo "esimbi";
    }
}