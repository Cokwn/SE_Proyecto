<?php
$servername = "mysql.hostinger.mx";
$username = "u292495417_checo";
$dbname = "u292495417_hospi";
$password = "123456";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>