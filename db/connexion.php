<?php
//db info
$user = "root";
$mdp = "";
$db= "somsyam1"; // create this in mysql
$server = "localhost";
$users = "users";
$posts = "posts";
mysqli_report(MYSQLI_REPORT_OFF);

$link = mysqli_connect($server, $user, $mdp, "");

if($link) {
    echo('db connecter');
    // enable error reporting
    $testDb = mysqli_select_db($link, $db);
    if(empty($testDb)){
        $dbCr = "create database somsyam1";
        $check = mysqli_query($link, $dbCr);
        if(!$check){
            echo "database create error";
            die();
        }
    }
}
else{
    die(mysqli_connect_error());
}
$tableUsers = "select * from users";
$exists = mysqli_query($link,$tableUsers);

if(!$exists)
{
   $usersTab = "create table users(
    id int(100) NOT NULL AUTO_INCREMENT,
    name  varchar (255)  NOT NULL,
    firstname  varchar (255)  NOT NULL,
    email  varchar (255)  NOT NULL,
    password  varchar (255)  NOT NULL,
    isConnect  int (255)  NULL,
    PRIMARY KEY(id)
   )";
   $ok = mysqli_query($link, $usersTab);
   var_dump($ok);
   if(!$ok){
    echo 'falled to create users table';
    die();
   }
}
$tablePosts = "select * from posts";
$exists = mysqli_query($link, $tablePosts);

if(!$exists)
{
    var_dump("passe");
   $usersTab = "create table posts(
    id int(100) NOT NULL AUTO_INCREMENT,
    message  varchar (255)  NOT NULL,
    posterId  int(100)  NOT NULL,
    recepterId  int(100)  NOT NULL,
    status  int (255)  NOT NULL DEFAULT 0,
    PRIMARY KEY(id)
   )";
   $ok = mysqli_query($link, $usersTab);
   if(!$ok){
    echo 'falled to create users table';
    die();
   }
}