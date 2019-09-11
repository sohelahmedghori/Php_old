<?php
$a = rand(1000,9999);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
	<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="boot/css/font-awesome.min.css">
	<script type="text/javascript" src="boot/js/jquery.js"></script>
	<script type="text/javascript" src="boot/js/bootstrap.bundle.min.js"></script>

	<script type="text/javascript">
		
		function more()
		{
			var tr = document.createElement("tr");

			var td1 = document.createElement("td");
			var td2 = document.createElement("td");
			var td3 = document.createElement("td");


			var input1 = document.createElement("input");
			var input2 = document.createElement("input");
			var input3 = document.createElement("input");

			input1.setAttribute("type", "text");
			input1.setAttribute("name", "p_name[]");

			input2.setAttribute("type", "text");
			input2.setAttribute("name", "p_qty[]");

			input3.setAttribute("type", "text");
			input3.setAttribute("name", "p_price[]");

			td1.appendChild(input1);
			td2.appendChild(input2);
			td3.appendChild(input3);

			tr.appendChild(td1);
			tr.appendChild(td2);
			tr.appendChild(td3);

			document.getElementById("tab").appendChild(tr);
		}
	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 offset-1 border">
			<form action="save.php" method="post" >
				<div class="card">
					<div class="card-header">
						<h1 class="text-center my-3">Shopping Invoice</h1>
					</div>
			<div class="form-group form-inline mt-1">
				<label>Invoice No. :</label>
				<input type="text" value="<?php echo $a; ?>" id="invc" disabled="disabled" class="form-group">
				<input type="hidden" name="ren_num" value="<?php echo $a; ?>">
			</div>
			<div class="form-group form-inline">
				<label>Customer Name :</label>
				<input type="text" name="c_name" class="form-group">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-10">
			<table class="table table-bordered" id="tab">
				<tr>
					<th>Product Name</th>
					<th>Product Qty.</th>
					<th>Product Price</th>
				</tr>
				<tr>
					<td><input type="text" name="p_name[]"></td>
					<td><input type="text" name="p_qty[]"></td>
					<td><input type="text" name="p_price[]"></td>
				</tr>
			</table>
					</div>
					<div class="col-md-2 mt-3">
					<input onclick="more()" type="button" name="" value="Add More" class="btn btn-warning my-1">
					<input type="submit" name="" value="Save" class="btn btn-success">
					</div>
				</div>
			</div>
		</div>
		</form>
		</div>
	</div>
</div>
</body>
</html>