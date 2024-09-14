<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['title'])) {
    $taskTitle = $_GET['title'];

    $sql = "SELECT `task details`.`Task Title`, `Task Description`, `Task Date`, `Task Time` 
            FROM `task details` 
            JOIN `task when` ON `task details`.`Task Title` = `task when`.`Task Title` 
            WHERE `task details`.`Task Title` = '$taskTitle'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $taskTitle = $row['Task Title'];
        $taskDescription = $row['Task Description'];
        $taskDate = $row['Task Date'];
        $taskTime = $row['Task Time'];
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Task Details</title>
            <style>
                .details-container {
                    width: 50%;
                    margin: 50px auto;
                }

                .details-content {
                    border: 1px solid #ccc;
                    padding: 20px;
                    margin: 20px;
                }

                p {
                    margin-bottom: 10px;
                }

                .details-btn {
                    background-color: #19058F;
                    color: #fff;
                    padding: 10px;
                    cursor: pointer;
                    text-align: center;
                    text-decoration: none;
                    display: block;
                    width: 100%;
                    margin-top: 10px;
                }
            </style>
        </head>
        <body>
            <div class="details-container">
                <h2>Task Details</h2>
                <div class="details-content">
                    <p><strong>Task Title:</strong> <?php echo $taskTitle; ?></p>
                    <p><strong>Task Description:</strong> <?php echo $taskDescription; ?></p>
                    <p><strong>Task Date:</strong> <?php echo $taskDate; ?></p>
                    <p><strong>Task Time:</strong> <?php echo $taskTime; ?></p>
                    <!-- Include confirmation and cancellation buttons here -->

                    <a href="index.php" class="details-btn">Back to homepage</a>
                </div>
            </div>
        </body>
        </html>
<?php
    } else {
        echo "Task not found";
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>
