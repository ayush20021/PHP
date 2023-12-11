<?php 
$host = "localhost";
$id="root";
$pass="";
$db="employees";
$conn = mysqli_connect($host,$id,$pass,$db);
if(mysqli_connect_errno()){
    echo "". mysqli_connect_error();
}
$name = $_POST['p_name'];
$name = $_POST['p_mrp'];
$name = $_POST['p_price'];
$name = $_POST['p_desc'];
$FILE = $_FILES ['file']['name'];

$target_dir = "img/";
$taget_file=$target_dir.basename($FILE = $_FILES ['file']['name']);

if(move_uploaded_file($FILE = $_FILES ['file']['name'],$taget_file)){
        echo"ok";
}else{
    echo "Fucked UP";
}

$query="INSERT INTO `product` (`ID`, `Name`, `MRP`, `Sale Price`, `Details`, `File`) VALUES (NULL, '', '100000', '80000', 'dep', 'iphone 14')";








?>