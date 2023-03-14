<?php

include "dbconnect.php";



// insert into database 

$name = $_POST['name'];

$product= $_POST['product'];
$gst = $_POST['gst'];




$opening = $_POST['opening'];
$dr = $_POST['dr'];




$cust_query = "INSERT INTO `ledger1`(`name`, `product`, `gst`, `opening`, `dr`) VALUES ('$name','$product','$gst','$opening','$dr')";
    $query_1 = mysqli_query($conn , $cust_query );
    $msg = true;


    if(isset($msg)){
        $last_id = $conn->insert_id;
        
        // $_SESSION['message'] = " Data Successfully Inserted";
        // header('Location: excel_data.php?id = $last_id');
        // exit(0);

        echo "<SCRIPT type='text/javascript'> 
                alert('Registered Successfully!!');
                window.location.replace('ledger.php?id=$last_id');
            </SCRIPT>";
    }

    else{
        echo "<SCRIPT type='text/javascript'> 
                alert('Something Went Wrong!!');
                window.location.replace('ledger.php');
            </SCRIPT>";
    }
?>