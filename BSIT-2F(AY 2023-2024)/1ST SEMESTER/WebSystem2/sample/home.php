<!-- home.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Recipe Database</h1>

        <!-- Button to Navigate to Recipe Form -->
        <a href="add_recipe_form.php">
            <button class="btn">Add a Recipe</button>
        </a>

        <!-- Display Recipes -->
        <h2>Recipes</h2>
        <?php include 'get_recipes.php'; ?>
    </div>
</body>
</html>
