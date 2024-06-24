<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cil_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
    // $name = $_POST['name'];
    // $address = $_POST['address'];
    // $id = $_POST['null'];
    $name = $_POST['visitorname'];
    $contact = $_POST['visitorcontact'];
    $mailid = $_POST['visitormailid'];
    $company = $_POST['visitororgname'];
    $designation = $_POST['visitordesignation'];
    $aadhar = $_POST['visitoraadhar'];
    $address = $_POST['visitoraddress'];
    $meet = $_POST['visitormeet'];
    $purpose = $_POST['visitorpurpose'];
    $luggege = $_POST['visitorluggege'];

// Save image
// $image_data = $_POST['image_data'];
// $image_path = "upload/" . uniqid() . ".png";
// file_put_contents($image_path, base64_decode($image_data));

$image_data = $_POST['image_data'];
// $image_data = str_replace('data:image/png; base64,', '', $image_data);
// $image_data = str_replace(' ', '+', $image_data);
$image_path = "upload/" . uniqid() . ".png";
// file_put_contents($image_path, base64_decode($image_data));


// Insert data into database
// $sql = "INSERT INTO tblvisitor (name, address, image) VALUES ('$name', '$address', '$image_path')";

$sql = "INSERT INTO tblvisitor (`visitorId`, `visitorName`, `visitorContactNo`, `visitorEmailID`, `visitorCompany`, `visitorDesignation`, `visitorAadharNo`, `visitorAddress`, `visitorMeet`, `visitorPurpose`, `visitorLuggege`, `visitorImage`) 
                    VALUES ('null', '$name', '$contact', '$mailid', '$company', '$designation', '$aadhar', '$address', 
                        '$meet', '$purpose', '$luggege', '$image_path')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
