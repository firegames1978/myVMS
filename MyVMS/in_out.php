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
    <title>Visitor Pass</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  

    <style type="text/css">
            #results { padding:5px; border:1px solid;}

            .tab {
            position: absolute;
            right: 30px;
            left: 220px;
            top: 80px;
            margin: auto;
            padding: 15px; 
            background-color: lightGreen; 
            color: black; 
            align-content: center;
            }
            
            .tabcontent {
            position: absolute;
            right: 100px;
            left: 220px;
            top: 150px;
            margin: auto;
            padding: 15px; 
            background-color: lightGreen; 
            color: black; 
            align-content: center;
            }
    </style>

     
</head>
<body>

    
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'VisitorIN')" id="defaultOpen">Visitor IN</button>
            <button class="tablinks" onclick="openTab(event, 'VisitorOUT')">Visitor OUT</button>
        </div>

        <div id="VisitorIN" class="tabcontent">
        <label for="id">Visitor IN:</label><br>
               <?php
                include "visitor.php";
                ?>
            
        </div>

        <div id="VisitorOUT" class="tabcontent">
            <h3>Mark Exit</h3>
            <form action="exit.php" method="post">
                <label for="id">Visitor ID:</label><br>
                <input type="text" id="id" name="id" required><br>
                <input type="submit" name="submit" value="Mark Exit">
            </form>
        </div>

        <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it to open the default tab
        document.getElementById("defaultOpen").click();
        </script>


</body>
</html>
