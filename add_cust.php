<?php


include 'dbconnect.php';


$name = $_POST['cust_name'];
$debtor = $_POST['debtor'];
$gst = $_POST['gst'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$pin = $_POST['pincode'];
$state = $_POST['state'];
$country = $_POST['country'];
$sname = $_POST['name'];
$gst_no = $_POST['gst_no'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$city1 = $_POST['city1'];
$zip1 = $_POST['zip1'];
$state1 = $_POST['state1'];
$country1 = $_POST['country1'];
$mailid = $_POST['mailid'];
$contact_p = $_POST['contact_p'];
$contact = $_POST['c_number'];
$vendorcode = $_POST['vendorcode'];
$balance = $_POST['balance'];
$drcr = $_POST['drcr'];



$query = "INSERT INTO `customer`(`Customer_Name`, `GST_No`, `Address1`, `Address2`, `City`, `Pincode`, `State`, `Country`, `Contact_Person`, `Email`, `Contact_No`,`ShippingCustomer_Name`, `ShippingGST_No`, `ShippingAddress1`, `ShippingAddress2`, `ShippingCity`, `ShippingPincode`, `ShippingState`, `ShippingCountry`, `ShippingContact_Person`, `ShippingEmail`, `ShippingContact_No`, `Vendor_Code`,`Opening_Balance`, `Dr_Cr`) VALUES ('$name','$gst','$address','$address2','$city','$pin','$state','$country','$contact_p','$mailid','$contact','$sname','$gst_no','$add1','$add2','$city1','$zip1','$state1','$country1','$contact_p','$mailid','$contact','$vendorcode','$balance','$drcr')";




if ($conn->query($query) === TRUE) {
   
    echo "<SCRIPT type='text/javascript'> 
                                        alert('Registered Successfully!!');
                                    window.location.replace('leads.php');
        </SCRIPT>";     
    //echo "true";
        
} 
else {
    echo "Error: " . $query . "<br>" . $conn->error;
}


?>
