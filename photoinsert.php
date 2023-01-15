<?php  

$name = $_POST['name'];
$address = $_POST['address'];
$number = $_POST['number'];

$con = mysqli_connect('localhost','root','','pitchntrack');

$query = "INSERT INTO `tbl_photoorder`(`name`, `address`, `number`) VALUES ('$name','$address','$number')";

$run = mysqli_query ($con,$query);

if($run == TRUE)
    echo "Data inserted successfully";
else
    echo "Error!!!";    


?>