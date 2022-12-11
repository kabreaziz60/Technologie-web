<?php
include_once "../../Technologie-web/db/connexion.php";
// header('Content-Type: application/json'); 
// $data = json_decode($_POST["id"]);
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sqlPost = "SELECT * FROM `posts`";
    $sqlUser = "SELECT * FROM `users`";

    $resultPost = mysqli_query($link, $sqlPost);
    $resultUser = mysqli_query($link, $sqlUser);

    $dataPost = array();
    $dataUser = array();
    $data = array();
    while ($row = mysqli_fetch_assoc($resultPost)) {
        $dataPost[] = $row;
    }
    while ($row = mysqli_fetch_assoc($resultUser)) {
        $dataUser[] = $row;
    }

    if ($resultPost == true && $resultUser == true) {
        // $data[] = $dataPost;
        // $data[] = $dataUser;
        // array_push($data, $dataPost, $dataUser);
        $data['posts'] = $dataPost;
        $data['users'] = $dataUser;
        echo json_encode($data);

    } else {
        var_dump('error in getUserMessage');
        echo 'error';
    }
} else {
    echo 'non';
}
