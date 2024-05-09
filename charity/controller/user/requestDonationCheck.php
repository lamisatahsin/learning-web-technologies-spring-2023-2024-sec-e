<?php
session_start();
require_once('../../model/db_connection.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO request_donation (userID, status) values ('$_COOKIE[userid]','active')";

if ($conn->query($sql) === TRUE) {
    
    echo "Request successful!";
} else {
    
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>