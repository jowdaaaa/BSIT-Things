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
        .h1 {
            font-family: 'drius', sans-serif; 
            color: white;
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
      
        </style>
        </head>
        <body>
            <video autoplay loop muted>
                <source src="video1.mp4" type="video/mp4">
            </video> 

            <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();

    if (
        $_POST['password'] == "" ||
        $_POST['password_confirm'] == "" ||
        $_POST['password_current'] == "" ||
        $_POST['name'] == ""
    ) {
        echo '<h1 style="color: red;"> ALL FIELDS ARE REQUIRED!! </h1>';
    } else {

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

        $currentUsername = $_COOKIE['username'];
        $currentPassword = md5($_POST['password_current']); // Hash the entered current password

        $sql = "SELECT * FROM `accounts` WHERE `username` = '$currentUsername' AND `password` = '$currentPassword'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            // Hash the new password before updating
            $newHashedPassword = md5($_POST['password']);

            $updateSql = "UPDATE `accounts` SET `password` = '$newHashedPassword', `name` = '$_POST[name]' WHERE `username` = '$currentUsername'";
            $updateResult = $conn->query($updateSql);

            if ($updateResult) {
                setcookie('name', $_POST['name'], time() + (86400 * 30));
                echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/finalprojectweb/welcome.php" />';
                echo '<h1 style="color: green;">ACCOUNT UPDATED SUCCESSFULLY!</h1>';
            } else {
                echo "Error updating account: " . $conn->error;
            }
        } else {
            echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/finalprojectweb/update.html" />';
            echo '<h1 style="color: red;">INCORRECT CURRENT PASSWORD!</h1>';
        }

        $conn->close();
    }
}
?>
