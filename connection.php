<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $YourName  = $_POST['YourName'];
        $email = $_POST['email'];
        $Phone = $_POST['Phone'];
        $BillId = $_POST['BillId'];
        $NoOfUnitsConsumed = $_POST['NoOfUnitsConsumed'];
        $BillAmount = $_POST['BillAmount'];
        $NoOfFamilyMembers = $_POST['NoOfFamilyMembers'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO registration (YourName, email, Phone,BillId, NoOfUnitsConsumed, BillAmount, NoOfFamilyMembers) VALUES ('$YourName', '$email', '$Phone', '$BillId','$NoOfUnitsConsumed','$BillAmount','$NoOfFamilyMembers')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>