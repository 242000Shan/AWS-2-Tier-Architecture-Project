<?php
$host = "database-1.ch0c2emucpw7.us-west-2.rds.amazonaws.com";   // Example: 10.0.2.10 (DB EC2 private IP)
$user = "admin";
$pass = "labpassword123";
$dbname = "cafe_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
