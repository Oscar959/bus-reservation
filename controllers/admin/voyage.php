<?php


require("../../models/admin/voyage.php");


if(isset($_POST['nbrePassager'])){
    $nbrePassager = $_POST['nbrePassager'];
    $dateVoyage = $_POST['dateVoyage'];
    $dateArrive = $_POST['dateArrive'];
    $Prix = $_POST['Prix'];
    $itineraire = $_POST['itineraire'];

    $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4));

    $status = insertVoyage($uuid,$nbrePassager,$dateVoyage, $dateArrive, $Prix, $itineraire);


    if($status === 1){
        echo "success";
    }
}