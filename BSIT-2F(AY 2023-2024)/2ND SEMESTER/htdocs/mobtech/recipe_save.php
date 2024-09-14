<?php
include 'db.php';

// Get JSON POST data
$data = json_decode(file_get_contents("php://input"));

// Extract recipe data from JSON
$name = $data->name;
$ingredients = $data->ingredients;
$instructions = $data->instructions;
$user_id = $data->user_id;

// Prepare SQL statement to insert recipe
$stmt = $conn->prepare("INSERT INTO recipes (name, ingredients, instructions, user_id, time_created) VALUES (?, ?, ?, ?, NOW())");

// Bind parameters and execute the statement
$stmt->bind_param("sssi", $name, $ingredients, $instructions, $user_id);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    // Recipe saved successfully
    echo json_encode(array("success" => true));
} else {
    // Failed to save recipe
    echo json_encode(array("success" => false, "error" => "Failed to save recipe"));
}

// Close statement and connection
$stmt->close();
$conn->close();
?>