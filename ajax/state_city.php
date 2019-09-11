<?php
$con = mysqli_connect("localhost", "root", "", "tss_11");
$que = "SELECT * FROM state";
$result = mysqli_query($con, $que);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#state").change(function(){
				// var a = $("#state").val();
				var a = $(this).val();
				$.ajax({
					url : "get_city.php",
					type : "post",
					data : { id : a },
					success : function(res){
						//alert(res);
						$("#city").html(res);
					}
				});
			});
		});
	</script>
</head>
<body>
<br />
<br />
Select State <select id="state">
	<option>Select</option>
	<?php
	while($data=mysqli_fetch_assoc($result))
	{ ?>
		<option value="<?php echo $data['id']; ?>"><?php echo $data['state_name'];?></option>
	<?php
	}
	?>

	
</select>
<Br />
<Br />
<Br />
Select City <select id="city">
	<option>Select</option>
</select>
</body>
</html>