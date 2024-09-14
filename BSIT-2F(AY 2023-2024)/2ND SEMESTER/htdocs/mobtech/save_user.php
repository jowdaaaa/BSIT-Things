<?php
include 'db.php';

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = json_decode(file_get_contents('php://input'), true);

    if (isset($user['name'], $user['email'], $user['picture'])) {
        $name = $user['name'];
        $email = $user['email'];
        $picture = $user['picture'];

        // Check if the user already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // User exists, update the record
            $stmt->close();
            $stmt = $conn->prepare("UPDATE users SET name = ?, picture = ? WHERE email = ?");
            $stmt->bind_param("sss", $name, $picture, $email);
            if ($stmt->execute()) {
                echo json_encode(["success" => true, "message" => "User updated successfully"]);
            } else {
                echo json_encode(["success" => false, "error" => "Error updating user: " . $stmt->error]);
            }
        } else {
            // User does not exist, insert a new record
            $stmt->close();
            $stmt = $conn->prepare("INSERT INTO users (name, email, picture) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $picture);
            if ($stmt->execute()) {
                echo json_encode(["success" => true, "message" => "User inserted successfully"]);
            } else {
                echo json_encode(["success" => false, "error" => "Error inserting user: " . $stmt->error]);
            }
        }

        $stmt->close();
    } else {
        echo json_encode(["success" => false, "error" => "Missing required user data"]);
    }
    
    $conn->close();
} else {
    echo json_encode(["success" => false, "error" => "Unsupported request method"]);
}
?>
