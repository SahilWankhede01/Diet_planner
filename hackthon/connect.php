<?php
    $firstName = $_POST['first_name'];
    $LastName = $_POST['last_name'];
    $Email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $favorite_food = $_POST['favorite_food'];
    
    //Database connection
$conn = new mysqli('localhost', 'root', '', 'register');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, email, password, confirm_password, favorite_food) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstName, $lastName, $email, $password, $confirm_password $favorite_food); // Corrected bind_param
    $stmt->execute();
echo "registration Successfully...";
$stmt->close();
$conn->close();
?>