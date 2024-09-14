<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Delete</title>
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

        p {
            margin: 10px 0;
        }

        input[type="submit"], input[type="button"] {
            width: 48%;
            padding: 10px;
            cursor: pointer;
            display: inline-block;
        }

        input[type="submit"] {
            background-color: #FF0000;
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #CC0000;
        }

        input[type="button"] {
            background-color: #008CBA;
            color: #fff;
        }

        input[type="button"]:hover {
            background-color: #006080;
        }
    </style>
</head>
<body>
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

        // Specify table aliases to avoid ambiguity
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
            <div class="edit-container">
                <h1>Confirm Delete</h1>
                <form action="delete.php" method="post" class="edit-form">
                    <input type="hidden" name="title" value="<?php echo $taskTitle; ?>">
                    <p><strong>Task Title:</strong> <?php echo $taskTitle; ?></p>
                    <p><strong>Task Description:</strong> <?php echo $taskDescription; ?></p>
                    <p><strong>Task Date:</strong> <?php echo $taskDate; ?></p>
                    <p><strong>Task Time:</strong> <?php echo $taskTime; ?></p>
                    <input type="submit" name="delete" value="Delete">
                    <input type="button" onclick="location.href='index.php'" value="Cancel">
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
