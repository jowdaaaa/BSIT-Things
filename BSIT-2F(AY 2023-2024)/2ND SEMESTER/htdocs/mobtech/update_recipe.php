<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include 'db.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the recipe data from the request body
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['id'], $data['name'], $data['ingredients'], $data['instructions'])) {
        $recipeId = $data['id'];
        $recipeName = $data['name'];
        $recipeIngredients = $data['ingredients'];
        $recipeInstructions = $data['instructions'];

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("UPDATE recipes SET name = ?, ingredients = ?, instructions = ? WHERE id = ?");
        $stmt->bind_param("sssi", $recipeName, $recipeIngredients, $recipeInstructions, $recipeId);

        if ($stmt->execute()) {
            // Return success response
            echo json_encode(array("success" => true));
        } else {
            // Return error response
            echo json_encode(array("success" => false, "error" => "Error updating recipe: " . $stmt->error));
        }

        // Close the statement
        $stmt->close();
    } else {
        // Return error response for missing fields
        echo json_encode(array("success" => false, "error" => "Missing required fields"));
    }
} else {
    // Return error response for unsupported request method
    echo json_encode(array("success" => false, "error" => "Unsupported request method"));
}

// Close the database connection
$conn->close();

?>
