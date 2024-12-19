<?php
// Dichiarazione delle credenziali statiche
$valid_username = "Donald";
$valid_password = "Duck";
// Verifica se i dati sono stati inviati tramite POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
// Recupero dei valori inseriti nel form
$username = $_POST["user"];
$password = $_POST["passwd"];
// Controllo delle credenziali
if ($username === $valid_username && $password === $valid_password) {
// Accesso riuscito
echo "<h1>Accesso riuscito!</h1>";
echo "<p>Benvenuto, " . htmlspecialchars($username) . ".</p>";
} else {
// Accesso fallito
echo "<h1>Accesso negato!</h1>";
echo "<p>Username o password errati.</p>";
}
} else {
// Messaggio di errore se la pagina è stata aperta senza inviare il form
echo "<h1>Errore</h1>";
echo "<p>Accesso non autorizzato.</p>";
}
?>
