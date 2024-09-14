<!DOCTYPE html>
<html>
<head>
    <title>Set Operations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Silkscreen&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: montserrat;
        }

        @font-face {
            font-family: 'montserrat';
            src: url('Montserrat-Regular.ttf');
        }

        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .card {
            color: white;
            background-color: rgba(0, 0, 0, 0.748);
            border-radius: 20px;
            width: 500px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.434);
            z-index: 1;
            position: relative;
        }
        .card-header {
            text-align: center;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }
        .result {
            margin-top: 20px;
        }

        h2 {
            margin-bottom: 0px;
            margin-top: 20px;
            font-family: 'Silkscreen', sans-serif;
            letter-spacing: 2px;
            animation: glitch 1s infinite;
            text-align: center;
            line-height: 25px;
        }

        @keyframes glitch {
            0% {
                color: #fff;
            }
            25% {
                color: #00ff00;
            }
            50% {
                color: #ff00ff;
            }
            75% {
                color: #0000ff;
            }
            100% {
                color: #fff; 
            }
        }

        input {
            width: 100%;
            height: 40px;
            padding: 10px 15px;
            box-sizing: border-box;
            border-radius: 5px;
            border: none;
            opacity: 0.8;
            font-family: 'Montserrat', sans-serif;
        }

        select {
            width: 100%;
            height: 40px;
            padding: 10px 15px;
            box-sizing: border-box;
            border-radius: 5px;
            border: none;
            opacity: 0.8;
            font-family: 'Montserrat', sans-serif;
        }

        button {
            translate: -3px -3px;
            box-shadow: 3px 3px 0px gray;
            border-radius: 30px;
            border: none;
            width: 100%;
            margin: 10px 0px;
            padding: 5px;
            transition: 0.2s;
        }

        button:hover {
            translate: 0px 0px;
            box-shadow: 0px 0px 0px gray;
            border: none;
            width: 100%;
            margin: 10px 0px;
            padding: 5px;
        }

        strong {
            color: #41B06E;
        }

        p.name {
            text-align: center;
            font-size: 10px;
            margin-top: 5px;
        }
        
    </style>
</head>
<body>
    <video autoplay muted loop id="video-background">
        <source src="bg.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="card">
        <h2>Set Operations Calculator</h2>
        <p class="name">JUDAH PAULO VIÑAS || BSIT-2F</p>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label for="universal_set">Universal Set (comma-separated values)</label>
                    <input type="text" id="universal_set" name="universal_set">
                </div>
                <div class="form-group">
                    <label for="set1">Set A (comma-separated values)</label>
                    <input type="text" id="set1" name="set1" required>
                </div>
                <div class="form-group">
                    <label for="set2">Set B (comma-separated values)</label>
                    <input type="text" id="set2" name="set2" required>
                </div>
                <div class="form-group">
                    <label for="operation">Select Operation</label>
                    <select class="form-control" id="operation" name="operation">
                        <option value="">Select an operation</option>
                        <option value="union">Union [A ∪ B]</option>
                        <option value="intersection">Intersection [A ∩ B]</option>
                        <option value="difference1">Set Difference (Set A - Set B) [A \ B]</option>
                        <option value="difference2">Set Difference (Set B - Set A) [B \ A]</option>
                        <option value="complement1">Complement (Set A) [A']</option>
                        <option value="complement2">Complement (Set B) [B']</option>
                    </select>
                </div>
                <button type="submit">CALCULATE</button>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $set1 = explode(",", $_POST["set1"]);
                $set2 = explode(",", $_POST["set2"]);
                $universal_set = isset($_POST["universal_set"]) ? explode(",", $_POST["universal_set"]) : [];
                $operation = $_POST["operation"];

                // Display the result
                echo "<div class='result'>";
                echo "<h3>Result</h3>";
                if ($operation === "union") {
                    $union = array_unique(array_merge($set1, $set2));
                    echo "<p>Therefore, the union of Set A and Set B is <strong>{ " . implode(", ", $union) . " }</strong>.</p>";

                } else if ($operation === "intersection") {
                    $inter = array_intersect($set1, $set2);
                    echo "<p>Therefore, the intersection of Set A and Set B is <strong>{ " . implode(", ", $inter) . " }</strong>.</p>";

                } else if ($operation === "difference1") {
                    $diff1 = array_diff($set1, $set2);
                    echo "<p>Therefore, the difference of Set A to Set B is <strong>{ " . implode(", ", $diff1) . " }</strong>.</p>";

                } else if ($operation === "difference2") {
                    $diff2 = array_diff($set2, $set1);
                    echo "<p>Therefore, the difference of Set B to Set a is <strong>{ " . implode(", ", $diff2) . " }</strong>.</p>";

                } else if ($operation === "complement1") {
                    $comp1 = array_diff($universal_set, $set1);
                    echo "<p>Therefore, the complement of Set A is <strong>{ " . implode(", ", $comp1) . " }</strong>.</p>";

                } else if ($operation === "complement2") {
                    $comp2 = array_diff($universal_set, $set2);
                    echo "<p>Therefore, the complement of Set B is <strong>{ " . implode(", ", $comp2) . " }</strong>.</p>";

                } else {
                    echo "<p>Invalid operation selected</p>";
                }
                
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
