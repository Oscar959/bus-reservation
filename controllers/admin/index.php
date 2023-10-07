<?php

session_start();

require("../../models/admin/index.php");

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $status = login_admin_system($username, $password);

    if ($status == "admin") {
        $_SESSION['nom'] = $username;
        $_SESSION['mdp'] = $password;
        
        echo "admin";

    }else{
        $output = login_user_system($username, $password);

        if($output === 1){
            $_SESSION['nom'] = $username;
            $_SESSION['mdp'] = $password;

            echo "users";
        }
    }
}
