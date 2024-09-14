<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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

        .centered-form {
            z-index: 1;
            position: relative;
            width: 300px;
            padding: 45px;
            border: 0px solid rgb(0, 0, 0);
            border-radius: 5px;
            background: rgba(232, 227, 227, 0); /* Set alpha to 0 for full transparency */
            color: white;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #195c94;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #607d8d;
        }
    </style>
</head>
<body>
    <video autoplay loop muted>
        <source src="video1.mp4" type="video/mp4">
    </video>
    <?php
    session_start();
    if (isset($_COOKIE['username']) && isset($_COOKIE['name'])) {
        echo '<div class="welcome-container">';
        echo 'Welcome [' . $_COOKIE['name'] . ']';
        echo '<a href="login.html">Login</a>';
        echo '<a href= "register.html">Register</a>';
        echo '<a href="delete.php">Delete Account</a>';
        echo '<a href="update.html">Update Account</a>';
        echo '</div>';
    } else {
        // Display button for registration
        echo '<div class="welcome-container">';
        echo '<a href="register.html">Register</a>';
        echo '</div>';
    }
    ?>

</body>
</html>
