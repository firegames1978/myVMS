<?php
    $showAlert = false;
    $showError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "CIL_DB";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
                // Retrieve form data
                // $empid = $_POST["empid"];
                $empcode = $_POST["empcode"];
                $empname = $_POST["empname"];
                $empdept = $_POST["empdept"];
                $empdesignation = $_POST["empdesignation"];
                $empmobileno = $_POST["empmobileno"];
                $empgender = $_POST["empgender"];
                $empstatus = $_POST["empstatus"];
            
                 // Get current date and time
                // $creationdate = date("Y-m-d H:i:s");
                // $creationdate = date('now()');

                // Prepare SQL statement
                $sql = "INSERT INTO stafflist (empcode, empname, empdept, empdesignation, empmobileno, empgender, empcreationdt, empstatus) 
                        VALUES ('$empcode', '$empname', '$empdept', '$empdesignation', '$empmobileno', '$empgender', NOW(), '$empstatus')";

                // Execute SQL statement
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();

        }
?>