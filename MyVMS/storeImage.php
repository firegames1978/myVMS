<?php
    
    $image = false;
    $id = "";
    $name = false;
    $contact = false;
    $mailid = false;
    $company = false;
    $designation = false;
    $aadhar = false;
    $address = false;
    $meet = false;
    $purpose = false;
    $luggege = false;
    $intime = false;
    $outtime = false;
    $status = false;
    $remark = false;

    if ($_SERVER ["REQUEST_METHOD"] == "POST")
        {
                include 'partials/_dbconnect.php';
                $image = $_POST['image'];
                $image_path = "upload/" . uniqid() . ".png";

                // file_put_contents($image_path, base64_decode($image));

                $id = $_POST['visitorid'];
                
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
                // $image = $_FILES['visitorImage'];
                // $intime = $_POST['visitorInTime'];
                // $outtime = $_POST['visitorOutTime'];
                // $status = $_POST['visitorstatus'];
                // $remark = $_POST['visitorremark'];

                // $sql = "INSERT INTO `tblvisitor` (`visitorId`, `visitorName`, `visitorContactNo`, `visitorEmailID`, `visitorCompany`, `visitorDesignation`, `visitorAadharNo`, `visitorAddress`, `visitorMeet`, `visitorPurpose`, `visitorLuggege`, `visitorImage`, `visitorInTime`, `visitorOutTime`, `visitorStatus`, `visitorRemark`) VALUES (NULL, 'NLB', '123', '342@co.in', NULL, NULL, '12345', 'Ajmer', '1', 'Official', NULL, NULL, '2024-01-24', '2024-01-24', '1', NULL)";

                $sql = "INSERT INTO tblvisitor (`visitorId`, `visitorName`, `visitorContactNo`, `visitorEmailID`, `visitorCompany`, `visitorDesignation`, `visitorAadharNo`, `visitorAddress`, `visitorMeet`, `visitorPurpose`, `visitorLuggege`, `visitorImage`, visitorInTime) 
                VALUES ('$id', '$name', '$contact', '$mailid', '$company', '$designation', '$aadhar', '$address', 
                    '$meet', '$purpose', '$luggege', '$image_path', NOW())";
                    
                    $query_run = mysqli_query($conn, $sql);
                
                    $image_parts = explode(";base64,", $image);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    
                    $image_base64 = base64_decode($image_parts[1]);
                    // $image_path = "upload/" . uniqid() . ".png";
                    // $fileName = uniqid() . '.png';
                    
                    // $file = $image_path . $fileName;
                    $file = $image_path;
                    file_put_contents($file, $image_base64);

                    // Retrieve the auto-incremented serial number
                    $serialNo = $conn->insert_id;
                    
                    echo '<script>alert("Your ticket no is '.$serialNo.' generated successfully"); window.location.href = "visitor.php";
                    </script>';
 
                    // print_r($fileName);

        }

?>
