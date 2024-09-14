<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['title'] == "" || $_POST['description'] == "" || $_POST['date'] == "" || $_POST['time'] == "") {
        echo "All fields are required!";
    } else {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        // Create connection
        $conn = mysqli_connect($host, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $time = mysqli_real_escape_string($conn, $_POST['time']);

        $sql1 = "INSERT INTO `task details` (`Task Title`, `Task Description`) VALUES ('$title', '$description')";
        $sql2 = "INSERT INTO `task when` (`Task Title`, `Task Date`, `Task Time`) VALUES ('$title', '$date', '$time')";

        if ($conn->query($sql1) && $conn->query($sql2)) {
            echo '<div style="font-size: 55px; text-align: center; margin-top: 50vh; transform: translateY(-50%);">Task added successfully</div>';
            echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/fin/index.php" />';
        } else {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>
