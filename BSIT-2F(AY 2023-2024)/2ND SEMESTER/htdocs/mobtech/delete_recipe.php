<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include 'db.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the recipe ID from the request body
    $data = json_decode(file_get_contents("php://input"), true);
    $recipeId = $data['id'];

    // Delete the recipe from the database
    $sql = "DELETE FROM recipes WHERE id = $recipeId";

    if ($conn->query($sql) === TRUE) {
        // Return success response
        echo json_encode(array("success" => true));
    } else {
        // Return error response
        echo json_encode(array("success" => false, "error" => "Error deleting recipe: " . $conn->error));
    }
} else {
    // Return error response for unsupported request method
    echo json_encode(array("success" => false, "error" => "Unsupported request method"));
}

// Close the database connection
$conn->close();

?>
