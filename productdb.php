<?php

include "dbconnect.php";



// insert into database 
$ProductName = $_POST['ProductName'];
$Product_Description = $_POST['Product_Description'];
$Product_Type = $_POST['Product_Type'];
$Part_Code = $_POST['Part_Code'];
$HSN_Code = $_POST['HSN_Code'];
$Unit= $_POST['Unit'];
$Rate = $_POST['Rate'];
$Category = $_POST['Category'];
$Applicable_Tax = $_POST['Applicable_Tax'];
$Opening_Stock = $_POST['Opening_Stock'];





$cust_query = "INSERT INTO `product`(`ProductName`,`Product_Description`, `Product_Type`,`Part_Code`, `HSN_Code`, `Unit`, `Rate`, `Category`, `Applicable_Tax`, `Opening_Stock`) 
VALUES ('$ProductName','$Product_Description','$Product_Type','$Part_Code','$HSN_Code','$Unit','$Rate','$Category','$Applicable_Tax','$Opening_Stock')";
    $query_1 = mysqli_query($conn , $cust_query );
    $msg = true;


    if(isset($msg)){
        $last_id = $conn->insert_id;
        // $_SESSION['message'] = " Data Successfully Inserted";
        // header('Location: excel_data.php?id = $last_id');
        // exit(0);

        echo "<SCRIPT type='text/javascript'> 
                alert('Registered Successfully!!');
                window.location.replace('product.php?id=$last_Product_Id');
            </SCRIPT>";
    }

    else{
        echo "<SCRIPT type='text/javascript'> 
                alert('Something Went Wrong!!');
                window.location.replace('product.php');
            </SCRIPT>";
    }
?>