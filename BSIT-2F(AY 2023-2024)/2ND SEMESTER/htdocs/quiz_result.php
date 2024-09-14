<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <style>
        html{
            background: url('bg.webp');
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
        }
        body{
            display: flex;
            flex-direction: column; 
            justify-content: center;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
        }
        .container {
            color:white ;
            max-width: 500px;
            width:500px;
            padding: 2rem 4rem 4rem 4rem;
            margin: 1vh 0 0 0;
            background: rgba(255,255,255,0.1);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);  
        }
        form{
            margin-left: 2vh;
        }
        input[type="radio"] {
            appearance: none; 
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #fff; 
            margin-right: 15px ;
            width: 10px;  
            height: 10px;
        }
        input[type="radio"]:checked {
            background-color: black;  
        }   
        p{
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight:900;
        }
        h1{
            text-align: center;
            font-family: 'Montserrat', sans-serif;
        }
        h2{
            text-align: center;
            font-family: 'Montserrat', sans-serif;
        }
        h3{
            font-size: 15px;
        }
        h4{
            text-align: center;
            font-size: 14px;
            font-weight: 700;
        }
        h5{
            font-size: 16px;
        }
    .try-again-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007BFF;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        margin-left:40%;
    }
    .try-again-button:hover {
        background-color: #0056b3; 
    }
    </style>
</head>
<body>
<?php
$studentName1 = isset($_POST["name1"]) ? $_POST["name1"] : "";
$studentName2 = isset($_POST["name2"]) ? $_POST["name2"] : "";
$groupNumber = isset($_POST["groupnum"]) ? $_POST["groupnum"] : "";

$correctAnswers = array("B", "B", "C", "C", "A", "A", "B", "B", "B", "C", "B", "B", "A", "C", "A", "D", "A", "A", "C", "A", "A", "C", "C", "A", "B");
$score = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $userAnswers = array();
    foreach ($_POST as $key => $value) {
        if (strpos($key, "q") === 0) {
            $questionNumber = substr($key, 1);
            $userAnswers[$questionNumber] = $value;
        }
    }

    $questions = array(
        "What is PHP?",
        "What does PHP stand for?",
        "What is the correct way to concatenate two strings in PHP?",
        "What is the purpose of the PHP echo statement?",
        "How do you write 'Hello World' in PHP?",
        "All variables in PHP start with which symbol?",
        "What is the correct way to end a PHP statement?",
        "The PHP syntax is most similar to:",
        "How do you get information from a form that is submitted using the 'get' method?",
        "What does the break statement do in a PHP loop?",
        "What is the correct way to create a function in PHP?",
        "What is the correct way to open the file 'time.txt' as readable?",
        "Which superglobal variable holds information about headers, paths, and script locations?",
        "What is the correct way to add 1 to the $-count variable?",
        "What does the PHP function isset() do?",
        "Which one of these variables has an illegal name?",
        "In PHP, which of the following data types can be used to store text?",
        "How do you create an array in PHP?",
        "Which operator is used to check if two values are equal and of the same data type?",
        "In PHP, what does the session_destroy() function do?",
        "How do you start a session in PHP?",
        "In PHP, what function is used to output text to the screen?",
        "How do you comment out a single line in PHP?",
        "Which of the following is NOT a valid PHP data type?",
        "Which of the following superglobals in PHP is used to access form data sent with the HTTP POST method?"
    );

    $options = array(
        array("A. A programming language", "B. A scripting language", "C. A markup language"),
        array("A. Personal Hypertext Processor", "B. PHP: Hypertext Preprocessor", "C. Private Home Page"),
        array("A. str_concat()", "B. concat()", "C. $-string1 . $-string2", "D. join_strings()"),
        array("A. To receive user input", "B. To execute a loop", "C. To display output to the web browser", "D. To declare a variable"),
        array('A. echo "Hello World";', 'B. Document.Write("Hello World");', 'C. "Hello World";'),
        array("A. $", "B. &", "C. !"),
        array("A. New line", "B. ;", "C. ."),
        array("A. JavaScript", "B. Perl and C", "C. VBScript"),
        array("A. $-GET[];", "B. Request.QueryString;", "C. Request.Form;"),
        array("A. It continues to the next iteration of the loop.", "B. It pauses the loop for a specified time.", "C. It exits the loop entirely.", "D. It doubles the loop iteration."),
        array("A. create myFunction()", "B. function myFunction()", "C. new_function myFunction()"),
        array('A. open("time.txt","read");', 'B. fopen("time.txt","r");', 'C. open("time.txt");', 'D. readfile("time.txt");'),
        array("A. $-SERVER[]", "B. $-PATH[]", "C. $-REQUEST[]", "D. $-FILE[]"),
        array("A. count + 1", "B. $-count + 1", "C. $-count++;", "D. $-count += 1"),
        array("A. Checks if a variable is empty", "B. Checks if a variable is numeric", "C. Checks if a variable exists", "D. Checks if a variable is declared"),
        array("A. $-my_variable", "B. $-var1", "C. $-variable", "D. $-my-variable"),
        array("A. string", "B. int", "C. boolean", "D. float"),
        array("A. array[]", "B. $-array = array();", "C. array($-item1, $-item2, $-item3)", "D. $-array[1,2,3]"),
        array("A. =", "B. ==", "C. ===", "D. =<"),
        array("A. Closes the session", "B. Starts a new session", "C. Deletes a specific session variable", "D. Destroys all session data"),
        array("A. session_start()", "B. session_init()", "C. session()", "D. start_session()"),
        array("A. print()", "B. output()", "C. echo()", "D. display()"),
        array("A. //This is a comment", "B. <!--This is a comment-->", "C. %This is a comment%", "D. /*This is a comment*/"),
        array("A. real", "B. integer", "C. string", "D. boolean"),
        array("A. $-GET[]", "B. $-POST[]", "C. $-REQUEST[]", "D. $-SERVER[]")
    );

    echo '<div class="container">';

    if (empty($studentName1) && empty($studentName2) && empty($groupNumber)) {
        echo '<h1>Please fill in your name and group number.</h1>';
    } else {
        echo "<h1>Quiz Results</h1>";
        echo '<hr>';
        echo "<h2>Group $groupNumber</h2>";

        echo "<h2>$studentName1 and $studentName2</h2>";

        
    echo '</div>';
        echo '<div class="container">';

        echo '<form>';
        for ($i = 0; $i < count($questions); $i++) {
            $questionNumber = $i + 1;
            $userAnswer = isset($userAnswers[$questionNumber]) ? $userAnswers[$questionNumber] : "Not answered";
            $correctAnswer = $correctAnswers[$i];

            $question = $questions[$i];
            $questionOptions = $options[$i];

            echo "<h5>Question $questionNumber:</h5>";
            echo "<p>$question</p>";

            foreach ($questionOptions as $j => $option) {
                $optionLetter = chr(65 + $j); 
                $isChecked = $userAnswer === $optionLetter ? 'checked' : '';
                echo "<input type='radio' disabled $isChecked>$option</input><br>";
            }

            echo "<h4>Your Answer: $userAnswer</h4>";
            echo "<h4>Correct Answer: $correctAnswer</h4>";

            if ($userAnswer === $correctAnswer) {
                $score++;
            }

            echo '<hr>';
        }

        echo '<h2>Your Score: ' . $score . '/25</h2>';
        echo '</form>';
        echo '<a href="index.php" class="try-again-button">↻Try Again</a>';
    }

    echo '</div>';
}

?>
</body>
</html>