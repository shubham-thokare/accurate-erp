$(document).ready(function(){
	var DOMAIN = "http://localhost/accurate3/accurate";

	addNewRow();

	$("#add").click(function(){
		addNewRow();
	})

	function addNewRow(){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {getNewOrderItem:1},
			success : function(data){
				$("#invoice_item").append(data);
				var n = 0;
				$(".number").each(function(){
					$(this).html(++n);
				})
			}
		})
	}

	$("#remove").click(function(){
		$("#invoice_item").children("tr:last").remove();
		calculate(0,0);
	})

	$("#invoice_item").delegate(".Product_Id","change",function(){
		var pid = $(this).val();
		var tr = $(this).parent().parent();
		$(".overlay").show();
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {getPriceAndQty:1,id:pid},
			success : function(data){
				tr.find(".prod").val(data["Product_Description"]);
				tr.find(".hsn").val(data["HSN_Code"]);
				tr.find(".qty").val(1);
				tr.find(".tqty").val(data["Unit"]);
				tr.find(".discount").val(1);
			
				tr.find(".price").val(data["Rate"]);
				
			
				tr.find(".tax").val(1);
				 tr.find("amt").val(1);
				 tr.find(".amt1").html( tr.find(".qty").val() * tr.find(".price").val()/tr.find(".discount").val());

				 tr.find(".amt").html(tr)
				 tr.find(".amt").html( Number(tr.find(".amt1").val()) - Number(tr.find(".discount").val()));
				calculate(0,0);
				
			}
		})
	})

	$("#invoice_item").delegate(".discount,.qty,.amt1,.price","keyup",function(){
		
		var qty = $(this);
		var price = $(this);
		var amt1 = $(this);
		var discount = $(this);
		var tr = $(this).parent().parent();
		if (isNaN(qty.val())) {
			alert("Please enter a valid quantity");
			qty.val(1);
		}
		
		else{
			if ((qty.val() - 0) > (tr.find(".tqty").val()-0)) {
				alert("Sorry ! This much of quantity is not available");
			 	aty.val(1);
			 }else{
				
				tr.find(".amt1").html(qty.val() * tr.find(".price").val());
				tr.find(".amt").html(amt1.val());
				calculate(0,0,0);
	
		}

			

	})

	// $("#invoice_item").delegate(".discount","keyup",function(){
	// 	// var qty = $(this);
	// 	var discount = $(this);
	// 	var tr = $(this).parent().parent();
	// 	if (isNaN(discount.val())) {
	// 		alert("Please enter a valid quantity");
	// 		discount.val(1);
	// 	}else{
	// 		// if ((qty.val() - 0) > (tr.find(".tqty").val()-0)) {
	// 		// 	alert("Sorry ! This much of quantity is not available");
	// 		// 	aty.val(1);
	// 		// }else{
	// 			tr.find(".amt").html(discount.val() * tr.find(".price").val());
	// 			calculate(0,0,0);
			
	// 	}
	// })
	

	function calculate(tran,paid){
		var sub_total = 0;
		var gst = 0;
		var net_total = 0;
		var transport = tran;
		var paid_amt = paid;
		var due = 0;
		$(".amt").each(function(){
			sub_total = sub_total + ($(this).html() * 1);
		})
		gst = 0.18 * sub_total;
		net_total = gst + sub_total;
		net_total = Number(sub_total) + Number(transport);


		// to get data by ID

		




		due = net_total - paid_amt;
		$("#gst").val(gst);
		$("#sub_total").val(sub_total);
		
		$("#transport").val(transport);
		$("#net_total").val(net_total);
		//$("#paid")
		$("#due").val(due);

	}
0
	$("#transport").keyup(function(){
		var transport = $(this).val();
		calculate(transport,0);
	})

	$("#paid").keyup(function(){
		var paid = $(this).val();
		var transport = $("#transport").val();
		calculate(transport,paid);
	})


	/*Order Accepting*/

	$("#order_form").click(function(){

		var invoice = $("#get_order_data").serialize();
		if ($("#cust_name").val() === "") {
			alert("Plaese enter customer name");
		}else if($("#paid").val() === ""){
			alert("Plaese eneter paid amount");
		}else{
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#get_order_data").serialize(),
				success : function(data){

					if (data < 0) {
						alert(data);
					}else{
						$("#get_order_data").trigger("reset");

						if (confirm("Do u want to print invoice ?")) {
							window.location.href = DOMAIN+"/includes/invoice_bill.php?invoice_no="+data+"&"+invoice;
						}
					}

						
						

					

				}
			});
		}
		
			
		
		

	});

});