<?Php

  // print_r($_POST);
    include('../db.php');


    $a=$_POST['cat_name'];

    $query=" insert into category(cat_name) values ('$a')";

    mysqli_query($con,$query);
    header("location:addcat.php")
?>

