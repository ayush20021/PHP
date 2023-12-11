<?php 

include('connection.php');

$Name=$_POST['p_name'];
$Details=$_POST['p_details'];
$Mrp=$_POST['p_mrp'];
$Price = $_POST['p_price'];
$file = $_FILES['file']['name'];


$target_dir="products/";
$target_name = $target_dir.basename($_FILES['file']['name']);
move_uploaded_file( $_FILES['file']['tmp_name'],$target_name);
$sql = "INSERT INTO `product`(`ID`, `Name`, `Sale Price`, `Details`, `File`) VALUES (null,'$Name','$Price','$Details','$file')";

if(mysqli_query($conn,$sql)){
   header("Location:manageproduct.php");
}





?>