<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>
    
    <style>
        
@font-face {
    font-family: 'drius'; /* Your custom font name */
    src: url('drius.ttf') format('truetype'); /* URL to your font file and format */
}
        body { 
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .error-message {
            color: #e74c3c;
         
            font-family: 'drius', sans-serif; 
        }

        .refresh-message {
            color: #27ae60;
       
            font-family: 'drius', sans-serif; 
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

<div class="container">
<div class="back-to-registration-container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if ($_POST['username'] == "" || $_POST['password'] == "" || $_POST['password_confirm'] == "" || $_POST['name'] == "") {
            echo '<h1 class="error-message"> ALL FIELDS ARE REQUIRED!</h1>';
            echo '<meta http-equiv="refresh" content="2;url=http://127.0.0.1/finalprojectweb/register.html" />';
        } else if ($_POST['password'] != $_POST['password_confirm']) {
            echo '<h1 class="error-message">PASSWORD AND CONFIRMED PASSWORD DID NOT MATCH!</h1>';
            echo '<meta http-equiv="refresh" content="2;url=http://127.0.0.1/finalprojectweb/register.html" />';
            
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
                echo '<h1 class="refresh-message">ACCOUNT CREATED SUCCESSFULLY!</h1>';
                echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/finalprojectweb/login.html" />';
            } else {
                echo '<h1 class="error-message">Error: ' . $sql . '<br>' . $conn->error . '</h1>';
                
            }

            $conn->close();
        }
        
    }
    ?>
</div>

</body>
</html>
