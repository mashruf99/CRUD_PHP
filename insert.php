<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $cgpa = $_POST['cgpa'];
    $email = $_POST['email'];
    $department = $_POST['department'];

    $check_sql = "SELECT * FROM users WHERE student_id = '$student_id'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        header("Location: index.php?error=Student ID already exists");
        exit();
    } else {
        $sql = "INSERT INTO users (student_id, name, cgpa, email, department) 
                VALUES ('$student_id', '$name', '$cgpa', '$email', '$department')";

        if ($conn->query($sql) === TRUE) {
            header("Location: view.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
