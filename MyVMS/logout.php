<?php
    session_start();
    // $_SESSION['username'] = $username;
    session_unset();
    session_destroy();
      // echo "You have been logged out."
      $_SESSION['username'] = $username;
      header("location: login.php");
       
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <!-- <div class="alert alert-info" role="alert">
      <h4 class="alert-heading">Visit Again!</h4>
      <p><?php echo $_SESSION['username'] ?>, You are logout Successfully !!</p>
    <hr>
    </div> -->


</body>
</html>
