<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];

    $sql = "INSERT INTO users (first_name, last_name, email, phone)
            VALUES ('$first_name', '$last_name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        header("Location: view.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
