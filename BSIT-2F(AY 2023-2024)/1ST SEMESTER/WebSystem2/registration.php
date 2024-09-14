<!DOCTYPE HTML>
<html>

    <head>
        <title>Registration Details</title>
        <style>

            @font-face {
                font-family: swash;
                src: url(Fonts/Swash.otf);
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .vb {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                overflow: hidden;
                z-index: -1;
            }

            .title {
                text-align: center;
                font-family: swash;
                font-size: 50px;
                margin-bottom: 0;
                color: white;
            }

            .details {
                max-width: 400px;
                margin: 0 auto;
                background-color: #EEEDED;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            label {
                display: block;
                font-weight: bold;
                margin-bottom: -12px;
            }

            p {
               margin-left: 15px;
            }
        </style>
    </head>

    <body>
        <div class="vb">
            <video autoplay loop muted>
                <source src="Video/bgvid.mp4" type="video/mp4">
            </video>
        </div>
        
        <p class= "title">Registration Details</p>

        <div class="details">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $course = $_POST["course"];
                    $age = $_POST["age"];
                    $school = $_POST["school"];
                    $phone = $_POST["phone"];
                    $address = $_POST["address"];
                    $quote = $_POST["quote"];

                    echo "<label>Name:</label>";
                    echo "<p>$name</p>";

                    echo "<label>Email Address:</label>";
                    echo "<p>$email</p>";

                    echo "<label>Course:</label>";
                    echo "<p>$course</p>";

                    echo "<label>Age:</label>";
                    echo "<p>$age</p>";

                    echo "<label>School:</label>";
                    echo "<p>$school</p>";

                    echo "<label>Phone Number:</label>";
                    echo "<p>$phone</p>";

                    echo "<label>Address:</label>";
                    echo "<p>$address</p>";

                    echo "<label>Favorite Quote:</label>";
                    echo "<p>$quote</p>";
                }
            ?>
        </div>

    </body>

</html>