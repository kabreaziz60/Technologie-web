<?php
session_start();
include_once "../db/connexion.php";

if ($_POST["email"] && $_POST["password"]) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user = mysqli_query($link, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    if(mysqli_num_rows($user) > 0){
        while($row = mysqli_fetch_assoc($user)) {
         var_dump($row) ;
         $res['success'] = 'connexion reussi';
         $res['data'] = $row;
         header("Location: /message");
        }
    } else {
        $res['error'] = 'Identifiant incorrect';
        header("Location: /");
    }
}

$_SESSION["res"]=$res;
$_SESSION["action"]='login';
