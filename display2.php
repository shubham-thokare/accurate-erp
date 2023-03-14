<?php

include 'dbconnect.php';

$prod_id = $_POST['id'];
$prod_id = trim($prod_id);

$sql = "SELECT * FROM `product` WHERE `Product_Id`='{$prod_id}'";

$res = mysqli_query($conn , $sql);

while($rows = mysqli_fetch_array($res)){


    

?>
<tr>

   
<td>
<select class="select3 form-control select2-hidden-accessible" style="border-color:#fff !important;"name="prodname" id="select3" onchange="selectProduct()">
    
<?php  

$query = "SELECT * FROM `product`";
$query_show1 = mysqli_query($conn , $query);

while($show=mysqli_fetch_array($query_show1)){

?>
    
    <option value="<?php echo $show['Product_Id'];?>"><?php echo $show['ProductName'];?></option>

<?php

}

?>
</select>
</td>
    <td><input type="text" name="prodname" value="<?php echo $rows['Product_Description'];?>" class="form-control"></td>
    <td><input type="text" name="prodname" value="<?php echo $rows['HSN_Code'];?>" class="form-control" readonly></td>
    <td><input type="number" class="form-control" value="1.00" id="qty" ></td>
    <td><input type="text" class="form-control" value="<?php echo $rows['Unit'];?> " readonly></td>
    <td><input type="number" name="prodname" value="<?php echo $rows['Rate'];?>" id="price"  class="form-control"></td>
    <td><input type="text" name="prodname" class="form-control" id="discount" ></td>
    <td><input type="text" class="form-control" value="<?php echo $rows['Rate'];?>"   id = "amount"></td>
    <td><input type="text" class="form-control" value="<?php echo $rows['Applicable_Tax'];?> " readonly></td>
    <td class="add-remove text-end">
        <a href="javascript:void(0);" class="add-btns me-2"><i class="fas fa-plus-circle"></i></a> 
        <a href="#" class="copy-btn me-2"><i class="fas fa-copy"></i></a>
        <a href="javascript:void(0);" class="remove-btn"><i class="fa fa-trash-alt"></i></a>
    </td>
</tr>



<div class="invoice-total-inner">
<p >Gross Amount<span id="showAmt">

<input type="text" value="<?php echo $rows['Rate'];?>" id ="showAmt">
</span>
</p>
<p class="mb-3">Transport Charges<span><input style="border:2px solid #9a55ff ;" value="<?php echo $rows['HSN_Code'];?>" type="text" id ="tcharge" class="form-control-sm"></span></p>
<p>Gross Amount<span><input style="border:2px solid #9a55ff ;" type="text" id ="tcharge" class="form-control-sm"></span></p>
<!-- <div class="col-md-8">
<form action="">
<div class="mb-2">
<label for="">Transport Charges</label>
<input style="border:2px solid #9a55ff ;" type="text" id ="tcharge" class="form-control">
</div>
<div class="mb-3">
<label for="">Other Charges</label>
<input style="border:2px solid #9a55ff ;" type="text" id ="tcharge" class="form-control">
</div>
</form>
</div> -->
<p>Round Off
<input type="checkbox" id="status_1" class="check">
<label for="status_1" class="checktoggles">checkbox</label>
<span>$54</span>
</p>
</diV>


<?php
}

?>
<script>

    var x = <?php echo "$price" ?>;

    console.log(x);



    $(document).ready(function(){

        $("#qty").keyup(function(){
            var total = 0;

            var y = Number($("#qty").val());
            

            var total = x*y;

            $('#amount').val(total);

        });
        
    });

    
    $(document).ready(function(){

$("#price ,#qty,#discount").keyup(function(){
    var total = 0;
    var total1=0;
    var x = Number($("#qty").val());
    var y = Number($("#price").val());
    var z = Number($("#discount").val());
    

    var total1 = x*y*z/100;

    var total = x*y-total1;
    $('#amount').val(total);

});

});


</script>
