<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['username'] == "" || $_POST['password'] == "" || $_POST['password_confirm'] == "" || $_POST['name'] == "") {
        echo "All fields are required!";
    } else if ($_POST['password'] != $_POST['password_confirm']) {
        echo "Password and confirmed password did not match!";
    } else {

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

        // Check if the username already exists
        $checkUsernameQuery = "SELECT * FROM accounts WHERE username = '".$_POST['username']."'";
        $result = $conn->query($checkUsernameQuery);

        if ($result->num_rows > 0) {
            echo "Username already exists. Choose a different username.";
        } else {
            // The username is not taken, proceed with registration

            //$_hashed_password = md5($_POST['password']);

            $sql = "INSERT INTO accounts (`username`, `password`, `name`) VALUES ('".$_POST['username']."', '"./*$_hashed_password*/ $_POST['password']."', '".$_POST['name']."');";

            if ($conn->query($sql) === TRUE) {
                session_start();
                $_SESSION['username'] = $_POST['username'];
                echo '<meta http-equiv="refresh" content="3;url=http://localhost/webfinalproject/statusform.html" />';
                echo "Account created successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }


        }

        $conn->close();
    }
}
?>
