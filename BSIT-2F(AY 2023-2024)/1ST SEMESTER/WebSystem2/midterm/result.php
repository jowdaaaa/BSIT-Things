<?php

    $questions = array( // #0 Questions  dapat
        "What do the initials of PHP stand for?", // Question 1,
        "How do you start a PHP script in a .php file?", // Question 2,
        "What is a variable in PHP, and how do you declare one?", // Question 3
        "How do you display output in PHP?",
        "What is the purpose of the echo statement in PHP, and how does it work?",
        "How can you concatenate strings in PHP?",  
        'How do you display "Hello World" in PHP',  
        "All variables in PHP start with which symbol?",
        "What is the correct way to end a PHP statement?",
        "Which operator is used to check if two values are equal and of same data type?", 
        "How do you create an array in PHP?",  
        "What is a correct way to add a comment in PHP?",  
        'What is the correct way to add 1 to the $count variable?',
        'What is the correct way to open the file "time.txt" as readable?',
        'How do you get information from a form that is submitted using the "get" method?',   
        "A type of loop that repeatedly executes a block of code as long as a specified condition remains true?",
        "A type of loop that allows you to iterate through a block of code for each element in an array?",
        "It is a special variable, which can hold more than one value at a time.",  
        "How can you determine the number of elements or length of an array in programming using a specific function?",  
        "Is a special variable, which can hold more than one value at a time.",  
        "Loops through a block of code once, and then repeats the loop as long as the specified condition is true.",
        "A function generates a random number.",
        "Is a special data type which can have only one value.",   
        "A sequence of characters.",
        "A server-side scripting language.",
        'If the variable $var1 is set to 10 and the $var2 is set to the character var1, what’s the value of $var2?',
        "A function that returns the square root of a number.",
        "Which of the following function is used to get length of a string?",
        "Which of the following function sorts an array in reverse order?",
        "Which of the following function is used to read the content of a file?",
    );
    
    
    $options = array(
        array("Personal Hypertext Page", "Hypertext Pro-processor", "Philippine Hero Protector", "Hypertext Pre-processor"), // Options in question 1
        array("localhost&demo.php", "l0calhost/demo.php", "localhost/demo.php", "localhost?demo.php"),
        array("int", "$", "&", "+"),
        array("echo", "System.out.print", "cout", "All of the above"),
        array("To declare variable", "To display the output of parameters that are passed to it", "Both A and B", "None of the above"),
        array("||", "<<", ".", "+"),  
        array('System.out.print("Hello World");', 'echo "Hello World;', 'cout<<"Hello World";', "All of the above"),
        array("$ ", "&", "%", "None of the above"),
        array(",", ";", ".", "Nothing"),  
        array("==", "!==", "===", "="),
        array("int cars;", "cars[10];", 'String cars = array("Volvo", "BMW", "Toyota");', '$cars = array("Volvo", "BMW", "Toyota");'),
        array("{*...*}", "/", "/*...*/ ", "All of the above"),
        array('$count--;', '$counts++;', '$count+;', "None of the above"),
        array('fopen("time.txt","w");', 'fopen("time.txt","r");', 'fopen("time.txt","a");', 'fopen("time.txt","x");'),  
        array('GET[ ]', 'S_GET[ ];', 'S_POST[ ]', '$_GET[ ]'),
        array("for", "while", "do...while", "foreach"),
        array("for", "while", "foreach", "do...while"),
        array("loop", "variable", "array", "Both B and C"),  
        array('echo count(cars);', 'echo $carsLength;', 'echo count($cars);', "None of the above"),
        array("Integer", "Array", "String", "Character"),
        array("for", "do...while", "while", "foreach"),
        array('sqrt()', 'rand()', 'round()', "None of the above"),
        array("short", "Null", "char", "long"),  
        array("array", "String", "char", "All of the above"),
        array("Local Host", "Server", "HTML", "PHP"),
        array('sqrt()', 'rand()', 'abs()', 'round()'),
        array('rand()', 'abs()', 'round()', 'sqrt()'),
        array("strpos()", "strrev()", "str_word_count()", "strlen()"),
        array("strpos()", 'abs()', "str_replace()", "rsort()"),
        array("Letter C yan HAHAHA", "fclose()", "fopen()", "fread()"),
    );
                  // 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30
    $answers = array(3,2,1,0,1,2,1,0,1,2, 3, 2, 3, 1, 3, 1, 2, 2, 2, 1, 1, 1, 1, 1, 3, 3, 3, 3, 3, 3); // index of correct answer in options


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
        <title>Midterm Exam Result</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <video autoplay muted loop id="video-bg">
            <source src="Video/bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <h1>Midterm Exam Result</h1>
            <?php 
                $name1 = $_POST["name1"];
                $name2 = $_POST["name2"];
                echo '<div class="header">';
                echo '<div class="names">';
                echo "<p><b>Examinees</b> : $name1 & $name2 </p>";
                echo '</div>';
                
                echo '<div class="score">';
                echo '<p>'. $score. "/" . count($questions) . "<br> SCORE </p>"; 
                echo '</div>';
                echo '</div>';
            ?>
            <form>
                <table>
                    <?php
                        foreach ($questions as $key => $value) {
                            echo '<div class="que">';
                            echo '<p class="qn">Question ' . ($key + 1) . "</p>";
                            echo "<hr>";
                            echo "<p>" . $questions[$key] . "</p>";
                            
                            for ($i = 0; $i < 4; $i++) {
                                $selected_option = $_POST["Question" . ($key + 1)];
                                $is_selected = ($i == $selected_option);
                                $checked = ($is_selected) ? 'checked' : '';
                                $class = ($i == $answers[$key]) ? 'correct' : (($is_selected) ? 'selected' : '');
                                $message = $i == $answers[$key] ? '  [CORRECT]' : ($is_selected ? '  [INCORRECT]' : '');

                                echo '<input type="radio" value="' . $i . '" name="Question' . ($key + 1) . '" ' . $checked . ' disabled>';
                                echo '<span class="' . $class . '">' . $options[$key][$i] . '</span>';
                                echo '<span class="' . ($i == $answers[$key] ? 'correct-message' : 'incorrect-message') . '">' . $message . '</span><br>';
                            }
                            echo '</div>';
                        }

                        $myfile = fopen ("result.txt", "a") or die ("Hindi Pwede!");
                        fwrite ($myfile, "-----------------------------------------------------------\n");
       					fwrite ($myfile, "Examinees : " . $name1 . " and " . $name2 . "\n");     
                    	fwrite ($myfile, "Score : " . $score . " out of " . count($questions) . "\n"); 
                        fwrite ($myfile, "-----------------------------------------------------------\n\n");
                    ?>
                </table>
            </form>
        </div>
    </body>
</html>
