<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $student_id = $_POST['student_id'];
    $name  = $_POST['name'];
    $cgpa       = $_POST['cgpa'];
    $email      = $_POST['email'];
    $department = $_POST['department'];

    $sql = "UPDATE users SET 
            student_id ='$student_id', 
            name ='$name', 
            cgpa ='$cgpa',
            email ='$email', 
            department ='$department'
            WHERE id=$id";

    if ($conn->query($sql)){
        header("Location: view.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
