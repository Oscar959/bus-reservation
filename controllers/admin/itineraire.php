<?php



require("../../models/admin/itineraire.php");


if(isset($_POST['itineraire'])){
  $libelle_itineraire = $_POST['itineraire'];
  $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4));
  $status = registerItineraire($libelle_itineraire, $uuid);


    if($status === "success"){
        echo "success";
    }

}else if (isset($_POST['itineraireList'])){
    $status = loadItineraire();

    echo $status;
}

