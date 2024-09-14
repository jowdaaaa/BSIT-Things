<?php
    session_start();
    //var_dump($_COOKIE);
    echo "Welcome [" . $_COOKIE['username'] . "] " . $_COOKIE['name'];
    echo '<br><a href="update.html">Update Account</a> ';
    echo '<br><a href="logout.php">Logout</a> ';
    echo '<br><a href="delete.php">Delete</a> ';