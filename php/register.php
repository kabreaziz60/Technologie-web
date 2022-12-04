<?php
session_start();
include_once "../db/connexion.php";

if ($_POST["name"] && $_POST["firstname"] && $_POST["email"] && $_POST["password"]) {
    $name = $_POST["name"];
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user = mysqli_query($link, "SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($user) > 0){
        // while($row = mysqli_fetch_assoc($user)) {
        //  var_dump($row) ;
        // }
        $res['error'] = 'Email déja utiliser';
        header("Location: /");
    } else {
        $req = mysqli_query($link, "insert into users(name, firstname, email, password) values ('$name', '$firstname', '$email', '$password')");
        if ($req) {
        $res['success'] = 'Inscription reussi veuillez vous connecter';
        header("Location: /");
        } else {
            echo "echec d'intersion";
        }
    }
}
else {
    $res['error'] = 'Veuillez remplir tous les champs';
}

$_SESSION["res"]=$res;

$_SESSION["action"]='register';
