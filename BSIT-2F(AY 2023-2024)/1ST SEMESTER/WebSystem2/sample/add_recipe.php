<?php
// Establish a connection to the database (replace with your credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipelist_finalproject";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the recipe into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $ingredients = $_POST["ingredients"];
    $instructions = $_POST["instructions"];

    $sql = "INSERT INTO recipes (title, ingredients, instructions) VALUES ('$title', '$ingredients', '$instructions')";

    if ($conn->query($sql) === TRUE) {
        echo "Recipe added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
