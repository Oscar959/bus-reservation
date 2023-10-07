<?php

require("../../models/connect.php");

function voyageDisponible(){
    $pdo = connectDbFunction();
    $query = $pdo->prepare("SELECT v.id AS voyage_id,nombrePassager, dateVoyage, dateArrive, prix, i.libelle AS itineraire_libelle
    FROM voyage AS v 
    INNER JOIN itineraire AS i 
    ON i.id=v.itineraire_id");
    $query->execute();

    $output = "";
    while ($row = $query->fetch()) {  
        $output .= "
                    <tr>
                        <td></td>
                        <td>".$row['nombrePassager']."</td>
                        <td>".$row['dateVoyage']."</td>
                        <td>".$row['dateArrive']."</td>
                        <td>".$row['prix']."</td>
                        <td>".$row['itineraire_libelle']."</td>
                        <td><button class='btn btn-primary btn-update' id=".$row['voyage_id']."><i class=' ri-edit-box-fill '></i></button></td>
                        <td><button class='btn btn-danger btn-click' id=".$row['voyage_id']."><i class='ri-delete-bin-6-fill'></i></button></td>
                    </tr>
                 ";
    }


    return $output;
}

function deleteTableElement($idVoyage){
    $pdo= connectDbFunction();
    $query = $pdo->prepare("DELETE FROM voyage WHERE id =:id");

    $query->execute(array(
        'id'=> $idVoyage
    ));

}

// modification du voyage 

function getTableElement($id){
    $pdo = connectDbFunction();
    $query = $pdo->prepare("SELECT * FROM voyage WHERE id= :id");
    $query->execute(array(
        'id'=>$id
    ));

    $output="";

    while($row=$query->fetch()){
        $output="
        <input type='hidden' value=".$row['id']." name='idVyg' id='idVyg' class='form-control'>
        <label for=''>nombre de Passager</label>
        <input type='number' name='nombrePassager' id='nombrePassager' placeholder='nombre de Passager' value=".$row['nombrePassager']." class='form-control'>
        <label for=''>Date du Voyage</label>
        <input type='datetime-local' name='dateVoyage' id='dateVoyage'  class='form-control'>
        <label for=''>date d'Arrive</label>
        <input type='datetime-local' name='dateArrive' id='dateArrive' class='form-control'>
        <label for=''>Prix</label> 
        <input type='number' name='prix' id='prix' placeholder='Prix' value=".$row['prix']." class='form-control'><br/>
        <div class='row mb-5 select-itineraire'>
            
        </div>

        <input type='submit' value='send' class='btn btn-primary mt-2'>
        ";
    }

    return $output;
}

function updateTableElement($nombrePassager,$dateArrivee,$dateVoyage,$prix, $itineraire,$id ){
    $pdo = connectDbFunction();
    $query = $pdo->prepare("UPDATE `voyage` SET `nombrePassager`=:nombrePassager,`dateVoyage`=:dateVoyage,`dateArrive`=:dateArrive,`prix`=:prix,`itineraire_id`=:itineraire WHERE id=:id");

    $query->execute(array(
        'nombrePassager'=>$nombrePassager,
        'dateVoyage'=>$dateVoyage,
        'dateArrive'=>$dateArrivee,
        'prix'=>$prix,
        'itineraire'=>$itineraire,
        'id'=>$id
    ));

    return 1;
}



?>