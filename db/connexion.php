<?php
$user = "root";
$mdp = "";
$db= "somsyam1";
$server = "localhost";

$link = mysqli_connect($server, $user, $mdp, $db);

if($link) {
    echo('db connecter');
}
else{
    die(mysqli_connect_error());
}