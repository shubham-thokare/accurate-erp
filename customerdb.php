<?php

include "dbconnect.php";

// insert into database 

$cust_name = $_POST['Customer_Name'];
// $sundry = $_POST['sundry'];
$gst = $_POST['GST_No'];
$sundry = $_POST['sundry'];
$Address1= $_POST['Address1'];
$Address2 = $_POST['Address2'];
$City = $_POST['City'];
$Pincode = $_POST['Pincode'];
$State = $_POST['State'];
$Country = $_POST['Country'];
$Contact_Person = $_POST['Contact_Person'];
$Email = $_POST['Email'];
$Contact_No = $_POST['Contact_No'];
// $vendor = $_POST['vendor'];
$ShippingCustomer_Name = $_POST['ShippingCustomer_Name'];
$ShippingGST_No = $_POST['ShippingGST_No'];
$ShippingAddress1 = $_POST['ShippingAddress1'];
$ShippingAddress2 = $_POST['ShippingAddress2'];
$ShippingCity = $_POST['ShippingCity'];
$ShippingPincode = $_POST['ShippingPincode'];
$ShippingState = $_POST['ShippingState'];
$ShippingCountry = $_POST['ShippingCountry'];
$ShippingContact_Person = $_POST['ShippingContact_Person'];
$ShippingContact_No = $_POST['ShippingContact_No'];
$Vendor_Code= $_POST['Vendor_Code'];
$Accounting_Group = $_POST['Accounting_Group'];
$PO_No = $_POST['PO_No'];
$PO_Date = $_POST['PO_Date'];
$Terms = $_POST['Terms'];
$Opening_Balance = $_POST['Opening_Balance'];
$As_On_Date = $_POST['As_On_Date'];
$Dr_Cr = $_POST['Dr_Cr'];
$CreatedBy = $_POST['CreatedBy'];
$Created_Date = $_POST['Created_Date'];
$Register_Id = $_POST['Register_Id'];
$User_Id = $_POST['User_Id'];




$cust_query = "INSERT INTO `customer`(`Customer_Name`, `GST_No`, `Address1`, `Address2`, `City`, `Pincode`, `State`, `Country`, `Contact_Person`, `Email`, `Contact_No`, `ShippingCustomer_Name`, `ShippingGST_No`, `ShippingAddress1`, `ShippingAddress2`, `ShippingCity`, `ShippingPincode`, `ShippingState`, `ShippingCountry`, `ShippingContact_Person`, `ShippingContact_No`, `Vendor_Code`, `Accounting_Group`, `PO_No`, `PO_Date`, `Terms`, `Opening_Balance`, `As_On_Date`, `Dr_Cr`, `CreatedBy`, `Created_Date`, `Register_Id`, `User_Id`)
 VALUES ('$Customer_Name','$GST_No','$Address1','$Address2','$City','$Pincode','$State','$Country','$Contact_Person','$Email','$Contact_No','$ShippingCustomer_Name','$ShippingGST_No','$ShippingAddress1','$ShippingAddress2','$ShippingCity','$ShippingPincode','$ShippingState','$ShippingCountry','$ShippingContact_Person','$ShippingContact_No','$Vendor_Code','$Accounting_Group','$PO_No','$PO_Date','$Terms','$Opening_Balance','$As_On_Date','$Dr_Cr','$CreatedBy','$Created_Date','$Register_Id','$User_Id')";
    $query_1 = mysqli_query($conn , $cust_query );
    $msg = true;


    if(isset($msg)){
        $last_id = $conn->insert_id;
        // $_SESSION['message'] = " Data Successfully Inserted";
        // header('Location: excel_data.php?id = $last_id');
        // exit(0);

        echo "<SCRIPT type='text/javascript'> 
                alert('Registered Successfully!!');
                window.location.replace('customer.php?id=$last_id');
            </SCRIPT>";
    }

    else{
        echo "<SCRIPT type='text/javascript'> 
                alert('Something Went Wrong!!');
                window.location.replace('customer.php');
            </SCRIPT>";
    }
?>