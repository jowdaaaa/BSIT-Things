<?php
session_start();

date_default_timezone_set('Asia/Manila');

$host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "finals";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['search'])) {
    $search_term = $_POST['search'];
    $search_sql = "SELECT `username`, `name`, `status`, `datetime` FROM user_status WHERE `name` LIKE '$search_term%' ORDER BY `datetime` DESC";
    $search_result = $conn->query($search_sql);

    $results = [];

    if ($search_result !== false && $search_result->num_rows > 0) {
        while ($row = $search_result->fetch_assoc()) {
            $results[] = $row;
        }
    }

    echo json_encode($results);
}

$conn->close();
?>
