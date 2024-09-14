<?php
include 'db.php';

// Prepare the response array
$response = array();

try {
    // Get the email from the query string
    $email = isset($_GET['email']) ? $_GET['email'] : '';

    if (empty($email)) {
        throw new Exception('User email is required');
    }

    // Fetch user ID from the email
    $userResult = $conn->query("SELECT id FROM users WHERE email = '$email'");
    if ($userResult->num_rows === 0) {
        throw new Exception('User not found');
    }

    $userId = $userResult->fetch_assoc()['id'];

    // Fetch recipes with user names from database where the user ID matches
    $sql = "SELECT recipes.*, users.name AS user_name 
            FROM recipes 
            LEFT JOIN users ON recipes.user_id = users.id 
            WHERE recipes.user_id = $userId 
            ORDER BY recipes.id DESC";

    $result = $conn->query($sql);

    if (!$result) {
        throw new Exception("SQL query failed: " . $conn->error);
    }

    $recipes = array();

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Add each recipe to the recipes array
            $recipes[] = $row;
        }
        $response['recipes'] = $recipes;
    } else {
        // No recipes found
        $response['error'] = 'No recipes found.';
    }
} catch (Exception $e) {
    // Error occurred
    $response['error'] = 'Error: ' . $e->getMessage();
} finally {
    // Close connection
    $conn->close();
}

// Output response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
