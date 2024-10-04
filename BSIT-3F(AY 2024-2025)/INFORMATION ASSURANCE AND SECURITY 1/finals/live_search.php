<?php
// live_search.php

session_start();

date_default_timezone_set('Asia/Manila');

$host = "fdb1032.awardspace.net";
$username = "4361256_finals";
$password = "JudahPau0112";
$dbname = "4361256_finals";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['q'])) {
    $search_term = $_GET['q'];

    if (!empty($search_term)) {
        $search_sql = "SELECT `username`, `name`, `status`, `datetime` FROM user_status WHERE `name` LIKE '$search_term%' ORDER BY `datetime` DESC";
        $search_result = $conn->query($search_sql);

        if ($search_result !== false && $search_result->num_rows > 0) {
            echo "<ul>";
            while ($row = $search_result->fetch_assoc()) {
                echo "<li><img src='user.png' alt='Pin Icon' style='width: 50px; height: 50px; margin-bottom: -20px;'> 
                        <strong style='letter-spacing: 1px; color: #FFB534; font-size: 20px; margin-left: 5px;'>" . $row['name'] . "</strong>
                        <div style='color: #B6BBC4; font-size: 12px; margin-left: 57px;'>Updated on " . date('F j, Y, g:i a', strtotime($row['datetime'])) . "</div>
                        <hr style='border: 1px solid gray; margin-top: 15px;'>
                        <p style='font-size: 16px; margin-top: 20px;'>Status : " . $row['status'] . "<p></li>";
            }
            echo "</ul>";
        } else {
            echo "<br>No matching names found.";
        }
    }
}

$conn->close();
?>
