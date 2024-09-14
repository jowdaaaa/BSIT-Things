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

// Retrieve and display recipes
$sql = "SELECT id, title, ingredients, instructions FROM recipes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='recipe'>";
        echo "<button class='recipe-btn' onclick='showRecipe(" . $row["id"] . ")'>" . $row["title"] . "</button>";
        echo "<div id='recipe_" . $row["id"] . "' style='display:none;'>";
        
        // Format Ingredients as a Bulleted List
        $ingredientsList = explode("\n", $row["ingredients"]);
        echo "<p><strong>Ingredients:</strong><br>";
        echo "<ul>";
        foreach ($ingredientsList as $ingredient) {
            echo "<li>" . trim($ingredient) . "</li>";
        }
        echo "</ul></p>";

        // Format Instructions as an Ordered List
        $instructionsList = explode("\n", $row["instructions"]);
        echo "<p><strong>Instructions:</strong><br>";
        echo "<ol>";
        foreach ($instructionsList as $instruction) {
            echo "<li>" . trim($instruction) . "</li>";
        }
        echo "</ol></p>";

        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No recipes found.";
}

// Close the database connection
$conn->close();
?>
<script>
    function showRecipe(recipeId) {
        var recipeDiv = document.getElementById('recipe_' + recipeId);
        if (recipeDiv.style.display === 'none') {
            recipeDiv.style.display = 'block';
        } else {
            recipeDiv.style.display = 'none';
        }
    }
</script>
