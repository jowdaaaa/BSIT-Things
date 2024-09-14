<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `task details`.`Task Title`, `task when`.`Task Date`, `task when`.`Task Time` FROM `task details` JOIN `task when` ON `task details`.`Task Title` = `task when`.`Task Title`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $taskTitle = $row['Task Title'];
        $taskDate = $row['Task Date'];
        $taskTime = $row['Task Time'];
        ?>
        <div class='task'>
            <h3><?php echo $taskTitle; ?></h3>
            <p><strong>Date:</strong> <?php echo $taskDate; ?></p>
            <p><strong>Time:</strong> <?php echo $taskTime; ?></p>
            <div class='task-buttons'>
                <a href='#' class='edit-btn' onclick='redirectToEditPage("<?php echo $taskTitle; ?>")'>Edit</a>
                <a href='#' class='details-btn' onclick='redirectToDetailsPage("<?php echo $taskTitle; ?>")'>Other details</a>
                <a href='#' class='delete-btn' onclick='confirmDelete("<?php echo $taskTitle; ?>")'>Delete</a>
            </div>
        </div>
        <?php
    }
} else {
    echo "No tasks found";
}

$conn->close();
?>
