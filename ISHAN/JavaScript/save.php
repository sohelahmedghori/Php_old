<?php
// print_r($_POST);die;
$con = mysqli_connect("localhost","root","","test");

$ren_num = $_POST['ren_num']; //This is fetching id from input type hidden
$cname = $_POST['c_name'];

$query =" INSERT INTO customer (invoice_no, name) VALUES ('$ren_num','$cname')";
// echo $query;

mysqli_query($con, $query);

$id = mysqli_insert_id($con);
// echo $id;

$pname = $_POST['p_name'];
$pqty = $_POST['p_qty'];
$pprice = $_POST['p_price'];

$p = 0;
foreach($pname as $x)
{
	$c = $pqty[$p];
	$d = $pprice[$p];
	$query1 =" INSERT INTO buy (customer_id, product_name, qty, product_price) VALUES ('$id','$x','$c','$d')";

	mysqli_query($con, $query1);

	$p++;
}

// header("location:inovoice.php");
?>