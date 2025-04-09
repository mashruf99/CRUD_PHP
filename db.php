<?php
$host = 'localhost';
$user = 'root';
$pass = '0000';
$db = 'crud_operation';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
