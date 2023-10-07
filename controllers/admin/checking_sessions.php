<?php


require("../../models/admin/checking_sessions.php");

if (isset($_SESSION['nom']) and ($_SESSION['mdp'])) {
} else {
    header('location:../../../../');
}

    // storing sessions variables into varaibles in order to make a clear query to the the db by selecting all the informations
    $nom = $_SESSION['nom'];  
    $mdp = $_SESSION['mdp'];

    $sessions=getting_data_sessions($nom,$mdp);

    

