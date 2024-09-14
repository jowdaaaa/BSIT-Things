<?php
$questions = array(
/*1*/    " What does PHP stand for?",
  /*2*/   " What is the syntax for commenting in PHP?",
  /*3*/  " What is the difference between single quotes and double quotes in PHP?",
 /*4*/   " How do you concatenate strings in PHP?",
 /*5*/   " What is the purpose of the \$_GET variable in PHP?",
 /*6*/   " Which PHP function is commonly used to open a file for writing?",
 /*7*/   " Which PHP function is used to close an open file handle?",
 /*8*/   " Which PHP function is used to read the contents of a file?",
  /*9*/  " Which PHP function is used to write data to a file?",
 /*10*/   " Which PHP function is used to create an array?",
 

);

$options = array(
    array("A) Personal Home Page", "B) Preprocessed Hypertext Processor", "C) PHP: Hypertext Preprocessor ", "D) Public Hosting Platform"),
    array("A) <- comment  ->", "B) /* Comment", "C) // Comment ", "D) # Comment"),
    array("A) Single quotes allow variable interpolation, while double quotes do not. ", "B) Single quotes preserve escape sequences, while double quotes do not.", "C) Single quotes are used for string concatenation, while double quotes are used for string interpolation.", "D) Single quotes are used for HTML output, while double quotes are used for plain text output."),
    array("A) Using the plus (+) operator", "B) Using the asterisk (*) operator", "C) Using the concatenation operator (.) ", "D) Using the dollar sign ($) operator"),
    array("A) It is used to retrieve data sent through a form using the GET method.", "B) It is used to retrieve data sent through a form using the POST method.", "C) It is used to retrieve data from the URL query string. ", "D) All of the above"),
    array("A) fopen()", "B) fclose()", "C) fread()", "D) fwrite()"),
    array("A) fopen()", "B) fclose()", "C) fread()", "D) fwrite()"),
    array("A) fopen()", "B) fclose()", "C) fread() ", "D) fwrite()"),
    array("A) fopen()", "B) fclose()", "C) fread()", "D) fwrite() "),
    array("A) array_push()", "B) array_merge()", "C) array_pop()", "D) array() "),
   
    
);
			   //1  2  3  4  5  6  7  8  9  10 
$answers = array(2, 2, 0, 2, 2, 0, 1, 2, 3, 3, );
		   	//   c  c  a  c  c  a  b  c  d  d  

?>
<html>
<head>
    <title>Midterm Project Exam</title>
    
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
        transform: scale(1.9); /* Adjust the scale factor to make it larger */
       /* background-color: #fff; /* Set the background color to white or any color you prefer */
        border: 2px solid #000; /* Add a border to make them stand out */
    }

    input[type="submit"] {
    background-color: #333;
    color: white;
    padding: 30px 300px; /* Adjust the padding values as needed */
    border-radius: 15px;
    cursor: pointer;
    margin-top: 30px;
    text-align: flex;
    height: 100px;
    font-size:30px;
    font-family: 'drius', sans-serif; 
    
    

}

input[type="submit"]:hover {
    background-color: darkblue;
    
}

    .que {
        margin: 15px 0;
        font-size: 10px;
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
        margin: 10px 0;
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
        } 
    }
    .welcome-message {
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 30px;
            font-family: 'drius', sans-serif; 
            
        }
</style>
</head>

<body>
<div class="welcome-message">
    <?php echo " Welcome " . $_COOKIE ['name'] . " For " ; ?>

</div>
<div class="video-container">
    <video autoplay loop muted playsinline>
       <source src="video1.mp4" type="video/mp4"> 
    </video>
</div>

</body>
</head>
<body>

<div class="container">
    <h1>Final Examination</h1>
    
    <form action="resulta.php" method="post">
        <table>
        <form method="post" action="process.php">

</form>
            <?php
            foreach ($questions as $key => $value) {
                echo '<div class="que">';
                echo "<h2>Question# " . ($key + 1) . "</h2>";
                echo "<hr>";
                echo "<p>" . $questions[$key] . "</p>";

                for ($i = 0; $i < 4; $i++) {
                    echo '<div class="q">';
                    echo '<input type="radio" value="' . $i . '"name="Question' . ($key + 1) . '" required>'  . $options[$key][$i] . '<br>';
                    echo '</div>';
                }

                echo "</div>";
            }
            ?>
        </table>
        <input type="submit" value="Submit" />
    </form>
</div>
</body>
</html>
