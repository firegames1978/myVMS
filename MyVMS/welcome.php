<?php
    session_start();
    if (!isset($_SESSION['loggedin'])|| ($_SESSION['loggedin']!=true))
    {
        header("location: login.php");
        exit;
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>WELCOME - <?php $_SESSION['username'] ?> </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  

    <style>
        .main 
        {
            margin-left: 200px; /* Same as the width of the sidebar */
            font-size: 30px; /* Increased text to enable scrolling */
            padding: 5px 5px;
            /* width: auto;
            height: 100%; */

        }

        .container
        {
          top: 5px;
          left: 10px;
        }

    </style>

</head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <?php require 'partials/_nav.php'?>
    <?php require 'partials/_sidebar.php'?>
    
    <div class="main">
        <div class="container p-3 bg-primary text-white text-center">
            <h1>CIL Visitor & Vehicle System</h1>
            <img src='partials/Muru_logo.png' width=30%> </img> 
            <hr>
            <img src='partials/coro_logo.png' width='70%'> </img> 
    </div>

  </body>
</html>
