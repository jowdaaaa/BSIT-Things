<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3</title>
    <style>
        @font-face {
            font-family: one piece font;
            src: url(Fonts/one\ piece\ font.ttf);
        }

        body {
            background-image: url("Pictures/bg.png");  
        }

        p {
            text-align: center;
            margin-top: 50px;
            color: white;
            font-family: one piece font;
            font-size: 50px;
        }

        table {
            margin: 30px auto;
            margin-bottom: 100px;
            font-family: montserrat;
            overflow-x: auto;
        }

        tr, td {
            text-align: center;
            border-radius: 6px;
            transition : 0.3s ease-in-out;
            cursor: pointer;
            padding: 5px;
        }

        td:hover {
            scale: 1.5;
            background-color: blue;
            color: white;
            box-shadow: 0px 0px 10px black; 
        }

        .odd {
            background-color: lightgray;
            color: black;
        }

        .odd:hover {
            scale: 1.5;
            background-color: blue;
        }

        .even {
            background-color: #D71313;
            color: white;
        }

        .name {
            font-size: 12px;
        }

    </style>
</head>
<body>
    <p>- MULTIPLICATION TABLE -</p>
    <table>
    <?php

        $row = $_GET['row'] ?? 0;
        $col = $_GET['col'] ?? 0;

        for ($i=1; $i <= $row ; $i++) { 
            echo "<tr>";
            for ($x=1; $x <= $col ; $x++) {
                echo "<td"; 
                if (($i*$x)%2 != 0) {
                    echo " class = odd";
                } else {
                    echo " class = even";
                }

                echo "><b>" . $i*$x . "</b></td>";
            }
            echo "</tr>";
        }


    ?>
    </table>

</body>
</html>