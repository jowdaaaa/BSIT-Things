<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();

        if ($_POST['password'] == "" || $_POST['password_confirm'] == "" || $_POST['password_current'] == "" || $_POST['name'] == "") {
            echo "All fields are required!";
        } else if ($_POST['password'] != $_POST['password_confirm']) {
            echo "Password and confirmed password did not match!";
        } else {
            
            $host = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "recipelist_finalproject";

            // Create connection
            $conn = new mysqli($host, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM `accounts` WHERE `username` =  '".$_POST['username']."' AND `password` = '".$_POST['password_current']."'";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {

                $sql = "UPDATE `accounts` SET `password` = '".$_POST['password']."', `name` = '".$_POST['name']."' WHERE `username` = '".$_POST['username']."'";
                $result = $conn->query($sql);
                setcookie('name', $_POST['name'], time() + (86400 * 30));
                echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/webfinalproject/homepage.php" />';
                echo "Account updated successfully!";
            } else {
                echo "Incorrect current password!";
            }

            $conn->close();

        }


    }