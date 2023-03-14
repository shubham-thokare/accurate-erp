<?php

include "dbconnect.php";



// insert into database 

$Supplier_Name = $_POST['Supplier_Name'];
$GST_No = $_POST['GST_No'];
// $sundry = $_POST['sundry'];
$Address1= $_POST['Address1'];
$Address2 = $_POST['Address2'];
$City = $_POST['City'];
$Pincode = $_POST['Pincode'];
$State = $_POST['State'];
$Country = $_POST['Country'];
$Contact_Person = $_POST['Contact_Person'];
$Email = $_POST['Email'];
$Contact_No = $_POST['Contact_No'];
$Vendor_Code = $_POST['Vendor_Code'];
$Account_holder = $_POST['Account_holder'];
$Account_No = $_POST['Account_No'];
$Ifsc = $_POST['Ifsc'];
$Bank_Branch = $_POST['Bank_Branch'];
$Opening_Balance = $_POST['Opening_Balance'];
$Dr_Cr = $_POST['Dr_Cr'];




$cust_query = "INSERT INTO `supplier`( `Supplier_Name`,`GST_No`,`Address1`, `Address2`, `City`, `Pincode`, `State`, `Country`, `Contact_Person`, `Email`, `Contact_No`, `Vendor_Code`, `Account_holder`, `Account_No`, `Ifsc`, `Bank_Branch`, `Opening_Balance`, `Dr_Cr`) 
VALUES ('$Supplier_Name','$GST_No','$Address1','$Address2','$City','$Pincode','$State','$Country','$Contact_Person','$Email','$Contact_No','$Vendor_Code','$Account_holder','$Account_No','$Ifsc','$Bank_Branch','$Opening_Balance','$Dr_Cr')";
    $query_1 = mysqli_query($conn , $cust_query );
    $msg = true;


    if(isset($msg)){
        $last_id = $conn->insert_id;
        // $_SESSION['message'] = " Data Successfully Inserted";
        // header('Location: excel_data.php?id = $last_id');
        // exit(0);

        echo "<SCRIPT type='text/javascript'> 
                alert('Registered Successfully!!');
                window.location.replace('supplier.php?id=$last_Supplier_Id');
            </SCRIPT>";
    }

    else{
        echo "<SCRIPT type='text/javascript'> 
                alert('Something Went Wrong!!');
                window.location.replace('supplier.php');
            </SCRIPT>";
    }
?>