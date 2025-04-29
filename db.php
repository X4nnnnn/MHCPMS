<?php
$conn = new mysqli("localhost", "root", "", "db_pms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
