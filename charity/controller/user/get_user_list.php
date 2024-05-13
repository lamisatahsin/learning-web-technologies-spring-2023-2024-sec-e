<?php
session_start();


require_once('../../model/db_connection.php');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT users.*
FROM request_donation
INNER JOIN users ON request_donation.userID = users.id and request_donation.status != 'inactive'"; 

$result = $conn->query($sql);


if ($result->num_rows > 0) {
  $userData = array(); 

  while ($row = $result->fetch_assoc()) {
    $userData[] = $row; 
  }

  
  echo json_encode($userData);
} else {
  echo json_encode(array("error" => "No users found")); 
}

$conn->close(); 
?>
