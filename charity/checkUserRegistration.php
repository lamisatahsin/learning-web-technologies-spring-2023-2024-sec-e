<?php
session_start();
require_once('model/db_connection.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['userName'];
$gender = $_POST['gender'];
$birthDate = $_POST['birthDate'];
$userEmail = $_POST['userEmail'];
$userPhoneNum = $_POST['userPhoneNum'];
$userPassword = $_POST['userPassword'];


$sql = "INSERT INTO users (firstName, lastName, userName, gender, birthDate, userEmail, userPhoneNum, userPassword) 
        VALUES ('$firstName', '$lastName', '$userName', '$gender', '$birthDate', '$userEmail', '$userPhoneNum', '$userPassword')";

if ($conn->query($sql) === TRUE) {
    
    echo "Registration successful!";
} else {
    
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>