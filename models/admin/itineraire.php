<?php


require("../../models/connect.php");


function registerItineraire($libelle_itineraire, $uuid){

    $pdo = connectDbFunction();
    $query = $pdo->prepare("INSERT INTO `itineraire`(`id`, `libelle`) VALUES (:id, :libelle)");

    $query->execute(array(
        'id' => $uuid,
        'libelle' => $libelle_itineraire
    ));

    return "success";
}

function loadItineraire(){
    $pdo = connectDbFunction();
    $query = $pdo->prepare("SELECT * FROM `itineraire`");

    $query->execute();
    $output= "";

    while($row= $query->fetch()){
        $output .= 
        "
        <option value=".$row['id'].">".$row['libelle']."</option>
        ";
    }

    return $output;
}