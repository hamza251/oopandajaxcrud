<?php
 
$conn = new mysqli("localhost", "root", "", "crud__oop");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>