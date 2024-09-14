<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $taskTitle = $_POST['title'];

    // Specify table aliases to avoid ambiguity
    $sql1 = "DELETE FROM `task details` WHERE `Task Title` = '$taskTitle'";
    $sql2 = "DELETE FROM `task when` WHERE `Task Title` = '$taskTitle'";

    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);

    if ($result1 === TRUE && $result2 === TRUE) {
        // Deletion successful, redirect to index.php
        header("Location: index.php");
    } else {
        echo "Error deleting task: " . $conn->error;
    }
} else {
    // Invalid request
    echo "Invalid request";
}

$conn->close();
?>
