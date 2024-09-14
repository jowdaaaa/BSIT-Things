<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
            margin-top: 50px;
        }
        h1 {
            text-align: center;
        }
        input[type=text] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        .cancelbtn {
            float: left;
            width: 50%;
            background-color: #f44336;
            color: white;
            padding: 14px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .signupbtn {
            float: right;
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .cancelbtn:hover, .signupbtn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <form action="#" style="border:1px solid #ccc" class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" required>

        <label for="mname"><b>Middle Name</b></label>
        <input type="text" placeholder="Enter Middle Name" name="mname" required>

        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lname" required>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </form>
</body>
</html>
