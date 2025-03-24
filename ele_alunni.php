<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "scuola";

$connessioni = new mysqli($host,$user,$password,$database);

if($connessioni === false){

    die("errore di connessione" . $connessioni -> connect_error);//stampa l'errore

}

//stampa le info dell'host collegato
echo("connessione avvenuta con successo " . $connessioni -> host_info);

?>