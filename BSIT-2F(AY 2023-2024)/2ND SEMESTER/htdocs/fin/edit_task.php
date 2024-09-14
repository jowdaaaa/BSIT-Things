<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <style>
        .edit-container {
            width: 50%;
            margin: 50px auto;
        }

        .edit-form {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
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

    // Retrieve task details based on title from the URL
    if (isset($_GET['title'])) {
        $taskTitle = $_GET['title'];
        $sql = "SELECT * FROM `task details` JOIN `task when` ON `task details`.`Task Title` = `task when`.`Task Title` WHERE `task details`.`Task Title` = '$taskTitle'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of the first row (assuming the title is unique)
            $row = $result->fetch_assoc();
            $taskTitle = $row['Task Title'];
            $taskDescription = $row['Task Description'];
            $taskDate = $row['Task Date'];
            $taskTime = $row['Task Time'];
            ?>
            <div class="edit-container">
                <h1>Edit Task</h1>
                <form action="update_task.php" method="POST" class="edit-form">
                    <input type="hidden" name="original_title" value="<?php echo $taskTitle; ?>">
                    <label for="title">Task Title:</label>
                    <input type="text" name="title" value="<?php echo $taskTitle; ?>" required><br>
                    <label for="description">Task Description:</label>
                    <input type="text" name="description" value="<?php echo $taskDescription; ?>" required><br>
                    <label for="date">Task Date:</label>
                    <input type="date" name="date" value="<?php echo $taskDate; ?>" required><br>
                    <label for="time">Task Time:</label>
                    <input type="time" name="time" value="<?php echo $taskTime; ?>" required><br>
                    <button type="submit">Save Changes</button>
                </form>
            </div>
            <?php
        } else {
            echo "Task not found";
        }
    } else {
        echo "Invalid request";
    }

    $conn->close();
    ?>
</body>
</html>
