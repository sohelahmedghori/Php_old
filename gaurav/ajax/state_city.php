<?php
$con = mysqli_connect("localhost","root","","onlineshop");
$query = "SELECT * FROM state";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
         $("#state").change(function(){
         	var a = $(this).val();
         	$.ajax({
         		url	: "get_city.php",
         		type : "post",
         		data : {state : a},
         		success : function(res){
         			$("#city").html(res);
         			// alert(res);
         		}
         	});
           
         });
		});


	</script>
</head>
<body>
Select
<select id="state">
	<option>Select</option>
	<?php
	while($data=mysqli_fetch_assoc($result))
	{
	?>
	<option value="<?php echo $data['id'];?>"><?php echo $data['statename']; ?></option>
<?php
}
?>
</select>
<br>
<br>
Select<select id="city">
	<option>Select</option>
</select>
</body>
</html>