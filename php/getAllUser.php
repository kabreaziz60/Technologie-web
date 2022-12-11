<?php
include_once "../Technologie-web/db/connexion.php";

$sql = "SELECT * FROM users";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    // }
    // $rowUser = mysqli_fetch_assoc($result);
} else {
    echo "0 results";
}