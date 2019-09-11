<?php
// print_r($_POST);
$con=mysqli_connect("localhost","root","","babycare");
$a=$_POST['invoice_num'];
$b=$_POST['customer_name'];
$query="INSERT INTO customerdetail(invoice, c_name) VALUES ('$a','$b')";
mysqli_query($con, $query);
$id=mysqli_insert_id($con);

$x=$_POST['p_name'];
$y=$_POST['p_quantity'];
$z=$_POST['p_price'];
$n=0;
foreach ($x as $m)
{
	$o=$y[$n];
	$p=$z[$n];
	$query1="INSERT INTO purchasesdetail(c_id, productname, productquantity, price) VALUES ('$id', '$m', '$o', '$p')";
	mysqli_query($con, $query1);
	$n++;
}
header("location: task.php");
?>