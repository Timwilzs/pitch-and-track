<?php 

	$name = $_POST['name'];
    $address = $_POST['address'];
    $number = $_POST['number'];

	$con = mysqli_connect('localhost','root','','pitchntrack');

	$query = "INSERT INTO `tdl_videorder`(`name`, `address`, `number`) VALUES ('$name','$address','$number')";

	$run = mysqli_query($con,$query);

	if($run == TRUE)
		echo "Data inserted Successfully";
	else
		echo "Error !!!";


 ?>