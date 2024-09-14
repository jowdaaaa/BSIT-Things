<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
@font-face {
    font-family: 'drius'; /* Your custom font name */
    src: url('drius.ttf') format('truetype'); /* URL to your font file and format */
}
        body {
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
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

    // Validate username and password inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo '<h1 class="error-message">USERNAME AND PASSWORD REQUIRED! </h1>';
        // You might want to redirect or handle this case appropriately.
        $conn->close();
        exit;
    }
    // Use prepared statements to prevent SQL injection
    $hashed_password = md5($password);
    $sql = "SELECT * FROM accounts WHERE `username` = ? AND `password` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        setcookie('username', $row['username'], time() + (86400 * 30));
        setcookie('name', $row['name'], time() + (86400 * 30));
        echo '<h1 class="refresh-message">LOGGED IN SUCCESSFULLY!!</h1>';
        echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/finalprojectweb/index.php" />';
    } else {
        echo '<h1 class="error-message">Invalid username or password.</h1>';
        // Redirect to the login page after displaying the message
        echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/finalprojectweb/login.html" />';
    }

    $stmt->close();
    $conn->close();
}
?>

    </div>
</body>
</html>
