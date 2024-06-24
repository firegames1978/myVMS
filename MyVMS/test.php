<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <style>
        body {font-family: Arial, sans-serif;}
        /* .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        } */

        .tab {
            /* background-image: url("partials/pexels3.jpg"); */
            position: absolute;
            right: 230px;
            left: 320px;
            margin: auto;
            /* max-width: auto; */
            padding: 15px; 
            background-color: lightGreen; 
            color: black; 
            /* text-align: center;  */
            align-content: center;
            }
  
            .tabcontent {
                position: absolute;
            right: 20px;
            left: 120px;
            margin: auto;
            /* max-width: auto; */
            padding: 15px; 
            background-color: lightGreen; 
            color: black; 
            /* text-align: center;  */
            align-content: center;
            }
    </style>
</head>
<body>


<div class="tab">
    <button class="tablinks" onclick="openTab(event, 'AddVisitor')" id="defaultOpen">Add Visitor</button>
    <button class="tablinks" onclick="openTab(event, 'MarkExit')">Mark Exit</button>
</div>

<div id="AddVisitor" class="tabcontent">
        <?php
        include "visitor.php";
        ?>
    
</div>

<div id="MarkExit" class="tabcontent">
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
