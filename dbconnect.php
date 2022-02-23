<?php
$servername = "mysql76.unoeuro.com";
$username = "badilli_fm_dk";
$password = "Badilli90";
$dbname = "badilli_fm_dk_db_np";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>