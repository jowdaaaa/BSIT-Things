
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
@font-face {
    font-family: 'drius'; /* Your custom font name */
    src: url('drius.ttf') format('truetype'); /* URL to your font file and format */
}
        
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
         
        }
        .welcome-container {
            text-align: center;
            font-size: 50px;
            color: white;
        }
        .welcome-container a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            text-decoration: none;
            color: white;
            font-size: 30px;
            transition: background-color 0.3s ease;
        }
        .welcome-container a:hover {
            background-color: #333;
        }

        video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
        }
        .refresh-message {
            color: #27ae60;
            font-family: 'drius', sans-serif; 
        }
        </style>
        </head>
        <body>
            <video autoplay loop muted>
                <source src="video1.mp4" type="video/mp4">
            </video> 

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
    echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/finalprojectweb/register.html" />';
    echo '<h1 class="refresh-message">ACCOUNT DELETED SUCCESSFULLY!!</h1>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}