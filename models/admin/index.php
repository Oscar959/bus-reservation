<?php

require("../../models/connect.php");


function login_admin_system($username, $password){
    
    $pdo = connectDbFunction();
    $query = $pdo->prepare("SELECT `nom`, `mdp` FROM admin WHERE nom=:nom AND mdp=:mdp");
    $query->execute(array(
        'nom'=> $username,
        'mdp' => $password
    ));


    if($query->rowCount()>0){
        return 1;
    }else{
        return 0;
    }
}

function login_user_system($username, $password){
    
    $pdo = connectDbFunction();
    $query = $pdo->prepare("SELECT `nom`, `mdp` FROM client WHERE nom=:nom AND mdp=:mdp");
    $query->execute(array(
        'nom'=> $username,
        'mdp' => $password
    ));


   
    if($query->rowCount()>0){
        return 1;
    }else{
        return 0;
    }
}