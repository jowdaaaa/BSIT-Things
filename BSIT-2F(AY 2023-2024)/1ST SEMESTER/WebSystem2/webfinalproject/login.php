<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $host = "localhost"; // or localhost
            $username = "root";
            $password = "";
            $dbname = "recipelist_finalproject";

            // Create connection
            $conn = new mysqli($host, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM accounts WHERE `username` = '".$_POST['username']."' AND `password` = '".$_POST['password']."'";
            $result = $conn->query($sql);

            $row = $result->fetch_assoc();

            if ($result->num_rows > 0) {
                session_start();
                setcookie('username', $row['username'], time() + (86400 * 30));
                //setcookie('name', $row['name'], time() + (86400 * 30));
                echo '<meta http-equiv="refresh" content="3;url=http://localhost/webfinalproject/homepage.php" />';
                echo "Logged In successfully!!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            

            $conn->close();
    }
?>