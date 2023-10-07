<?php

include("../../models/connect.php");


function getting_data_sessions($nom, $mdp){
    $pdo = connectDbFunction();
    $req = "SELECT * FROM admin WHERE nom=:nom and mdp =:mdp";
    $smt = $pdo->prepare($req);
    $smt -> execute(array(
        'nom' => $nom,
        'mdp' => $mdp
    ));

    $users_sessions = [];

    while($row = $smt->fetch()){
        $user_session =[
            'id' => $row['id'],
            'nom' => $row['nom'],
            'prenom' => $row['prenom'],
            'telephone' => $row['telephone'],
            'photo' => $row['photo']
        ];

        $users_sessions[] = $user_session;
    }

    return $users_sessions;
}