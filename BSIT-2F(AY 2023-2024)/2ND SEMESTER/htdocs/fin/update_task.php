<?php
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $originalTitle = $_POST['original_title'];
    $newTitle = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql1 = "UPDATE `task details` SET `Task Title`='$newTitle', `Task Description`='$description' WHERE `Task Title`='$originalTitle'";
    $sql2 = "UPDATE `task when` SET `Task Title`='$newTitle', `Task Date`='$date', `Task Time`='$time' WHERE `Task Title`='$originalTitle'";

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating task: " . $conn->error;
    }
}

$conn->close();
?>
