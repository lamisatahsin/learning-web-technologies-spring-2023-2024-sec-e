<?php
session_start();
require_once('../../model/db_connection.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$to_userID = $_POST['userID'];
$amount = $_POST['amount'];

$sql = "INSERT INTO transaction_history (from_userID, to_userID, amout) values ('$_COOKIE[userid]', $to_userID, $amount)";
$sql2 = "update request_donation set status='inactive' where userID= '$to_userID' ";
if ($conn->query($sql) === TRUE) {
    $conn->query($sql2);
    echo "Request successful!";
} else {
    
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>