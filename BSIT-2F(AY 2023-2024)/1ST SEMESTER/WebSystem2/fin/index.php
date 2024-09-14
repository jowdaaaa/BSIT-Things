<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title of the page -->
    <title>Task Manager</title>

    <!-- Internal CSS styles for styling the page -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        .add-btn {
            display: block;
            margin: 10px auto;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            text-align: center;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        .task-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }

        .task {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 30%;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            border-radius: 5px;
        }

        .task-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .delete-btn{
            background-color: #BE4A25;
            color: #fff;
            padding: 5px;
            margin-top: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            flex: 1;
            border-radius: 3px;
        }
        .edit-btn {
            background-color: #78CAF2;
            color: #fff;
            padding: 5px;
            margin-top: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            flex: 1;
            border-radius: 3px;
        }

        .details-btn {
            background-color: #A896FF;
            color: #fff;
            padding: 5px;
            margin-top: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            flex: 1;
            border-radius: 3px;
        }

        .edit-btn{
            background-color: #19058F;
        }

        .details-btn {
            background-color: #0F025C;
        }
    </style>
</head>
<body>
    <!-- Page content -->
    <h1>Task Manager</h1>
    <a href="add.html" class="add-btn">Add Task</a>
    <div class="task-container">
        <?php include 'landing.php'; ?>
    </div>

    <script>
        function redirectToDetailsPage(title) {
            window.location.href = "task_details.php?title=" + encodeURIComponent(title);
        }

        function redirectToEditPage(title) {
            window.location.href = "edit_task.php?title=" + encodeURIComponent(title);
        }

        function confirmDelete(title) {
            window.location.href = "confirm_delete.php?title=" + encodeURIComponent(title);
        }
    </script>
</body>
</html>
