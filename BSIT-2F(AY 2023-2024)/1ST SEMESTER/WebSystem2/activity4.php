<!DOCTYPE HTML>
<html>

<head>
    <title>Registration Form</title>
    <style>
        @font-face {
            font-family: swash;
            src: url(Fonts/Swash.otf);
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
            margin-top: -40px;
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

        p {
            text-align: center;
            font-family: swash;
            font-size: 70px;
            margin-bottom: 0;
            color: white;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: rgb(245, 245, 245,0.5);
        }

        label {
            display: block;
            font-weight: bold;
            color: #363062;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="tel"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #363062;
            color: #ffffff;
            width: 150px;
            padding: 10px 20px;
            border: 2px solid #363062;
            border-radius: 50px;
            cursor: pointer;
            margin: 0 auto;
            display: block;
            font-weight: bold;
            transition : 0.2s ease-in-out;
        }

        input[type="submit"]:hover {
            background: rgb(13, 18, 130, 0.5);
            border: 2px solid #363062;
            color: rgb(245, 245, 245);;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="vb">
        <video autoplay loop muted>
            <source src="Video/bgvid.mp4" type="video/mp4">
        </video>
    </div>

    <p>- Registration Form -</p>
    <form action="registration.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="course">Course</label>
        <input type="text" id="course" name="course" required>

        <label for="age">Age</label>
        <input type="number" id="age" name="age" required>

        <label for="school">School</label>
        <input type="text" id="school" name="school" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>

        <label for="quote">Favorite Quote</label>
        <textarea id="quote" name="quote" required></textarea>

        <input type="submit" value="REGISTER">
    </form>

</body>

</html>