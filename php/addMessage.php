<?php
include_once "../../Technologie-web/db/connexion.php";
// header('Content-Type: application/json'); 
// $data = json_decode($_POST["id"]);
if (isset($_POST['message']) && isset($_POST['posterId']) && isset($_POST['recepterId'])) {
    $message = $_POST['message'];
    $posterId = $_POST['posterId'];
    $recepterId = $_POST['recepterId'];

    $sql = "INSERT INTO `posts`(`message`, `posterId`, `recepterId`, `status`) VALUES ('$message','$posterId','$recepterId', 0)";

    $result = mysqli_query($link, $sql);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
}else{
    echo "error internal";
}
