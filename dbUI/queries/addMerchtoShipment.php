<?php

$user = "root";
$pass = "";
$db = "grocerydb";


// Create connection
$conn = new mysqli("localhost", $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

$sql = "Insert ItemsShipped(ShipmentNo, ItemsShipped, Quantity) 
        values(\"$ShipmentNo\", \"$UPC\", \"$Qty\")";


if ($conn->query($sql) === TRUE) {
  echo "New Record created successfully";
} 
else {
  echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();

?>