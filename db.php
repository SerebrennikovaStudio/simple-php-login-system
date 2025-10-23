<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_system";

// Kapcsolódás az adatbázishoz
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Ellenőrzés, hogy sikerült-e
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

