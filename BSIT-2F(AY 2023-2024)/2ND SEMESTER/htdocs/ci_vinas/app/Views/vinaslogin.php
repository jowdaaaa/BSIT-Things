
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #DDE6ED;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: montserrat;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            letter-spacing: 1px;
        }
        input {
            width: 100%;
            padding: 10px 15px;
            margin-top: 3px;
            border: 1px solid #9AC8CD;
            box-sizing: border-box;
            letter-spacing: 0.5px;
            transition: 0.1s ease-in-out;
        }
        .button {
            margin-top: 20px;
            text-align: center;
        }
        button {
            padding: 10px 30px;
            margin-top: 3px;
            margin-bottom: 10px;
            border: 1px solid #526D82;
            background-color: #526D82;
            color: white;
            box-sizing: border-box;
            box-shadow: 3px 3px 0px black;
            letter-spacing: 0.5px;
            transition: 0.1s ease-in-out;
            transform: translate(-3px, -3px);
            letter-spacing: 1px;
            font-family: montserrat;
        }
        button:hover {
            background-color: #526D82;
            transform: translate(0px, 0px);
            box-shadow: 0px 0px 0px black;
        }
        button:active {
            background-color: #27374D;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form method="" action="#">
        <h2>LOGIN FORM</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter username here" required><br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password here" required><br><br>

        <div class="button">
            <button type="submit">LOGIN</button>
        </div>
    </form>
</body>
</html>