<?php
// print_r($_POST);
$con=mysqli_connect("localhost","root","password","e_commerce");
$a = $_POST['id'];
$b = $_POST['cust_name'];
$query="INSERT INTO customertable(invoice_no,name) VALUES('$a','$b')";
// die;
mysqli_query($con ,$query);
$id = mysqli_insert_id($con);
$x = $_POST['p_name'];
$y = $_POST['quan'];
$z = $_POST['p_price'];
$n=0;
foreach($x as $h)
{
	$o = $y[$n];
	$p = $z[$n];

	 $query1 = "INSERT INTO buy(cust_id,productname,quantity,price) VALUES('$id','$h' ,'$o', '$p')";
	mysqli_query($con ,$query1);
	$n++;
}
header("location:task2.php");
?>