<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 89.2%;
  width: auto;
  position: fixed;
  /* z-index: 0; */
  top: 8px;
  left: 0;
  /* background-color: #68aceb; */
  background-color: #495057;
  overflow-x: hidden;
  padding-top: 10px; /* Top margin */
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #f3ef0f;
  display: block;
}


.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidebar */
  font-size: 30px; /* Increased text to enable scrolling */
  padding: 0px 8px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>

<body>

    <div class="sidebar my-5">
        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        <a href="visitor.php"><i class="fa fa-fw fa-user"></i> Visitor Pass</a>
        <a href="test.php"><i class="fa fa-fw fa-truck"></i> Vehicle Pass</a>
        <a href="showrecord.php"><i class="fa fa-fw fa-cubes"></i> Reports </a>
        <a href="in_out.php"><i class="fa fa-fw fa-slideshare"></i> Setting</a>
        <a href="logout.php"><i class="fa fa-fw fa-sign-out"></i> Signout</a>
    </div>
<!-- 
    <div class="main">
        <div class="container-fluid p-2 bg-primary text-white text-center">
            <h1>MY PROJECT 2024</h1>
            <p>Design Best Vistor & Vehicle System</p> 
    </div> -->
   
</body>
</html> 