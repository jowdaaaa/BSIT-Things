<?php

$questions = array(
    " What does PHP stand for?",
    " What is the syntax for commenting in PHP?",
    " What is the difference between single quotes and double quotes in PHP?",
    " How do you concatenate strings in PHP?",
    " What is the purpose of the \$_GET variable in PHP?",
    " Which PHP function is commonly used to open a file for reading or writing?",
    " Which PHP function is used to close an open file handle?",
    " Which PHP function is used to read the contents of a file?",
    " Which PHP function is used to write data to a file?",
    " Which PHP function is used to create an array?",
  
);
$options = array(
    array("A) Personal Home Page", "B) Preprocessed Hypertext Processor", "C) PHP: Hypertext Preprocessor (CORRECT ANSWER)", "D) Public Hosting Platform"),
    array("A) <- comment  ->", "B) /* Comment", "C) // Comment (CORRECT ANSWER)", "D) # Comment"),
    array("A) Single quotes allow variable interpolation, while double quotes do not. (CORRECT ANSWER)", "B) Single quotes preserve escape sequences, while double quotes do not.", "C) Single quotes are used for string concatenation, while double quotes are used for string interpolation.", "D) Single quotes are used for HTML output, while double quotes are used for plain text output."),
    array("A) Using the plus (+) operator", "B) Using the asterisk (*) operator", "C) Using the concatenation operator (.) (CORRECT ANSWER)", "D) Using the dollar sign ($) operator"),
    array("A) It is used to retrieve data sent through a form using the GET method.", "B) It is used to retrieve data sent through a form using the POST method.", "C) It is used to retrieve data from the URL query string. (CORRECT ANSWER)", "D) All of the above"),
    array("A) fopen() (CORRECT ANSWER)", "B) fclose()", "C) fread()", "D) fwrite()"),
    array("A) fopen()", "B) fclose() (CORRECT ANSWER)", "C) fread()", "D) fwrite()"),
    array("A) fopen()", "B) fclose()", "C) fread() (CORRECT ANSWER)", "D) fwrite()"),
    array("A) fopen()", "B) fclose()", "C) fread()", "D) fwrite() (CORRECT ANSWER)"),
    array("A) array_push()", "B) array_merge()", "C) array_pop()", "D) array() (CORRECT ANSWER)"),
   
    
    
);
			   //1  2  3  4  5  6  7  8  9  10 
$answers = array(2, 2, 0, 2, 2, 0, 1, 2, 3, 3, );
		   	//   c  c  a  c  c  a  b  c  d  d  
// Set the correct answers in the question arrays



for ($i = 0; $i < count($questions); $i++) {
    $correctAnswerIndex = $answers[$i];
    $questions[$i][$correctAnswerIndex] = str_replace("(CORRECT ANSWER)", "(CORRECT ANSWER)", $questions[$i][$correctAnswerIndex]);
}
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $score = 0;
    
        for ($i = 0; $i < count($questions); $i++) {
            $selected_option = $_POST["Question" . ($i + 1)];

            if ($selected_option == $answers[$i]) {
                $score++; 
            }
        }
    }
?>

<html>
    <head>
        <title>Final Examination</title>
        <style> 
  @font-face {
    font-family: 'drius'; /* Your custom font name */
    src: url('drius.ttf') format('truetype'); /* URL to your font file and format */
}
@font-face {
    font-family: 'Qureah'; /* Your custom font name */
    src: url('Qureah.otf') format('truetype'); /* URL to your font file and format */
}
@font-face {
    font-family: 'sunflower'; /* Your custom font name */
    src: url('sunflower.otf') format('truetype'); /* URL to your font file and format */
}

    body {
        background-color: white;
        margin: 0;
        padding: 0;
    }

    .logout-button {
    background-color: #333;
    color: white;
    padding: 30px 15px; /* Adjust the padding values as needed */
    border-radius:15px;
    cursor: pointer;
    margin-top: 30px;
    text-align: center;
    height: 100px;
    font-size:35px;
    font-family: 'drius', sans-serif; 
        }

        .logout-button:hover {
            background-color: darkblue;
        }

    .video-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }

    .video-container video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1;
        background-color: rgba(255, 255, 255, -1); /* Red with 30% opacity */
        color: white; /* Set font color to white */
    }

    h1 {
        text-align: center;
        font-family: 'drius', sans-serif; 
    }

    form {
        margin-top: 40px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 4px solid #ccc;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: #fff;
    }
                

    input[type="radio"] {
        margin-right: 15px;
        cursor: pointer;
        transform: scale(1.5); /* Adjust the scale factor to make it larger */
       /* background-color: #fff; /* Set the background color to white or any color you prefer */
        border: 2px solid #000; /* Add a border to make them stand out */
    }

    input[type="submit"] {
        background-color: #333;
        color: #fff;
        padding: 30px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 0px;
    }

    input[type="submit"]:hover {
        background-color: #555;
    }

    .que {
        margin: 15px 0;
        font-size: 15px;
    }
    h2 {
        font-size: 25px;
        margin: 0;
    }

    hr {
        margin: 10px 0;
    }

    p {
        font-size: 25px;
        margin: 15px 0;
        font-family: 'sunflower';
    }
    label {
        font-family: 'sunflower';
        margin-bottom: 10px;
        display: block;
        align-items: center;
        border: 2px solid #333;
        padding: 10px;
        font-weight: bold;
    }
    .section {
    margin-bottom: 20px;
    padding: 10px;
    border: 2px solid #ddd; /* Add a border around the container */
    }
     .button{
            text-align:center;       
    }

    input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 3px solid #333; 
    border-radius: 5px;
    font-size: 16px;    
    }

    /* Style for options */
    .q {
        margin: 10px 0;
        font-size: 15px;
        font-family: 'Qureah', sans-serif;
    }

    /* Responsive design for smaller screens */
    @media (max-width: 600px) {
        .container {
            padding: 10px;
        }

        table {
            font-size: 14px;
        }

        input[type="radio"] {
            margin-right: 5px;
            background-color: #fff;
            font-size: 28px;
        }
        input[type="submit"] {
            padding: 15px 16px;
        }     
    }
</style>
</head>

<body>
    
     <div class="video-container">
        <video autoplay loop muted playsinline>
            <source src="video1.mp4" type="video/mp4">
            <!-- Add additional source elements for different video formats -->
        </video>
    </div> 
    <body> 
    </body>
        <div class="container">


        
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    echo "<h1>Final Examination Result</h1>";
   
    }
?>
            <?php echo '<p class="score"> Your score: ' . $score . ' out of ' . count($questions) . '</p>'; ?>
            <table>
                <?php
                foreach ($questions as $key => $value) {
                    echo '<div class="que">';
                    echo "<h2>Question " . ($key + 1) . "</h2>";
                    echo "<hr>";
                    echo "<p>" . $questions[$key] . "</p>";
                    echo "<div>";
                    for ($i = 0; $i < 4; $i++) {
                        $selected_option = $_POST["Question" . ($key + 1)];
                        $is_selected = $i == $selected_option;
                        $checked = $is_selected ? 'checked' : '';
                        echo '<input type="radio" value="' . $i . '" name="Question' . ($key + 1) . '" ' . $checked . ' disabled> ' ;
                        echo $options[$key][$i] . '<br>';
                    }
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
                
                
            </table>
           <br>
           
            <a href="logout.php" class="logout-button">LOGOUT</a>
        
                
        </div>
    </body>
</html>

       