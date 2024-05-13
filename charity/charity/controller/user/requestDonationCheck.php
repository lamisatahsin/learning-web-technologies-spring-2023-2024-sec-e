<?php
session_start();
require_once('../../model/db_connection.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$amount = $_POST['amount'];

$sql = "INSERT INTO request_donation (userID, status, amount) values ('$_COOKIE[userid]','active', $amount)";

if ($conn->query($sql) === TRUE) {
    
    echo "Request successful!";
} else {
    
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>