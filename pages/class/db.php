<?php
/* ------------------- CONNEXION DB ------------------- */

$servername = "localhost";
$database = "";
$username = "root";
$password = "root";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
echo "Connexion à la base de donnée réussie";

/* ------------------------------------------- */