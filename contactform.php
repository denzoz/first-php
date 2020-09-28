<?php

if (isset($_POST['submit'])) { // once submit button pressed
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    // QUERY DATABASE
    
    
    include_once '/opt/lampp/htdocs/first-php/includes/dbh.php';
    // making a prepared statement
    
    $sqlTemplate = "INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)";
    $preparedStatement = mysqli_stmt_init($conn);
    // procedural syntax
    // mysqli_stmt_bind_param($preparedStatement, "ssss", $name, $emailFrom, $subject, $message);
    // object syntax:
    $stmt = $conn->prepare($sqlTemplate);
    $stmt->bind_param($preparedStatement, "ssss", $name, $emailFrom, $subject, $message);
    $stmt->execute();

 
}




