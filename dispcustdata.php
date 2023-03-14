<?php

include 'dbconnect.php';

$prod_id = $_POST['id'];
$prod_id = trim($prod_id);

$sql = "SELECT * FROM `customer` WHERE `Customer_Id`='{$prod_id}'";

$res = mysqli_query($conn , $sql);

while($rows = mysqli_fetch_array($res)){
    ?>


   
<div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="invoice-info ">
                <strong class="customer-text">Billing Address</strong>
                <p class="invoice-details invoice-details-two invoice-details-box invoice-inner-head" style="padding:10px;">

                    <!-- Darren Elder <br>
                    806  Twin Willow Lane, Old Forge,<br>
                    Newyork, USA <br> -->
                    <strong><?php echo $rows['Customer_Name']; ?></strong><br>
                    <?php echo $rows['Address1']; ?>
                    <?php echo $rows['Address2']; ?><br>
                    <?php echo $rows['City']; ?> - 
                    <?php echo $rows['Pincode']; ?><br>
                    <?php echo $rows['State']; ?> - State Code:
                    <?php echo $rows['stateCode']; ?><br>
                    GST NO : <?php echo $rows['GST_No']; ?><br>
                    Email : <?php echo $rows['Email']; ?><br>
                    Contact Person : <?php echo $rows['Contact_Person']; ?><br>
                    Contact NO : <?php echo $rows['Contact_No']; ?><br>
                    
                </p>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="invoice-info">
                <strong class="customer-text">Shipping Address <a class="small" href="edit-invoice.html">Edit Address</a></strong>
                <p class="invoice-details invoice-details-two invoice-details-box invoice-inner-head" style="padding:10px;">
                    <!-- Walter Roberson <br>
                    299 Star Trek Drive, Panama City, <br>
                    Florida, 32405, USA <br> -->
                    <strong><?php echo $rows['ShippingCustomer_Name']; ?></strong><br>
                    <?php echo $rows['ShippingAddress1']; ?>
                    <?php echo $rows['ShippingAddress2']; ?><br>
                    <?php echo $rows['ShippingCity']; ?> - 
                    <?php echo $rows['ShippingPincode']; ?><br>
                    <?php echo $rows['ShippingState']; ?> - State Code:
                    <?php echo $rows['ShippingstateCode']; ?><br>
                    GST NO : <?php echo $rows['ShippingGST_No']; ?><br>
                    Email : <?php echo $rows['ShippingEmail']; ?><br>
                    Contact Person : <?php echo $rows['ShippingContact_Person']; ?><br>
                    Contact NO : <?php echo $rows['ShippingContact_No']; ?><br>
                </p>
            </div>	
        </div>
    </div>
</div>
													
    <?php
}

// echo $sql;
?>





