<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        h3 {
            font-family: montserrat;
            line-height: 6px;
        }

    </style>
</head>
<body>
    <?php
        foreach ($users as $user){
            echo "<h3>STUDENT ID (" . $user['id'] . ")</h3>";
            echo "<p>First Name : " . $user['firstname'] . "<br>" . "Middle Name : " . $user['middlename'] . "<br>" . "Last Name : " . $user['lastname'] . "</p><br>"; 
        }
    ?>
</body>
</html>

<!-- <?php 

foreach ($users as $user){
    echo "STUDENT " . $user['id'] . "<br>";
    echo "First Name : " . $user['firstname'] . "<br>" . "Middle Name : " . $user['middlename'] . "<br>" . "Last Name : " . $user['lastname'] . "<br><br>"; 
}

?> -->