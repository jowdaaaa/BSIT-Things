<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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

            // ".$_POST['username']."
            $_hashed_password = md5($_POST['password']);

            $sql = "SELECT * FROM accounts WHERE `username` = '".$_POST['username']."' AND `password` = '".$_hashed_password."'";
            $result = $conn->query($sql);

            $row = $result->fetch_assoc();

            if ($result->num_rows > 0) {
                session_start();
                setcookie('username', $row['username'], time() + (86400 * 30));
                setcookie('name', $row['name'], time() + (86400 * 30));
                echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/welcome.php" />';
                echo "Logged In successfully!!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

    

    }