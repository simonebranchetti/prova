<?php

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$host = "127.0.0.1";
$user = "root";
$rpassword = "";
$nomedb = "chat";


$connessione = new mysqli($host , $user , $rpassword , $nomedb);
var_dump($connessione);
if ( $connessione === false ){

    echo("connessione non riuscita" . $connessione->connect_error);
    die();
}

else{

    echo ("connessione riuscita" . $connessione -> host_info);
}


$sql = "insert into user(nickname ,user_pass , user_email) values ('$username', '$password' , '$email')";
$result = $connessione ->query($sql);
echo("dopo esecuzione query");
var_dump($result);

if($result){
    echo($result -> affected_rows . " riga inserita ");

}

else{

    echo("errore");
}

$sql = "select * from user";
$result = $connessione ->query($sql);
var_dump($result);
if($result){
    while ($row = $result->fetch_assoc()) { //fetch -> prendere i valori di result (righe)
        printf("%s (%s)\n", $row["nickname"], $row["user_email"]);
    }
}


?>