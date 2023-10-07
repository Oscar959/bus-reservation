<?php

 

require("../../models/connect.php");


function insertVoyage($uuid,$nbrePassager,$dateVoyage, $dateArrive, $Prix, $itineraire){

    $pdo = connectDbFunction();

    $smt = $pdo->prepare("INSERT INTO `voyage`(`id`, `nombrePassager`, `dateVoyage`, `dateArrive`, `prix`, `itineraire_id`) VALUES (:id, :nombrePassager,:dateVoyage, :dateArrive, :prix, :itineraire_id )");

   $smt->execute(array(
    'id' => $uuid,
    'nombrePassager' => $nbrePassager,
    'dateVoyage' => $dateVoyage,
    'dateArrive' => $dateArrive,
    'prix' => $Prix,
    'itineraire_id' => $itineraire
   ));

   return 1;
}
