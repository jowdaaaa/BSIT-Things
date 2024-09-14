<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        if ($_POST['username'] == "" || $_POST['password'] == "" || $_POST['password_confirm'] == "" || $_POST['name'] == "") {
            echo "All fields are required!";
        } else if ($_POST['password'] != $_POST['password_confirm']) {
            echo "Password and confirmed password did not match!";
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

            $_hashed_password = md5($_POST['password']);

            $sql = "INSERT INTO accounts (`username`, `password`, `name`) VALUES ('".$_POST['username']."', '".$_hashed_password."', '".$_POST['name']."');";

            if ($conn->query($sql) === TRUE) {
                echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/login.html" />';
                echo "Account created successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

        }


    }