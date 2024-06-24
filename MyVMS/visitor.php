<?php
    session_start();
    if (!isset($_SESSION['loggedin'])|| ($_SESSION['loggedin']!=true))
    {
        header("location: login.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Registration</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
            #results { padding:5px; }

            .flex-container {
            /* background-image: url("partials/pexels3.jpg"); */
            position: absolute;
            right: 40px;
            left: 210px;
            margin: auto;
            max-width: auto;
            padding: 5px;
            background-color: lightblue;
        }
    </style>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php require 'partials/_nav.php'?>
<?php require 'partials/_sidebar.php'?>

<div class="clearfix">
                   
    <div class="flex-container">
        
         <div class="row" style="border: 2px solid #FF5733; padding: 10px; margin: 10px;">
         <!-- <img src="coro.png" class="col-md-2 float-md-end mb-3 ms-md-3" alt="...">         -->
                    <h1 style="text-align:center; background-color: MediumSeaGreen"> Visitor Pass </h1>
                           
                <!-- <div class="container my-3"> -->
                            
        <form action="storeImage.php" method="POST">
            <div class="row" style="padding: 5px">
                            <div class="col">
                                <div class="form-floating mb-2 mt-2">
                                    <input type="text" class="form-control" placeholder="Enter Visitor Name" id="visitorname" name="visitorname" required>
                                    <label for="visitorname">Visitor Name</label>
                                </div>
                            </div>
                            
                            
                            <div class="col">
                                <div class="form-floating mb-2 mt-2">
                                    <input type="text" class="form-control" placeholder="Enter Visitor Contact No" id="visitorcontact" name="visitorcontact" required>
                                    <label for="visitorcontact">Contact</label>
                                </div>
                            </div>

                            
                            <div class="col">
                                <div class="form-floating mb-2 mt-2">
                                    <input type="text" class="form-control" placeholder="Enter Visitor Email ID" id="visitormailid" name="visitormailid" required>
                                    <label for="visitormailid">Email ID</label>
                                </div>
                            </div>
            
            </div>
            
            <div class="row" style="padding: 5px;">
                            <div class="col">
                                <div class="form-floating mb-1 mt-1">
                                    <input type="text" class="form-control" placeholder="Enter Visitor Orgnazation Name" id="visitororgname" name="visitororgname" required>
                                    <label for="visitororgname">Orgnaztion Name</label>
                                </div>
                            </div>

                            
                            <div class="col">
                                <div class="form-floating mb-1 mt-1">
                                    <input type="text" class="form-control" placeholder="Enter Visitor Designation" id="visitordesignation" name="visitordesignation" required>
                                    <label for="visitordesignation">Designation</label>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="form-floating mb-1 mt-1">
                                    <input type="text" class="form-control" placeholder="Enter Visitor Aadhar Card No" id="visitoraadhar" name="visitoraadhar" required>
                                    <label for="visitoraadhar">Visitor Aadhar No</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-1 mt-1">
                                    <input type="text" class="form-control" placeholder="Enter Visitor Address" id="visitoraddress" name="visitoraddress" required>
                                    <label for="visitoraddress">Address</label>
                                </div>
                            </div>
            </div>
            <div class="row" style="padding: 5px">
                            <div class="col">
                                <div class="form-floating mb-2 mt-2">
                                    <input type="text" class="form-control" placeholder="Whom to Meet" id="visitormeet" name="visitormeet" required>
                                    <label for="visitormeet">WhomtoMeet</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-2 mt-2">
                                    <input type="text" class="form-control" placeholder="Enter Visit Purpose" id="visitorpurpose" name="visitorpurpose" required>
                                    <label for="visitorpurpose">Visit Purpose</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-2 mt-2">
                                    <input type="text" class="form-control" placeholder="Enter Luggage Details" id="visitorluggage" name="visitorluggege" required>
                                    <label for="visitorluggege"> Luggage </label>
                                </div>
                            </div>
                </div>
                        
        <div class="visitorphoto">
            <form method="POST" action="storeImage.php">
                    <div class="row">
                        <div class="col-md-4">
                            <div id="my_camera"></div>
                            <br/>
                            <input type=button value="Take Snapshot" onClick="take_snapshot()">
                            <input type="hidden" name="image" class="image-tag">
                        </div>
                        <div class="col-md-4">
                            <div id="results">
                            <h5>Your Image</h5>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <br/>
                            <button class="btn" style="background-color:MediumSeaGreen">Submit</button>
                        </div>
                    </div>
            </form>

            <!-- Configure a few settings and attach camera -->
            <script language="JavaScript">
                Webcam.set({
                    width: 200,
                    height: 200,
                    image_format: 'jpeg',
                    jpeg_quality: 90
                });
            
                Webcam.attach( '#my_camera' );
            
                function take_snapshot() {
                    Webcam.snap( function(data_uri) {
                        $(".image-tag").val(data_uri);
                        document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
                    } );
                }
            </script>

        <!-- </div> -->
    </div>
    </div>
</div>

</body>
</html>



            