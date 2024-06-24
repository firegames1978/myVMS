<?php
    $login = false;
    $showError = false;
    if ($_SERVER ["REQUEST_METHOD"] == "POST")
        {
        include 'partials/_dbconnect.php';
            
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "Select * from users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
                if ($num == 1)
                {
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header("location: welcome.php");
                }
                else
                {
                    $showError ="Invalid credentials.";
                }

        }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp - VMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  

    <style>
    
        .bg-image {
            /* The image used */
            background-image: url("partials/pexels4.jpg");

            min-height: 650px;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            }

        .container {
            /* background-image: url("partials/pexels3.jpg"); */
            position: absolute;
            right: 0;
            margin: 20px;
            max-width: 450px;
            padding: 10px;
            background-color: white;
        }
        
        
            /* Full-width input fields */
        input[type=text], input[type=password], input[type=email] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 5px 0;
            border: none;
            background: #f1f1f1;
            }

        input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
            background-color: #ddd;
            outline: none;
            }


    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <?php require 'partials/_nav.php'?>

    <?php
        if($login)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Login Successfully!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> &times;</span>
                        </button>
                </div>';
        }

        if($showError)
        {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error !</strong> '. $showError.' 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> &times;</span>
                        </button>
                </div>';
        }
    ?>

    


    <div class="bg-image">

        <div class="container my-3">
            <h2 class="text-center bg-info p-1">Login to CIL VMS</h2>
            <form action="login.php" method="post">
                <div class="form-floating mb-3 mt-3 col-md-8">
                    <input type="text" class="form-control" placeholder="Enter Your Name" id="username" name="username" required>
                    <label for="username">User Name</label>
                </div>
            
                <div class="form-floating mb-3 mt-3 col-md-8">
                    
                    <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" required>
                    <label for="password">Password</label>
                </div>

                <br>
                <button type="submit" class="btn btn-primary col-md-8">Login</button>

            </form>
            
        </div>

    </div>

</body>
</html>