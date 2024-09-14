<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
            
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "recipelist_finalproject";

            // Create connection
            $conn = new mysqli($host, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            //$sql = "SELECT * FROM `accounts` WHERE `username` =  '".$_POST['username']."' AND `password` = '".$_POST['password_current']."'";
            $sql = "SELECT * FROM `accounts` WHERE `username` = '" . $_POST['username']."'";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                $sql = "UPDATE `accounts` SET `status` = '" . $_POST['status'] . "' WHERE username = '" . $_POST['username'] . "'";
                $result = $conn->query($sql);
        
                // Set the 'username' session variable after updating the status
                if (!isset($_SESSION['username'])) {
                    $_SESSION['username'] = $_POST['username'];
                }
        
                echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/webfinalproject/homepage.php" />';
                echo "Uploaded!";
            } else {
                echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/webfinalproject/statusform.html" />';
                echo "Incorrect username!";
            }

            $conn->close();

        }


    