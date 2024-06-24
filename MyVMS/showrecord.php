<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cil_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve image data from the database
$sql = "SELECT * FROM tblvisitor WHERE visitorId = 1"; // Adjust this query as needed
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // Output data of the row
    $row = $result->fetch_assoc();
    
    $imagePath = $row["visitorImage"];
    $id = $row['visitorId'];
    $name = $row['visitorName'];
    $contact = $row['visitorContactNo'];
    $mailid = $row['visitorEmailID'];
    $company = $row['visitorCompany'];
    $designation = $row['visitorDesignation'];
    $aadhar = $row['visitorAadharNo'];
    $address = $row['visitorAddress'];
    $meet = $row['visitorMeet'];
    $purpose = $row['visitorPurpose'];
    $luggege = $row['visitorLuggege'];
    $intime = $row['visitorInTime'];
    $outtime = $row['visitorOutTime'];
    // `visitorId`, `visitorName`, `visitorContactNo`, `visitorEmailID`, `visitorCompany`, 
    // `visitorDesignation`, `visitorAadharNo`, `visitorAddress`, `visitorMeet`, `visitorPurpose`, 
    // `visitorLuggege`, `visitorImage`

    // '$id', '$name', '$contact', '$mailid', '$company', '$designation', '$aadhar', '$address', 
    // '$meet', '$purpose', '$luggege', '$image_path'

    // Close the connection
    $conn->close();
} 
else 
{
    echo "0 results";
    $conn->close();
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Details</title>
    <style>
        /* CSS styling */
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
        }
        .visitor-details {
            border: 1px solid #000;
            padding: 5px;
            width: 450px;
            margin: 0 auto;
            text-align: center;
        }
        .visitor-details img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        .no-print {
            display: inline-block;
            margin-top: 10px;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="visitor-details">
    <table>
        <tr>
            <td colspan="2">
            <img src="data:image/jpeg;base64,<?php echo base64_encode(file_get_contents($imagePath)); ?>" alt="Visitor Image" />
            </td>
        </tr>
        <tr>
            <td colspan="2"><p><strong>GatePass No:</strong> <?php echo $id; ?></p></td>
        </tr>
        <tr>
            <td><p><strong>Name:</strong> <?php echo $name; ?></p> </td>
            <td><p><strong>Contact:</strong> <?php echo $contact; ?></p></td>
        </tr>
        <tr>
            <td colspan="2"><p><strong>Email: </strong> <?php echo $mailid; ?></p></td>
        </tr>
        <tr>
            <td><p><strong>Company: </strong> <?php echo $company; ?></p></td>
            <td><p><strong>Designation:</strong> <?php echo $designation; ?></p></td>
        </tr>
        <tr>
            <td><p><strong>Aadhar No:</strong> <?php echo $aadhar; ?></p></td>
            <td><p><strong>Address:</strong> <?php echo $address; ?></p></td>
        </tr>
        <tr>
            <td><p><strong>Whom to Meet:</strong> <?php echo $meet; ?></p></td>
            <td><p><strong>Meeting Purpose:</strong> <?php echo $purpose; ?></p></td>
        </tr>
        <tr>
            <td><p><strong>Luggege:</strong> <?php echo $luggege; ?></p></td>
        </tr>
        <tr>
            <td><p><strong>In Time :</strong> <?php echo $intime; ?></p></td>
            <td><p><strong>Out Time :</strong> <?php echo $outtime; ?></p></td>
        </tr>
    </table>

</div>

<!-- Print Button -->
<button class="no-print" onclick="window.print()">Print this page</button>

</body>
</html>
