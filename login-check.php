<?php
//moet gebeuren
include "database.php";

session_start();

    $_SESSION["wrong_password"] = true; 

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
    
    $result = mysqli_query($conn, $sql);

    $user = $result->fetch_assoc();


    if(!$row = mysqli_fetch_assoc($result)){

        if($user['email'] == $email && ['wachtwoord'] == $password) {

        $_SESSION["wrong_pas"] = false;
        header("Location: index.php");
        exit();
        //header("Location: login.php");
        //echo "<p style=color:red>Gegevens kloppen niet</p>";
        
    } else {
        $_SESSION["wrong_pas"] = true;
        header("Location: login.php");
        exit();
        //echo "Login Succesvol";
        //header("Location: index.php");
    }
}

?>