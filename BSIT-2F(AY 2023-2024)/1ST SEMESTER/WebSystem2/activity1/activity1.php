<?php

  $pangalan = isset($_GET['name']) ? $_GET['name'] : "Anonymous";
  $kurso = isset($_GET['course']) ? $_GET['course'] : "Secret";
  $paaralan = isset($_GET['school']) ? $_GET['school'] : "Basta jan lang";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

  body {
    background-color: #272829;
  }

  h1 {
    color: white;
    font-family: montserrat;
  }

  .card {
    background-color: white;
    box-shadow: 0px 0px 20px lightblue;
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
  }

  .title {
    color: grey;
    font-size: 18px;
  }

  button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }

  a {
    text-decoration: none;
    font-size: 22px;
    margin: 0 5px;
    color: #272829;
  }

  a i {
    transition : 0.3s;
  }

  a i:hover {
    scale: 1.5;
  }

  a i.fa-facebook:hover {
    color: blue;
  }

  a i.fa-instagram:hover {
    color: red;
  }

  a i.fa-twitter:hover {
    color: #1D9BF0;
  }

  button:hover {
    opacity: 0.7;
  }
</style>
</head>
<body>

<h1 style="text-align:center">User Profile Card</h1>

<div class="card">
  <img src="image.jpg" alt="error" style="width:100%">
  <h2><?php echo $pangalan; ?> </h2>
  <p class="title"><?php echo $kurso; ?></p>
  <p><?php echo $paaralan; ?></p>
  <div style="margin: 24px 0;">
    <a href="https://www.facebook.com/PauloL.01" target="_blank"><i class="fa fa-facebook"></i></a> 
    <a href="https://www.instagram.com/jowdaaaa/" target="_blank"><i class="fa fa-instagram"></i></a>  
    <a href="https://www.twitter.com/imdanielpadilla" target="_blank"><i class="fa fa-twitter"></i></a>  
  </div>
  <p><button>Contact</button></p>
</div>

</body>
</html>
