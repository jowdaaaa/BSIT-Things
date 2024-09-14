<?php
    session_start();
    setcookie('username', '', -1, '/'); 
    setcookie('name', '', -1, '/'); 
    session_destroy();

    echo "Logged out successfully!";
    echo '<meta http-equiv="refresh" content="3;url=http://127.0.0.1/login.html" />';