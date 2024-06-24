<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <style type="text/css">
        .flex-container {
            /* background-image: url("partials/pexels3.jpg"); */
            position: absolute;
            right: 10px;
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
    <div class="flex-container">

    <div class="row" style="padding: 10px; margin: 10px;">
        <h2 style="text-align:center; background-color: MediumSeaGreen">Employee Form</h2>

        <form action="empsave.php" method="post">

            <div class="row" style="padding: 5px">
                <div class="col">
                    <div class="form-floating mb-2 mt-2">
                        <input type="text" class="form-control" placeholder="Enter Emp code" id="empcode" name="empcode" required>
                        <label for="empcode">Employee Code</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating mb-2 mt-2">
                        <input type="text" class="form-control" placeholder="Enter Emp Name" id="empname" name="empname" required>
                        <label for="empname">Employee Name</label>
                    </div>
                </div>
                    
            </div>
            <div class="row" style="padding: 5px">
                <div class="col">
                    <div class="form-floating mb-2 mt-2">
                        <input type="text" class="form-control" placeholder="Enter Emp Department" id="empdept" name="empdept" required>
                        <label for="empdept">Department:</label>
                    </div>
                </div>
                
                <div class="col">
                    <div class="form-floating mb-2 mt-2">
                        <input type="text" class="form-control" placeholder="Enter Emp Designation" id="empdesignation" name="empdesignation" required>
                        <label for="empdesignation">Designation:</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating mb-2 mt-2">
                        <input type="text" class="form-control" placeholder="Enter Emp Contact No" id="empmobileno" name="empmobileno" required>
                        <label for="empmobileno">Mobile Number:</label>
                    </div>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col">
                    <div class="form-floating mb-2 mt-2">
                        <select id="empgender" class="form-control" name="empgender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select><br>
                        <label for="empgender">Gender:</label><br>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-2 mt-2">
                        <select id="empstatus" class="form-control" name="empstatus" required>
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select><br>
                        <label for="empstatus">Status:</label><br>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="form-floating mb-2 mt-2">
                    <input type="submit" class="form-control" value="Submit">
                </div>
            </div>  
        
        </form>
    </div>
    </div>
</body>
</html>
