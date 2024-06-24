<?php
    $showAlert = false;
    $showError = false;
    if ($_SERVER ["REQUEST_METHOD"] == "POST")
        {
        include 'partials/_dbconnect.php';
            
            $username = $_POST["username"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            $email = $_POST["email"];
            $city = $_POST["city"];
            $gender = $_POST["gender"];

            $exists = false;
            // check weither this user exists 
            
            $existSql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $existSql);
            $numExistRows = mysqli_num_rows($result);
            if ($numExistRows > 0)
            {
                $showError = "Username already exists";
            }
            else
            {
                if ($password == $cpassword)
                {
                    $sql = "INSERT INTO `users` (`username`, `password`, `email`, `city`, `gender`, `dt`) 
                    VALUES ('$username', '$password', '$email', '$city', '$gender', current_timestamp())";

                    $result = mysqli_query($conn, $sql);    

                    if ($result)
                    {
                        $showAlert = true;
                    }
                }
                else
                {
                    $showError = "Password do not match";
                }
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
        if($showAlert)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Account create Successfully, You may login!
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
            <h2 class="text-center bg-info p-1">SignUP to CIL VMS</h2>
            <form action="signup.php" method="post">
                <div class="form-group col-md-8">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" id="username" name="username" required>
                </div>
            
                <div class="form-group col-md-8">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" required>
                </div>

                <div class="form-group col-md-8">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Enter Confirm Password" id="cpassword" name="cpassword" required>
                    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password.</small>
                </div>

                <div class="form-group col-md-8">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" aria-describedby="emailHelp" required>
                    
                </div>

                <div class="form-group col-md-8">
                    <label for="city">City</label>
                    <input type="text" class="form-control" placeholder="Enter City Name" id="city" name="city" required>
                </div>
                
                <div class="form-check  col-md-8">
                    <input class="form-check-input" type="radio" name="gender" id="gendermale" value="male" checked>
                        <label class="form-check-label" for="gendermale">
                            MALE
                        </label>
                </div>
                <div class="form-check col-md-8">
                    <input class="form-check-input" type="radio" name="gender" id="genderfemale" value="female">
                        <label class="form-check-label" for="genderfemale">
                            FEMALE            
                        </label>
                </div>
                <div class="form-check col-md-8">
                    <input class="form-check-input" type="radio" name="gender" id="gendermix" value="thirdgender">
                        <label class="form-check-label" for="gendermix">
                            Third Gender        
                        </label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary col-md-8">Submit</button>
            </form>
            
        </div>

    </div>



</body>
</html>