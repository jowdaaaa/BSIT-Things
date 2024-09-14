<!-- add_recipe_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Add Recipe</h1>

        <!-- Form to Add a Recipe -->
        <form action="add_recipe.php" method="post">
            <label for="title">Recipe Title:</label>
            <input type="text" name="title" required>

            <label for="ingredients">Ingredients:</label>
            <textarea name="ingredients" rows="4" required></textarea>

            <label for="instructions">Instructions:</label>
            <textarea name="instructions" rows="6" required></textarea>

            <button type="submit">Add Recipe</button>
        </form>
    </div>
</body>
</html>
