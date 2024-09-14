<?php
session_start();
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM `accounts` WHERE `username` = '".$_COOKIE['username']."'";

if ($conn->query($sql) === TRUE) {
    echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/register.html" />';
    echo "Account deleted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}