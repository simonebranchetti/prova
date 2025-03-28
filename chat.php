<?php

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$host = "127.0.0.1";
$user = "root";
$rpassword = "";
$nomedb = "chat";


$connessione = new mysqli($host , $user , $rpassword , $nomedb);

if ( $connessione === false ){

    echo("connessione non riuscita" . $connessione -> connect_errror);
    die();
}

else{

    echo ("connessione riuscita" . $connessione -> host_info);
}

$sql = "insert into user(nickname ,user_password , user_email) values ($username , $password , $email)";


?>