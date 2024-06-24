<?php
include 'partials/_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "UPDATE tblvisitor SET visitorOutTime = NOW() WHERE visitorId = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>showAlert('Exit time marked successfully', 'success');</script>";
        
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    header("Location: visitor.php");
}
?>